# OTI - PT. OME TEKNOLOGI INDONESIA

A modern Laravel application for showcasing technology projects and managing company portfolio.

## Features

- Modern, responsive landing page
- Product/Project management system with CRUD operations
- Contact form with database storage and email notifications
- Admin panel using Livewire for dynamic interactions
- Image upload support for project portfolios
- 11 real products from company catalog with images extracted from PDF

## Requirements

- PHP ^8.2
- Composer
- MySQL/PostgreSQL/SQLite
- Node.js & NPM (for asset compilation)

## Installation

1. Clone the repository
```bash
git clone https://github.com/Bucin404/OTI.git
cd OTI
```

2. Install dependencies
```bash
composer install
npm install
```

3. Create environment file
```bash
cp .env.example .env
```

4. Generate application key
```bash
php artisan key:generate
```

5. Configure your database in `.env` file

**For MySQL:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=oti
DB_USERNAME=root
DB_PASSWORD=
```

**For SQLite (Development):**
```env
DB_CONNECTION=sqlite
# Comment out or remove other DB_* variables
```

6. Run migrations and seed sample data
```bash
php artisan migrate:fresh --seed
```

7. Link storage for public access to uploaded images
```bash
php artisan storage:link
```

8. (Optional) Configure mail settings in `.env` for contact form notifications
```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@oticorp.co.id"
MAIL_FROM_NAME="OTI Corp"
```

## Development

Start the development server:
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Product Images

Product images have been extracted from the official Product Catalog SMOOHT.pdf and are stored in `storage/app/public/products/`. The following products are pre-seeded with images:

1. SMOOHT HT Android
2. Mobile Presence (Absensi Mobile) 
3. K3 Monitoring Report
4. Smartpole IKN
5. Monitoring Air Limbah
6. Smart Paging Intercom
7. AI Smoke and Fire Detection
8. AI Wearpack and Helmet Detection
9. Visitor Management System
10. Dashboard Monitoring PLN Indonesia Power
11. CCTV Artificial Intelligence

## Admin Access

Admin panel is available at `/admin/products` (requires authentication)

**Note:** You need to set up Laravel authentication (e.g., Laravel Breeze, Fortify, or Jetstream) to access admin routes. The routes are protected with the `auth` middleware.

To quickly set up authentication:
```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run build
php artisan migrate
```

## API Routes

### Public Routes
- `GET /` - Home page
- `GET /products` - List all products
- `GET /products/{slug}` - View product details
- `GET /about` - About us page
- `GET /contact` - Contact page
- `POST /contact` - Submit contact form

### Admin Routes (requires auth)
- `GET /admin/products` - Product management index
- `GET /admin/products/create` - Create new product
- `GET /admin/products/{id}/edit` - Edit product

## Technologies Used

- **Backend:** Laravel 11, Livewire 3
- **Database:** MySQL/SQLite
- **Frontend:** Blade Templates, existing CSS framework
- **Image Processing:** ImageMagick (for PDF extraction)
- **Email:** Laravel Mail with Mailable classes

## Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   ├── ContactController.php
│   │   └── ProductController.php
│   ├── Livewire/Admin/
│   │   ├── ProductIndex.php
│   │   └── ProductForm.php
│   ├── Mail/
│   │   └── ContactReceived.php
│   └── Models/
│       ├── Product.php
│       └── Contact.php
├── database/
│   ├── factories/
│   │   └── ProductFactory.php
│   ├── migrations/
│   │   ├── *_create_products_table.php
│   │   └── *_create_contacts_table.php
│   └── seeders/
│       └── ProductSeeder.php
├── resources/views/
│   ├── products/
│   │   ├── index.blade.php
│   │   └── show.blade.php
│   ├── emails/
│   │   └── contact-received.blade.php
│   └── livewire/admin/
│       ├── product-index.blade.php
│       └── product-form.blade.php
└── storage/app/public/products/
    └── [11 product images extracted from catalog]
```

## Post-Merge Steps

After merging this PR, make sure to run:

```bash
# Run migrations
php artisan migrate

# Create storage symlink (if not exists)
php artisan storage:link

# Clear cache
php artisan config:clear
php artisan view:clear
php artisan cache:clear
```

## License

This project is proprietary software of PT. OME TEKNOLOGI INDONESIA.

## Contact

- **Email:** ometeknologiindonesia@gmail.com
- **Phone:** 082 1234 60 799
- **Address:** Perumahan Kierana Indah Residence 1, Blok I No 10, Kab.Bogor
- **Website:** www.oticorp.co.id
