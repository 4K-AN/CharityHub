# ============================================================================
# CharityHub Microservices — Install Dependencies & Auto-Fix
# ============================================================================
# Usage: .\install_all.ps1
# This script automatically cleans old vendors, ensures cache folders exist,
# and runs 'composer install' in each service directory safely.
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
    Write-Host "  Processing: $name" -ForegroundColor Cyan
    Write-Host "========================================" -ForegroundColor Cyan
    
    Push-Location $svc

    # 1. Hapus folder vendor (Clean Install)
    if (Test-Path "vendor") {
        Write-Host "  [1/4] Menghapus folder vendor lama..." -ForegroundColor Yellow
        Remove-Item -Path "vendor" -Recurse -Force -ErrorAction SilentlyContinue
    }
    else {
        Write-Host "  [1/4] Folder vendor sudah bersih." -ForegroundColor DarkGray
    }

    # 2. Buat folder bootstrap/cache otomatis
    $cacheDir = "bootstrap\cache"
    Write-Host "  [2/4] Memastikan direktori $cacheDir..." -ForegroundColor Yellow
    if (-not (Test-Path $cacheDir)) {
        New-Item -ItemType Directory -Force -Path $cacheDir | Out-Null
        Write-Host "        -> Berhasil membuat folder cache baru." -ForegroundColor Green
    }
    else {
        Write-Host "        -> Folder cache sudah tersedia." -ForegroundColor DarkGray
    }

    # 3. Clear Composer Cache
    Write-Host "  [3/4] Membersihkan cache composer lokal..." -ForegroundColor Yellow
    composer clear-cache | Out-Null

    # 4. Install Dependencies
    Write-Host "  [4/4] Menjalankan composer install..." -ForegroundColor Yellow
    composer install

    Pop-Location
}

Write-Host ""
Write-Host "🎉 Semua dependencies berhasil diinstal dan folder cache telah diperbaiki!" -ForegroundColor Green
Write-Host ""