# ============================================================================
# CharityHub Microservices — Run Migrations for All Services
# ============================================================================
# Usage: .\migrate_all.ps1
# This script runs 'php artisan migrate' in each service that has a database.
# ============================================================================

$ErrorActionPreference = 'Stop'
$baseDir = $PSScriptRoot

# Step 1: Create databases
Write-Host ""
Write-Host "Creating databases..." -ForegroundColor Yellow
php "$baseDir\create_databases.php"

# Step 2: Run migrations for each service
$services = @(
    "$baseDir\service-auth",
    "$baseDir\service-campaign",
    "$baseDir\service-ledger"
)

foreach ($svc in $services) {
    $name = Split-Path $svc -Leaf
    Write-Host ""
    Write-Host "========================================" -ForegroundColor Cyan
    Write-Host "  Migrating: $name" -ForegroundColor Cyan
    Write-Host "========================================" -ForegroundColor Cyan
    
    Push-Location $svc
    php artisan migrate --force
    Pop-Location
}

Write-Host ""
Write-Host "All migrations complete!" -ForegroundColor Green
Write-Host ""
