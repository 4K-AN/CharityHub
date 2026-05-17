<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'user_id',
        'amount',
        'donor_name',
        'message',
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
        ];
    }

    // =========================================================================
    // RELASI ELOQUENT
    // =========================================================================

    /**
     * Donasi milik sebuah campaign.
     */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * Donasi dilakukan oleh seorang user (Donatur).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
