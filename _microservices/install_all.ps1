# ============================================================================
# CharityHub Microservices — Install Dependencies for All Services
# ============================================================================
# Usage: .\install_all.ps1
# This script runs 'composer install' in each service directory.
# ============================================================================

$ErrorActionPreference = 'Stop'
$baseDir = $PSScriptRoot

$services = @(
    "$baseDir\service-auth",
    "$baseDir\service-campaign",
    "$baseDir\service-ledger",
    "$baseDir\gateway-service"
)

foreach ($svc in $services) {
    $name = Split-Path $svc -Leaf
    Write-Host ""
    Write-Host "========================================" -ForegroundColor Cyan
    Write-Host "  Installing: $name" -ForegroundColor Cyan
    Write-Host "========================================" -ForegroundColor Cyan
    
    Push-Location $svc
    composer install
    Pop-Location
}

Write-Host ""
Write-Host "All dependencies installed!" -ForegroundColor Green
Write-Host ""
