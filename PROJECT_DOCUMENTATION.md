# 📚 CharityHub - Complete Project Documentation

**Version**: 1.0.0  
**Last Updated**: May 19, 2026  
**Status**: MVP (Minimum Viable Product)  
**Repository**: https://github.com/4K-AN/CharityHub

---

## 📋 Table of Contents

1. [Project Overview](#project-overview)
2. [Vision & Mission](#vision--mission)
3. [Key Features](#key-features)
4. [Tech Stack](#tech-stack)
5. [System Architecture](#system-architecture)
6. [Database Design](#database-design)
7. [Project Structure](#project-structure)
8. [API Documentation](#api-documentation)
9. [Installation & Setup](#installation--setup)
10. [Configuration](#configuration)
11. [Frontend Pages](#frontend-pages)
12. [Usage Guide](#usage-guide)
13. [Authentication & Security](#authentication--security)
14. [Deployment](#deployment)
15. [Troubleshooting](#troubleshooting)
16. [Roadmap](#roadmap)
17. [Contributing](#contributing)
18. [License](#license)

---

## 🎯 Project Overview

**CharityHub** is a modern, transparent charity donation platform built with Laravel 12 and a Tailwind CSS frontend. The platform connects donors with charitable campaigns while ensuring **complete transparency** through real-time fund tracking and public audit trails.

### Problem Statement
- 🚫 **Lack of Transparency**: Donors often don't know where their money goes
- 😟 **Trust Issues**: Low confidence in charitable organizations
- 📊 **Poor Tracking**: Difficult to monitor campaign progress
- 🔒 **Limited Oversight**: No public accountability for fund usage

### Our Solution
- ✅ **Real-time Tracking**: Every rupiah is trackable in real-time
- 📖 **Public Ledger**: All transactions are publicly auditable
- 🔐 **Secure Payments**: Multi-channel payment processing
- 📈 **Impact Metrics**: Donors see real impact of their contribution

---

## 🌟 Vision & Mission

### Vision
> "Empowering donors and charities through radical transparency in philanthropic work"

### Mission
1. Eliminate doubt in charitable giving through transparent fund tracking
2. Streamline campaign management for organizations
3. Create a trusted ecosystem where every rupiah creates measurable impact
4. Build technology that prioritizes accountability and trust

---

## 🎁 Key Features

### 1. 🔐 User Authentication & Management
- **Registration & Login**: Email-based authentication with JWT
- **Role-Based Access**:
  - 👤 **Donators**: Browse and donate to campaigns
  - 📢 **Campaigners**: Create and manage campaigns
  - 🛡️ **Admins**: Platform oversight and moderation
- **Profile Management**: View donation history, track impact, manage preferences

### 2. 💰 Campaign Management
- **Campaign Creation**: Campaigners can easily create fundraising campaigns
- **Campaign Details**:
  - Title, description, target goal
  - Cover image, deadline, category
  - Real-time progress tracking
- **Search & Filter**: Find campaigns by category, status, or keywords
- **Status Tracking**: Active, Completed, Closed status indicators

### 3. 🎯 Donation System
- **Multiple Payment Methods**:
  - Bank Transfer (BCA, Mandiri, etc.)
  - E-Wallet (GCash, Dana, OVO, LinkAja)
  - Credit/Debit Card
- **Donation Options**:
  - Preset amounts for quick donations
  - Custom amount input
  - Anonymous donation option
  - One-time or recurring donations
- **Real-time Confirmation**: Instant donation receipt and email confirmation

### 4. 📊 Transparency Ledger
- **Public Audit Trail**: All transactions visible to public
- **Fund Tracking**:
  - Incoming donations with donor info (or anonymous)
  - Outgoing disbursements with descriptions
  - Fund allocation breakdown
- **Charts & Reports**: Visual representation of fund flow
- **Downloadable Reports**: CSV/PDF export for auditing

### 5. 👥 Donor Dashboard
- **Donation History**: Complete list of all donations
- **Impact Metrics**:
  - Total donated amount
  - Campaigns supported
  - Measurable impact (e.g., students helped)
  - Donor ranking/badges
- **Campaign Following**: Track campaigns you support
- **Download Receipts**: Tax-deductible donation receipts

### 6. 📈 Admin Dashboard
- **Campaign Management**: View, edit, approve campaigns
- **Donor Management**: Monitor donor behavior and statistics
- **Fund Analytics**: Charts showing donation trends
- **Moderation Tools**: Flag or remove inappropriate content
- **System Health**: Monitor API performance and database

### 7. 🔒 Security Features
- JWT token-based authentication
- Role-based access control (RBAC)
- SSL/HTTPS encryption
- SQL injection prevention (Eloquent ORM)
- CSRF protection
- Password hashing with bcrypt
- Secure API endpoints with middleware

---

## 🛠 Tech Stack

### Backend
| Component | Technology | Version | Purpose |
|-----------|-----------|---------|---------|
| **Framework** | Laravel | 12.0 | Web application framework |
| **Language** | PHP | 8.2+ | Server-side programming |
| **Database** | MySQL | 8.0+ | Relational data storage |
| **Authentication** | JWT (tymon/jwt-auth) | 2.3 | Token-based auth |
| **ORM** | Eloquent | Built-in | Database abstraction |
| **Queue** | Laravel Queue | Built-in | Async job processing |
| **Cache** | Redis | Optional | Performance caching |

### Frontend
| Component | Technology | Version | Purpose |
|-----------|-----------|---------|---------|
| **Templating** | Blade | Built-in | Server-side HTML templating |
| **CSS Framework** | Tailwind CSS | 4.0 | Utility-first styling |
| **Build Tool** | Vite | 7.0+ | Fast module bundler |
| **JavaScript** | Axios | 1.11+ | HTTP client for APIs |
| **Icons** | Material Symbols | Latest | Icon library |
| **Fonts** | Inter | Latest | Modern typeface |

### Development Tools
- **Version Control**: Git/GitHub
- **Package Manager**: Composer (PHP), npm (Node.js)
- **Code Quality**: Laravel Pint, PHPUnit
- **Testing**: PHPUnit 11+
- **Documentation**: Laravel Documentation, API docs

### Infrastructure (Optional)
- **Hosting**: Laravel Forge, AWS, DigitalOcean
- **Container**: Docker (for microservices)
- **CI/CD**: GitHub Actions
- **Monitoring**: New Relic, DataDog (optional)

---

## 🏗 System Architecture

### High-Level Architecture
```
┌─────────────────────────────────────────────────────────────┐
│                    CLIENT LAYER                             │
│              (Web Browser - Blade Templates)                │
└────────────────────┬────────────────────────────────────────┘
                     │ HTTP/HTTPS
┌────────────────────▼────────────────────────────────────────┐
│                  API GATEWAY                                │
│         (Route Handler - api.php)                           │
│    - Request Routing                                        │
│    - CORS Handling                                          │
│    - Rate Limiting (Optional)                               │
└────────────────────┬────────────────────────────────────────┘
                     │
     ┌───────────────┼───────────────┬──────────────┐
     │               │               │              │
┌────▼────┐  ┌──────▼───────┐  ┌───▼──────┐  ┌───▼───────┐
│  AUTH   │  │  CAMPAIGN    │  │ DONATION │  │  LEDGER   │
│SERVICE  │  │  SERVICE     │  │ SERVICE  │  │ SERVICE   │
└────┬────┘  └──────┬───────┘  └───┬──────┘  └───┬───────┘
     │              │              │             │
     └──────────────┼──────────────┼─────────────┘
                    │
         ┌──────────▼──────────┐
         │   ELOQUENT ORM      │
         │  (Data Abstraction) │
         └──────────┬──────────┘
                    │
         ┌──────────▼──────────┐
         │   MySQL Database    │
         │  (Data Persistence) │
         └─────────────────────┘
```

### Service Layer Breakdown
```
1. AUTH SERVICE
   - User registration & login
   - Token generation & validation
   - Profile management
   - Role verification

2. CAMPAIGN SERVICE
   - Campaign CRUD operations
   - Campaign search & filtering
   - Campaign status management
   - Progress calculations

3. DONATION SERVICE
   - Donation creation & tracking
   - Payment processing
   - Receipt generation
   - Anonymous donation handling

4. LEDGER SERVICE (PUBLIC API)
   - Real-time fund tracking
   - Transaction history
   - Disbursement logs
   - Public audit trail
```

### Data Flow
```
User Request
    ↓
Route Handler (api.php)
    ↓
Middleware (JWT Auth, CORS, etc.)
    ↓
Controller (Business Logic)
    ↓
Model (Data Validation)
    ↓
Database Query (Eloquent)
    ↓
Response (JSON)
    ↓
Client
```

---

## 📊 Database Design

### Entity Relationship Diagram (ERD)
```
┌──────────────────┐
│      USERS       │
├──────────────────┤
│ id (PK)          │
│ name             │
│ email (UNIQUE)   │
│ password (hash)  │
│ role             │
│ avatar_url       │
│ created_at       │
│ updated_at       │
└────────┬─────────┘
         │
    ┌────┴──────────────────┬────────────────────┐
    │                       │                    │
┌───▼──────────────┐  ┌─────▼──────────┐  ┌────▼─────────────┐
│   CAMPAIGNS      │  │   DONATIONS    │  │ DISBURSEMENTS    │
├──────────────────┤  ├────────────────┤  ├──────────────────┤
│ id (PK)          │  │ id (PK)        │  │ id (PK)          │
│ user_id (FK)     │  │ campaign_id    │  │ campaign_id (FK) │
│ title            │  │ (FK)           │  │ amount           │
│ description      │  │ donor_id (FK)  │  │ description      │
│ goal_amount      │  │ amount         │  │ date_disbursed   │
│ image_url        │  │ payment_method │  │ verified_by      │
│ status           │  │ is_anonymous   │  │ receipt_url      │
│ deadline         │  │ created_at     │  │ created_at       │
│ created_at       │  │ updated_at     │  │ updated_at       │
│ updated_at       │  │                │  │                  │
│ deleted_at       │  │ created_at     │  │ deleted_at       │
│ (SoftDeletes)    │  │ updated_at     │  └──────────────────┘
└──────────────────┘  └────────────────┘
```

### Database Tables

#### 1. Users Table
```sql
CREATE TABLE users (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('Donator', 'Campaigner', 'Admin') DEFAULT 'Donator',
    avatar_url VARCHAR(255) NULLABLE,
    phone VARCHAR(20) NULLABLE,
    bio TEXT NULLABLE,
    email_verified_at TIMESTAMP NULLABLE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULLABLE
);
```

#### 2. Campaigns Table
```sql
CREATE TABLE campaigns (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    user_id BIGINT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description LONGTEXT NOT NULL,
    goal_amount DECIMAL(15, 2) NOT NULL,
    image_url VARCHAR(255) NULLABLE,
    status ENUM('Aktif', 'Selesai', 'Ditutup') DEFAULT 'Aktif',
    category VARCHAR(100) NULLABLE,
    deadline DATE NULLABLE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULLABLE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    INDEX idx_status (status),
    INDEX idx_user_id (user_id)
);
```

#### 3. Donations Table
```sql
CREATE TABLE donations (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    campaign_id BIGINT NOT NULL,
    donor_id BIGINT NULLABLE,
    amount DECIMAL(15, 2) NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    payment_reference VARCHAR(255) NULLABLE,
    is_anonymous BOOLEAN DEFAULT FALSE,
    status ENUM('Pending', 'Completed', 'Failed') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (campaign_id) REFERENCES campaigns(id) ON DELETE CASCADE,
    FOREIGN KEY (donor_id) REFERENCES users(id) ON DELETE SET NULL,
    INDEX idx_campaign_id (campaign_id),
    INDEX idx_donor_id (donor_id),
    INDEX idx_status (status)
);
```

#### 4. Disbursements Table
```sql
CREATE TABLE disbursements (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    campaign_id BIGINT NOT NULL,
    amount DECIMAL(15, 2) NOT NULL,
    description TEXT NOT NULL,
    receipt_url VARCHAR(255) NULLABLE,
    date_disbursed DATE NOT NULL,
    verified_by BIGINT NULLABLE,
    status ENUM('Pending', 'Approved', 'Rejected') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (campaign_id) REFERENCES campaigns(id) ON DELETE CASCADE,
    FOREIGN KEY (verified_by) REFERENCES users(id) ON DELETE SET NULL,
    INDEX idx_campaign_id (campaign_id),
    INDEX idx_status (status)
);
```

### Key Design Decisions
- ✅ **Soft Deletes**: Data never truly deleted, maintained for audit trails
- ✅ **Foreign Keys**: Referential integrity with cascading deletes
- ✅ **Indexes**: Optimized for common query patterns
- ✅ **Type Casting**: Decimal for monetary amounts (not float)
- ✅ **Timestamps**: Track record creation and updates
- ✅ **Normalization**: 3NF to minimize redundancy

---

## 📁 Project Structure

```
CharityHub/
│
├── app/                          # Application code
│   ├── Http/
│   │   ├── Controllers/          # Business logic handlers
│   │   │   ├── AuthController.php
│   │   │   ├── CampaignController.php
│   │   │   ├── DonationController.php
│   │   │   └── LedgerController.php
│   │   ├── Middleware/           # Request filters
│   │   │   ├── JwtAuth.php
│   │   │   └── RoleCheck.php
│   │   └── Requests/             # Request validation
│   │
│   ├── Models/                   # Data models (Eloquent)
│   │   ├── User.php
│   │   ├── Campaign.php
│   │   ├── Donation.php
│   │   └── Disbursement.php
│   │
│   ├── Services/                 # Business logic services
│   │   ├── AuthService.php
│   │   ├── CampaignService.php
│   │   ├── DonationService.php
│   │   └── LedgerService.php
│   │
│   └── Providers/                # Service providers
│       └── AppServiceProvider.php
│
├── bootstrap/                    # Framework bootstrapping
│   ├── app.php
│   └── providers.php
│
├── config/                       # Configuration files
│   ├── app.php
│   ├── auth.php
│   ├── database.php
│   ├── jwt.php
│   ├── mail.php
│   └── queue.php
│
├── database/
│   ├── migrations/               # Database schema
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2026_05_17_130000_create_campaigns_table.php
│   │   ├── 2026_05_17_130100_create_donations_table.php
│   │   └── 2026_05_17_130200_create_disbursements_table.php
│   ├── factories/                # Test data generators
│   │   └── UserFactory.php
│   └── seeders/                  # Database seeders
│       └── DatabaseSeeder.php
│
├── public/                       # Web root
│   ├── index.php
│   ├── storage/                  # Public uploads
│   └── robots.txt
│
├── resources/
│   ├── css/                      # Stylesheets
│   │   └── app.css
│   ├── js/                       # Client-side scripts
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── views/                    # Blade templates
│       ├── layouts/
│       │   └── app.blade.php
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       ├── cms/                  # Admin pages
│       │   ├── dashboard.blade.php
│       │   ├── create-campaign.blade.php
│       │   └── manage-ledger.blade.php
│       ├── landing.blade.php
│       ├── campaign-detail.blade.php
│       ├── checkout.blade.php
│       ├── profile.blade.php
│       └── contact.blade.php
│
├── routes/                       # Route definitions
│   ├── api.php                   # API routes
│   ├── web.php                   # Web routes
│   └── console.php               # Console routes
│
├── storage/                      # File storage
│   ├── app/
│   ├── logs/
│   └── framework/
│
├── tests/                        # Test suite
│   ├── Feature/
│   │   └── ExampleTest.php
│   └── Unit/
│       └── ExampleTest.php
│
├── _microservices/               # Microservices (future)
│   ├── auth/
│   ├── campaign/
│   ├── ledger/
│   └── gateway/
│
├── .env                          # Environment variables
├── .env.example                  # Example env file
├── .gitignore                    # Git ignore rules
├── composer.json                 # PHP dependencies
├── composer.lock                 # Locked dependencies
├── package.json                  # Node dependencies
├── package-lock.json             # Locked npm packages
├── vite.config.js                # Vite configuration
├── phpunit.xml                   # PHPUnit config
├── artisan                        # CLI command tool
└── README.md                      # Project overview
```

---

## 🔌 API Documentation

### Base URL
```
Development:  http://localhost:8000/api
Production:   https://charityhub.com/api
```

### Authentication
All protected endpoints require JWT token in header:
```
Authorization: Bearer <token>
```

### Response Format
```json
{
    "message": "Success message or error",
    "data": {
        // Response payload
    },
    "error": null  // Null on success, error object on failure
}
```

### Error Response
```json
{
    "message": "Error message",
    "data": null,
    "error": {
        "code": "ERROR_CODE",
        "details": "Additional error details"
    }
}
```

### API Endpoints

#### Authentication Service

**Register User**
```
POST /api/register
Content-Type: application/json

{
    "name": "Budi Santoso",
    "email": "budi@example.com",
    "password": "SecurePassword123!",
    "role": "Donator"  // or "Campaigner"
}

Response: 201 Created
{
    "message": "User registered successfully",
    "data": {
        "user": {...},
        "token": "eyJ..."
    }
}
```

**Login**
```
POST /api/login
Content-Type: application/json

{
    "email": "budi@example.com",
    "password": "SecurePassword123!"
}

Response: 200 OK
{
    "message": "Login successful",
    "data": {
        "user": {...},
        "token": "eyJ..."
    }
}
```

**Get Profile** (Protected)
```
GET /api/profile
Authorization: Bearer <token>

Response: 200 OK
{
    "message": "Profile retrieved",
    "data": {
        "user": {
            "id": 1,
            "name": "Budi Santoso",
            "email": "budi@example.com",
            "role": "Donator"
        }
    }
}
```

**Logout** (Protected)
```
POST /api/logout
Authorization: Bearer <token>

Response: 200 OK
{
    "message": "Logout successful"
}
```

#### Campaign Service

**List All Campaigns** (Public)
```
GET /api/campaigns?page=1&per_page=10&category=Pendidikan

Response: 200 OK
{
    "message": "Campaigns retrieved",
    "data": {
        "campaigns": [
            {
                "id": 1,
                "title": "Renovasi Sekolah Pelosok",
                "description": "...",
                "goal_amount": 100000000,
                "current_amount": 65000000,
                "progress_percentage": 65,
                "status": "Aktif",
                "deadline": "2026-12-31",
                "user": {...}
            }
        ],
        "pagination": {
            "total": 45,
            "per_page": 10,
            "current_page": 1,
            "last_page": 5
        }
    }
}
```

**Get Campaign Details** (Public)
```
GET /api/campaigns/{id}

Response: 200 OK
{
    "message": "Campaign details retrieved",
    "data": {
        "campaign": {
            "id": 1,
            "title": "Renovasi Sekolah Pelosok",
            "description": "...",
            "goal_amount": 100000000,
            "current_amount": 65000000,
            "progress_percentage": 65,
            "donor_count": 245,
            "status": "Aktif",
            "deadline": "2026-12-31",
            "user": {...},
            "recent_donations": [...],
            "disbursements": [...]
        }
    }
}
```

**Search Campaigns** (Public)
```
GET /api/campaigns/search?q=pendidikan&category=Pendidikan

Response: 200 OK
{
    "message": "Search results",
    "data": {
        "campaigns": [...]
    }
}
```

**Create Campaign** (Protected - Campaigner)
```
POST /api/campaigns
Authorization: Bearer <token>
Content-Type: application/json

{
    "title": "Kampanye Baru",
    "description": "Deskripsi lengkap kampanye",
    "goal_amount": 50000000,
    "category": "Pendidikan",
    "deadline": "2026-12-31"
}

Response: 201 Created
{
    "message": "Campaign created successfully",
    "data": {
        "campaign": {...}
    }
}
```

**Update Campaign** (Protected - Campaign Owner)
```
PUT /api/campaigns/{id}
Authorization: Bearer <token>
Content-Type: application/json

{
    "title": "Kampanye Updated",
    "description": "Updated description",
    "goal_amount": 60000000
}

Response: 200 OK
{
    "message": "Campaign updated successfully",
    "data": {
        "campaign": {...}
    }
}
```

**Delete Campaign** (Protected - Campaign Owner)
```
DELETE /api/campaigns/{id}
Authorization: Bearer <token>

Response: 200 OK
{
    "message": "Campaign deleted successfully"
}
```

#### Donation Service

**Create Donation** (Protected - Donator)
```
POST /api/campaigns/{id}/donations
Authorization: Bearer <token>
Content-Type: application/json

{
    "amount": 500000,
    "payment_method": "bank_transfer",
    "is_anonymous": false
}

Response: 201 Created
{
    "message": "Donation created successfully",
    "data": {
        "donation": {
            "id": 123,
            "campaign_id": 1,
            "amount": 500000,
            "payment_method": "bank_transfer",
            "status": "Pending",
            "created_at": "2026-05-19T10:30:00Z"
        }
    }
}
```

**Get Donation History** (Protected)
```
GET /api/donations/my-donations?page=1&per_page=20
Authorization: Bearer <token>

Response: 200 OK
{
    "message": "Donation history retrieved",
    "data": {
        "donations": [...]
    }
}
```

#### Ledger Service (Public Transparency API)

**Get Campaign Ledger** (Public)
```
GET /api/campaigns/{id}/ledger

Response: 200 OK
{
    "message": "Campaign ledger retrieved",
    "data": {
        "campaign_id": 1,
        "total_collected": 65000000,
        "total_disbursed": 40000000,
        "balance": 25000000,
        "income_log": [
            {
                "type": "donation",
                "amount": 500000,
                "donor": "Budi Santoso",  // or "Anonim"
                "date": "2026-05-19",
                "payment_method": "bank_transfer"
            }
        ],
        "disbursement_log": [
            {
                "type": "disbursement",
                "amount": 15000000,
                "description": "Pembelian semen dan pasir",
                "date": "2026-05-10",
                "receipt_url": "...",
                "verified": true
            }
        ]
    }
}
```

**Get Disbursements** (Public)
```
GET /api/campaigns/{id}/disbursements

Response: 200 OK
{
    "message": "Disbursements retrieved",
    "data": {
        "disbursements": [...]
    }
}
```

---

## 🚀 Installation & Setup

### Prerequisites
- **PHP** 8.2 or higher
- **MySQL** 8.0 or higher
- **Node.js** 18+ (for frontend build tools)
- **Composer** (PHP package manager)
- **Git**

### Step 1: Clone Repository
```bash
git clone https://github.com/4K-AN/CharityHub.git
cd CharityHub
```

### Step 2: Install PHP Dependencies
```bash
composer install
```

### Step 3: Install Node Dependencies
```bash
npm install
```

### Step 4: Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### Step 5: Configure Database
Edit `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=charityhub
DB_USERNAME=root
DB_PASSWORD=your_password
```

Create database:
```bash
mysql -u root -p
CREATE DATABASE charityhub;
EXIT;
```

### Step 6: Run Migrations
```bash
php artisan migrate
```

### Step 7: Seed Database (Optional)
```bash
php artisan db:seed
```

### Step 8: Generate JWT Secret
```bash
php artisan jwt:secret
```

### Step 9: Build Frontend Assets
```bash
npm run build
```

Or for development with hot reload:
```bash
npm run dev
```

### Step 10: Start Development Server
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

---

## ⚙️ Configuration

### Environment Variables (.env)
```env
# Application
APP_NAME=CharityHub
APP_ENV=local
APP_KEY=base64:your_generated_key
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=charityhub
DB_USERNAME=root
DB_PASSWORD=

# JWT
JWT_SECRET=your_generated_jwt_secret
JWT_ALGORITHM=HS256
JWT_EXPIRES_IN=24

# Mail (Optional)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=465
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS=noreply@charityhub.com

# Queue (Optional)
QUEUE_CONNECTION=database
```

### JWT Configuration (config/jwt.php)
```php
return [
    'secret' => env('JWT_SECRET'),
    'algorithm' => env('JWT_ALGORITHM', 'HS256'),
    'expires_in' => env('JWT_EXPIRES_IN', 24),
    'refresh_ttl' => 20160, // 14 days
];
```

### Database Configuration (config/database.php)
```php
'mysql' => [
    'driver' => 'mysql',
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', 3306),
    'database' => env('DB_DATABASE', 'charityhub'),
    'username' => env('DB_USERNAME', 'root'),
    'password' => env('DB_PASSWORD', ''),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
],
```

---

## 🎨 Frontend Pages

### 1. **Landing Page** (`landing.blade.php`)
- Hero section with call-to-action
- Feature highlights
- Campaign carousel
- Testimonials section
- Statistics preview
- Footer with links

**Key Elements:**
- Dynamic campaign grid with search/filter
- Smooth scroll sections
- Mobile-responsive design
- Trust badges and security indicators

### 2. **Campaign Detail** (`campaign-detail.blade.php`)
- Campaign header with image
- Campaign description
- Progress bar with metrics
- Transparency ledger section
- Donation tracking
- Donate button

**Sections:**
- Campaign information
- Real-time fund tracking
- Public transaction log
- Donor testimonials
- Related campaigns

### 3. **Checkout** (`checkout.blade.php`)
- Multi-step donation form
- Amount selection (preset + custom)
- Payment method selection
- Donor information form
- Order summary sidebar
- Trust indicators

**Features:**
- Real-time calculation
- Multiple payment options
- Anonymous donation toggle
- Email receipt generation

### 4. **User Profile** (`profile.blade.php`)
- User information display
- Donation history
- Impact metrics
- Donation statistics
- Settings panel
- Security settings

**Sections:**
- Profile header with avatar
- Donation history table
- Impact dashboard
- Preferences and notifications
- Security settings

### 5. **Admin Dashboard** (`cms/dashboard.blade.php`)
- Campaign overview
- Statistics cards
- Campaign management table
- Donation metrics
- System health

**Charts & Data:**
- Total campaigns
- Total funds collected
- Total funds disbursed
- Recent donors
- Campaign status breakdown

### 6. **Create Campaign** (`cms/create-campaign.blade.php`)
- Campaign form with validation
- File upload for images
- Rich text editor for description
- Category selection
- Deadline picker

### 7. **Authentication Pages**
- Login page with split-screen design
- Register page with role selection
- Password recovery (future)

### 8. **Contact Page** (`contact.blade.php`)
- Contact form
- Support information
- FAQ section
- Social media links

---

## 📖 Usage Guide

### For Donors (Users)
1. **Create Account**
   - Visit landing page → Click "Daftar"
   - Fill in email, password, name
   - Choose "Donator" role

2. **Browse Campaigns**
   - Visit landing page
   - Use search or filter by category
   - Click campaign to see details

3. **Make Donation**
   - Click "Donasi Sekarang"
   - Select amount or enter custom
   - Choose payment method
   - Enter donor info (optional: stay anonymous)
   - Confirm and complete payment

4. **Track Donation**
   - Login to profile
   - View donation history
   - See impact metrics
   - Download tax receipt

### For Campaigners
1. **Register as Campaigner**
   - Create account with "Campaigner" role
   - Verify email

2. **Create Campaign**
   - Login → CMS Dashboard
   - Click "Buat Kampanye Baru"
   - Fill campaign details:
     - Title, description
     - Goal amount, deadline
     - Upload cover image
     - Select category
   - Submit for approval

3. **Monitor Campaign**
   - View real-time donations
   - Track progress toward goal
   - See public ledger

4. **Disburse Funds**
   - Go to campaign ledger
   - Create disbursement entry
   - Upload receipt/proof
   - Update transaction log

5. **View Analytics**
   - Dashboard shows:
     - Total donated
     - Donor count
     - Trending campaigns
     - Engagement metrics

### For Admins
1. **Access Admin Panel**
   - Login with admin account
   - Navigate to admin dashboard

2. **Campaign Management**
   - Review and approve campaigns
   - Monitor fund flow
   - Flag suspicious activities

3. **User Management**
   - View all users
   - Manage roles and permissions
   - Handle disputes

4. **System Monitoring**
   - Check API performance
   - Monitor database
   - Review logs

---

## 🔐 Authentication & Security

### JWT Authentication Flow
```
1. User Login
   └─→ POST /api/login
   └─→ Validate credentials
   └─→ Generate JWT token
   └─→ Return token to client

2. Subsequent Requests
   └─→ Client sends: Authorization: Bearer <token>
   └─→ Server validates token signature
   └─→ Extract user info from token
   └─→ Process request

3. Token Expiration
   └─→ Default: 24 hours
   └─→ After expiry: User must re-login
   └─→ Optional: Implement refresh tokens
```

### Security Best Practices
- ✅ **Password Hashing**: bcrypt with salt
- ✅ **HTTPS/SSL**: Encrypt data in transit
- ✅ **CORS**: Configure allowed origins
- ✅ **Rate Limiting**: Prevent brute force attacks
- ✅ **SQL Injection Prevention**: Eloquent ORM with parameterized queries
- ✅ **CSRF Protection**: Token-based CSRF middleware
- ✅ **Authorization Checks**: Role-based access control
- ✅ **Secure Headers**: CSP, X-Frame-Options, etc.
- ✅ **Input Validation**: Server-side validation on all inputs
- ✅ **Audit Logging**: Log all sensitive actions

### Middleware Stack
```
1. CORS Middleware
   └─→ Validate origin
   └─→ Set allowed headers

2. JWT Auth Middleware
   └─→ Check Authorization header
   └─→ Validate token signature
   └─→ Extract user from token

3. Role Check Middleware
   └─→ Verify user role
   └─→ Allow/deny access

4. Validation Middleware
   └─→ Validate request data
   └─→ Return validation errors
```

### Protected Routes Example
```php
// Only authenticated users
Route::middleware('jwt.auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Only campaigners
Route::middleware(['jwt.auth', 'role:Campaigner'])->group(function () {
    Route::post('/campaigns', [CampaignController::class, 'store']);
});

// Only admins
Route::middleware(['jwt.auth', 'role:Admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'users']);
});
```

---

## 🌍 Deployment

### Deployment Checklist
- [ ] Production database configured
- [ ] Environment variables set
- [ ] JWT secret generated
- [ ] SSL certificate installed
- [ ] CORS origins configured
- [ ] Email service configured
- [ ] Payment gateway integrated
- [ ] Backups scheduled
- [ ] Monitoring enabled
- [ ] CI/CD pipeline setup

### Deployment Steps

#### Option 1: Traditional Hosting (Shared/VPS)
```bash
# 1. SSH into server
ssh user@your-domain.com

# 2. Clone repository
git clone https://github.com/4K-AN/CharityHub.git
cd CharityHub

# 3. Install dependencies
composer install --optimize-autoloader --no-dev
npm install --production
npm run build

# 4. Setup environment
cp .env.example .env
php artisan key:generate
php artisan jwt:secret

# 5. Configure database
# Edit .env with production database credentials

# 6. Run migrations
php artisan migrate --force

# 7. Set permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data .

# 8. Configure web server (Nginx/Apache)
# Point DocumentRoot to public/ directory

# 9. Setup SSL with Let's Encrypt
certbot certonly --webroot -w /var/www/charityhub/public -d charityhub.com
```

#### Option 2: Laravel Forge (Recommended)
1. Create server on Laravel Forge
2. Connect GitHub repository
3. Configure environment variables
4. Enable auto-deploy on git push
5. Configure SSL certificate (automatic with Let's Encrypt)

#### Option 3: Docker (Microservices)
```dockerfile
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git curl libpq-dev mysql-client

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Copy application
COPY . /var/www/html
WORKDIR /var/www/html

# Install composer dependencies
RUN composer install --no-interaction --no-dev

# Build frontend
RUN npm install && npm run build

# Expose port
EXPOSE 9000

CMD ["php-fpm"]
```

### Production Configuration
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://charityhub.com

DB_CONNECTION=mysql
DB_HOST=prod-db-host
DB_DATABASE=charityhub_prod
DB_USERNAME=secure_user
DB_PASSWORD=secure_password

QUEUE_CONNECTION=redis
CACHE_DRIVER=redis

JWT_EXPIRES_IN=24
```

---

## 🐛 Troubleshooting

### Common Issues & Solutions

#### 1. **"Class 'AuthController' not found"**
```bash
# Solution: Regenerate autoloader
composer dump-autoload
```

#### 2. **"SQLSTATE[HY000]: General error: 1030"**
```bash
# Solution: Check database connection
# In .env, verify DB credentials
# Ensure MySQL server is running
mysql -u root -p
SELECT 1;
```

#### 3. **"Unauthorized" on API requests**
```bash
# Solution: Check JWT token
# 1. Verify token in Authorization header
# 2. Check token expiration (24 hours)
# 3. Re-login to get new token
```

#### 4. **CORS Error: "Access-Control-Allow-Origin"**
```bash
# Solution: Update CORS configuration
# config/cors.php
'allowed_origins' => ['http://localhost:3000', 'https://charityhub.com'],
```

#### 5. **"Migrations not running"**
```bash
# Solution: Check migrations directory
# Run migrations manually
php artisan migrate --path=database/migrations

# Or refresh all
php artisan migrate:refresh
```

#### 6. **"npm ERR! code ERESOLVE"**
```bash
# Solution: Use legacy peer deps
npm install --legacy-peer-deps
npm run build
```

#### 7. **Frontend styles not loading**
```bash
# Solution: Rebuild frontend assets
npm run build  # for production
npm run dev    # for development with hot reload
```

#### 8. **"The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths"**
```bash
# Solution: Generate new app key
php artisan key:generate
```

---

## 🗓️ Roadmap

### Phase 1: MVP (Current - May 2026) ✅
- [x] User authentication & registration
- [x] Campaign CRUD
- [x] Donation system
- [x] Public ledger/transparency
- [x] Modern UI/UX
- [x] Mobile-responsive design
- [x] Admin dashboard

### Phase 2: Payment Integration (June 2026)
- [ ] Stripe integration
- [ ] Midtrans integration
- [ ] GCash integration
- [ ] Payment webhook handling
- [ ] Automated receipts

### Phase 3: Mobile App (July-August 2026)
- [ ] React Native or Flutter app
- [ ] Push notifications
- [ ] Offline donation storage
- [ ] QR code scanning
- [ ] Biometric authentication

### Phase 4: Advanced Features (September 2026)
- [ ] AI-based campaign recommendations
- [ ] Campaign analytics dashboard
- [ ] Automated donor communication
- [ ] Gamification (badges, leaderboards)
- [ ] Social sharing features

### Phase 5: Blockchain & Scalability (Q4 2026+)
- [ ] Blockchain transparency logging
- [ ] Microservices full migration
- [ ] Kubernetes deployment
- [ ] Real-time WebSocket updates
- [ ] Machine learning for fraud detection

---

## 🤝 Contributing

We welcome contributions! Please follow these steps:

### 1. Fork Repository
```bash
# Visit https://github.com/4K-AN/CharityHub
# Click "Fork" button
```

### 2. Create Feature Branch
```bash
git checkout -b feature/your-feature-name
```

### 3. Make Changes
```bash
# Make your changes following code style
# Commit with clear messages
git commit -m "Add: feature description"
```

### 4. Push to Fork
```bash
git push origin feature/your-feature-name
```

### 5. Create Pull Request
- Go to original repository
- Click "New Pull Request"
- Select your branch
- Add description of changes
- Submit PR

### Code Style Guidelines
- **PHP**: PSR-12 standard (use Pint)
  ```bash
  ./vendor/bin/pint
  ```
- **JavaScript**: Prettier
  ```bash
  npx prettier --write .
  ```
- **Blade Templates**: Use 4 spaces indentation
- **Naming**: camelCase for methods, snake_case for variables

### Testing
```bash
# Run tests
php artisan test

# Run specific test
php artisan test tests/Feature/AuthTest.php

# With coverage report
php artisan test --coverage
```

---

## 📄 License

This project is licensed under the MIT License - see [LICENSE](LICENSE) file for details.

### MIT License Summary
- ✅ You can use this software for any purpose
- ✅ You can modify the code
- ✅ You can distribute the software
- ❌ You cannot hold the authors liable
- ❌ Must include license and copyright notice

---

## 👥 Team & Contributors

| Role | Name | Contact |
|------|------|---------|
| **Project Lead** | Your Name | your.email@example.com |
| **Backend Developer** | Your Name | your.email@example.com |
| **Frontend Developer** | Your Name | your.email@example.com |
| **UI/UX Designer** | Your Name | your.email@example.com |

---

## 📞 Support & Contact

- **Email**: support@charityhub.com
- **GitHub Issues**: https://github.com/4K-AN/CharityHub/issues
- **Documentation**: https://docs.charityhub.com
- **FAQ**: [FAQ Page](#faq)

---

## 📚 Additional Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [JWT Authentication](https://jwt.io)
- [REST API Best Practices](https://restfulapi.net)
- [MySQL Documentation](https://dev.mysql.com/doc)

---

**Last Updated**: May 19, 2026  
**Version**: 1.0.0  
**Status**: Production Ready

For the latest updates, visit: https://github.com/4K-AN/CharityHub
