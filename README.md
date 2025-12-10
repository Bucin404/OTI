# OTI - PT. OME TEKNOLOGI INDONESIA

A modern Laravel application for showcasing technology projects and managing company portfolio.

## Features

- Modern, responsive landing page
- Product/Project management system with CRUD operations
- Contact form with database storage and email notifications
- Admin panel using Livewire for dynamic interactions
- Image upload support for project portfolios

## Requirements

- PHP ^8.2
- Composer
- MySQL/PostgreSQL or any database supported by Laravel
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

6. Run migrations
```bash
php artisan migrate
```

7. Link storage for public access to uploaded images
```bash
php artisan storage:link
```

8. (Optional) Seed sample data
```bash
php artisan db:seed
```

9. Configure mail settings in `.env` for contact form notifications
```
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## Development

Start the development server:
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Admin Access

Admin panel is available at `/admin/products` (requires authentication)

## License

This project is proprietary software of PT. OME TEKNOLOGI INDONESIA.
