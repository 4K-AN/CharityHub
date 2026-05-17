<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GatewayController extends Controller
{
    /**
     * Forward API request ke service yang tepat berdasarkan path.
     */
    public function forward(Request $request, string $path)
    {
        $url = $this->resolveUrl($path);
        $method = strtolower($request->method());

        $httpRequest = Http::withHeaders([
            'Authorization' => $request->header('Authorization', ''),
            'Accept'        => 'application/json',
        ])->timeout(10);

        try {
            $response = match ($method) {
                'get'    => $httpRequest->get($url, $request->query()),
                'post'   => $this->forwardPost($httpRequest, $request, $url),
                'put'    => $this->forwardPut($httpRequest, $request, $url),
                'delete' => $httpRequest->delete($url),
                default  => abort(405),
            };

            return response()->json(
                $response->json(),
                $response->status()
            );
        } catch (\Exception $e) {
            return response()->json([
                'error' => [
                    'message' => 'Service tidak tersedia: ' . $e->getMessage(),
                    'code'    => 503,
                ]
            ], 503);
        }
    }

    /**
     * Forward POST request (dengan dukungan multipart file upload).
     */
    private function forwardPost($http, Request $request, string $url)
    {
        if ($request->hasFile('image') || $request->hasFile('proof')) {
            return $this->forwardWithFiles($http, $request, $url, 'post');
        }
        return $http->post($url, $request->all());
    }

    /**
     * Forward PUT request (dengan dukungan multipart file upload).
     */
    private function forwardPut($http, Request $request, string $url)
    {
        if ($request->hasFile('image') || $request->hasFile('proof')) {
            // HTTP PUT dengan file: kirim sebagai POST + _method=PUT
            return $this->forwardWithFiles($http, $request, $url, 'post', ['_method' => 'PUT']);
        }
        return $http->put($url, $request->all());
    }

    /**
     * Forward request dengan file attachment (multipart/form-data).
     */
    private function forwardWithFiles($http, Request $request, string $url, string $method, array $extra = [])
    {
        $multipart = $http->asMultipart();

        foreach ($request->allFiles() as $key => $file) {
            $multipart = $multipart->attach(
                $key,
                file_get_contents($file->getRealPath()),
                $file->getClientOriginalName()
            );
        }

        $fields = array_merge($request->except(array_keys($request->allFiles())), $extra);
        foreach ($fields as $key => $value) {
            if ($value !== null) {
                $multipart = $multipart->attach($key, (string) $value);
            }
        }

        return $multipart->$method($url);
    }

    /**
     * Resolve path ke URL service tujuan.
     */
    private function resolveUrl(string $path): string
    {
        $authUrl     = env('AUTH_SERVICE_URL', 'http://localhost:8001');
        $campaignUrl = env('CAMPAIGN_SERVICE_URL', 'http://localhost:8002');
        $ledgerUrl   = env('LEDGER_SERVICE_URL', 'http://localhost:8003');

        // Auth endpoints
        if (in_array($path, ['register', 'login', 'logout', 'profile'])) {
            return "{$authUrl}/api/{$path}";
        }

        // Ledger sub-routes: campaigns/{id}/donations, campaigns/{id}/disbursements, campaigns/{id}/logs
        if (preg_match('/^campaigns\/\d+\/(donations|disbursements|logs)/', $path)) {
            return "{$ledgerUrl}/api/{$path}";
        }

        // Campaign endpoints: campaigns, campaigns/{id}, campaigns/search
        if (str_starts_with($path, 'campaigns')) {
            return "{$campaignUrl}/api/{$path}";
        }

        abort(404, 'Service route not found');
    }
}
