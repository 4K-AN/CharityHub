$ErrorActionPreference = 'Stop'
$src = "C:\Users\Angilbert\Documents\GitHub\CharityHub\_microservices\gateway"
$monolith = "C:\Users\Angilbert\Documents\GitHub\CharityHub"
$dst = "C:\Users\Angilbert\Documents\GitHub\charityhub-gateway"

# Gateway Controller
Copy-Item "$src\app\Http\Controllers\GatewayController.php" "$dst\app\Http\Controllers\GatewayController.php" -Force

# Bootstrap
Copy-Item "$src\bootstrap\app.php" "$dst\bootstrap\app.php" -Force

# Routes
Copy-Item "$src\routes\api.php" "$dst\routes\api.php" -Force
Copy-Item "$src\routes\web.php" "$dst\routes\web.php" -Force

# Env
Copy-Item "$src\.env" "$dst\.env" -Force

# Copy ALL Blade views from monolith
if (Test-Path "$dst\resources\views") { Remove-Item "$dst\resources\views" -Recurse -Force }
Copy-Item "$monolith\resources\views" "$dst\resources\views" -Recurse -Force

# Copy public/images from monolith
if (Test-Path "$monolith\public\images") {
    New-Item -ItemType Directory -Force -Path "$dst\public\images" | Out-Null
    Copy-Item "$monolith\public\images\*" "$dst\public\images\" -Recurse -Force
}

# Copy public/storage if exists (campaign images)
if (Test-Path "$monolith\public\storage") {
    Copy-Item "$monolith\public\storage" "$dst\public\storage" -Recurse -Force -ErrorAction SilentlyContinue
}

# Remove unnecessary database files from gateway
Remove-Item "$dst\database\database.sqlite" -Force -ErrorAction SilentlyContinue
Remove-Item "$dst\database\migrations" -Recurse -Force -ErrorAction SilentlyContinue

Write-Output "All Gateway files deployed successfully!"
