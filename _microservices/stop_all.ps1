# ============================================================================
# CharityHub Microservices — Stop All Services
# ============================================================================
# Usage: .\stop_all.ps1
# This script kills all php artisan serve processes.
# ============================================================================

Write-Host ""
Write-Host "Stopping all CharityHub microservices..." -ForegroundColor Yellow

$processes = Get-Process -Name "php" -ErrorAction SilentlyContinue

if ($processes) {
    $processes | Stop-Process -Force
    Write-Host "All PHP processes stopped." -ForegroundColor Green
} else {
    Write-Host "No PHP processes found." -ForegroundColor Gray
}

Write-Host ""
