# Laravel Project Setup

Welcome to our Laravel project repository. This README outlines the steps required to set up the project locally and get started with development.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP version >= 7.4 (8.0 recommended)
- Composer
- Node.js and npm

## Database setup

You will require to have the database setup in order to run the project. 
You can find the database file shared here https://drive.google.com/file/d/13xx4VNioN381e9rP84JABC_xJXDs8S2V/view

Download it and import it to your local database manager ensure your local env looks something like this

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kaddah
DB_USERNAME=root
DB_PASSWORD=
```

## Initial Setup

1. Clone the repository to your local machine:

```bash
git clone https://github.com/Tamer7/kaddah.git](https://github.com/Tamer7/kaddah.git
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
