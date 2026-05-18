# ============================================================================
# CharityHub Microservices — Start All Services
# ============================================================================
# Usage: .\start_all.ps1
# This script starts all 4 microservices in separate terminal windows.
# ============================================================================

$ErrorActionPreference = 'Stop'
$baseDir = $PSScriptRoot

Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  CharityHub Microservices Launcher" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Step 1: Verify all services have vendor/ directories
$services = @(
    @{ Name = "Auth Service";     Path = "$baseDir\service-auth";     Port = 8001 },
    @{ Name = "Campaign Service"; Path = "$baseDir\service-campaign"; Port = 8002 },
    @{ Name = "Ledger Service";   Path = "$baseDir\service-ledger";   Port = 8003 },
    @{ Name = "Gateway";          Path = "$baseDir\gateway-service";  Port = 8000 }
)

foreach ($svc in $services) {
    if (-not (Test-Path "$($svc.Path)\vendor")) {
        Write-Host "[!] $($svc.Name): vendor/ not found. Run 'composer install' first:" -ForegroundColor Yellow
        Write-Host "    cd $($svc.Path) && composer install" -ForegroundColor Yellow
        Write-Host ""
    }
}

# Step 2: Start each service in a new terminal window
Write-Host "[1/4] Starting Auth Service on port 8001..." -ForegroundColor Green
Start-Process powershell -ArgumentList "-NoExit", "-Command", "cd '$baseDir\service-auth'; php artisan serve --port=8001 --host=0.0.0.0" -WindowStyle Normal

Write-Host "[2/4] Starting Campaign Service on port 8002..." -ForegroundColor Green
Start-Process powershell -ArgumentList "-NoExit", "-Command", "cd '$baseDir\service-campaign'; php artisan serve --port=8002 --host=0.0.0.0" -WindowStyle Normal

Write-Host "[3/4] Starting Ledger Service on port 8003..." -ForegroundColor Green
Start-Process powershell -ArgumentList "-NoExit", "-Command", "cd '$baseDir\service-ledger'; php artisan serve --port=8003 --host=0.0.0.0" -WindowStyle Normal

Start-Sleep -Seconds 2

Write-Host "[4/4] Starting Gateway on port 8000..." -ForegroundColor Green
Start-Process powershell -ArgumentList "-NoExit", "-Command", "cd '$baseDir\gateway-service'; php artisan serve --port=8000 --host=0.0.0.0" -WindowStyle Normal

Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  All services started!" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "  Gateway:          http://localhost:8000" -ForegroundColor White
Write-Host "  Auth Service:     http://localhost:8001" -ForegroundColor White
Write-Host "  Campaign Service: http://localhost:8002" -ForegroundColor White
Write-Host "  Ledger Service:   http://localhost:8003" -ForegroundColor White
Write-Host ""
Write-Host "  To stop all: .\stop_all.ps1" -ForegroundColor Yellow
Write-Host ""
