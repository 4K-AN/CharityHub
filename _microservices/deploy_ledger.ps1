$ErrorActionPreference = 'Stop'
$src = "C:\Users\Angilbert\Documents\GitHub\CharityHub\_microservices"
$dst = "C:\Users\Angilbert\Documents\GitHub\charityhub-ledger"

# Models
Copy-Item "$src\ledger\app\Models\Donation.php" "$dst\app\Models\Donation.php" -Force
Copy-Item "$src\ledger\app\Models\Disbursement.php" "$dst\app\Models\Disbursement.php" -Force
Copy-Item "$src\auth\app\Models\User.php" "$dst\app\Models\User.php" -Force

# Controllers
Copy-Item "$src\ledger\app\Http\Controllers\LedgerController.php" "$dst\app\Http\Controllers\LedgerController.php" -Force

# Middleware
New-Item -ItemType Directory -Force -Path "$dst\app\Http\Middleware" | Out-Null
Copy-Item "$src\auth\app\Http\Middleware\JwtAuthenticate.php" "$dst\app\Http\Middleware\JwtAuthenticate.php" -Force
Copy-Item "$src\auth\app\Http\Middleware\RoleMiddleware.php" "$dst\app\Http\Middleware\RoleMiddleware.php" -Force

# Config
Copy-Item "$src\auth\bootstrap\app.php" "$dst\bootstrap\app.php" -Force
Copy-Item "$src\auth\config\auth.php" "$dst\config\auth.php" -Force

# Routes
Copy-Item "$src\ledger\routes\api.php" "$dst\routes\api.php" -Force

# Env
Copy-Item "$src\ledger\.env" "$dst\.env" -Force

# Migration
Copy-Item "$src\ledger\database\migrations\2026_05_17_130100_create_ledger_tables.php" "$dst\database\migrations\2026_05_17_130100_create_ledger_tables.php" -Force

Write-Output "All Ledger files deployed successfully!"
