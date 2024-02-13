# Laravel Project Setup

Welcome to our Laravel project repository. This README outlines the steps required to set up the project locally and get started with development.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP version >= 7.4 (8.0 recommended)
- Composer
- Node.js and npm

## Initial Setup

1. Clone the repository to your local machine:

```bash
git clone https://github.com/your-username/your-project-name.git](https://github.com/Tamer7/kaddah.git
```

2. Navigate to the project directory:
```bash
cd your-project-name
```

3. Install PHP dependencies using Composer:
```bash
composer install
```

4. Copy the .env.example file to create a .env file and configure your local environment settings:
```bash
cp .env.example .env
```

5. Start the local development server:
```bash
php artisan serve
```

# Compiling Assets

If you make changes to CSS or JavaScript files, you'll need to re-compile the assets. This project uses Laravel Mix for asset compilation.

1. Install JavaScript dependencies using npm:
```bash
npm install laravel-mix@latest --save-dev
```

2. Compile assets for production:
```bash
npm run production
```

Alternatively, if you are developing and want to compile and watch for changes:
```bash
npm run watch
```
