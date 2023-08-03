# Laravel Query Logger Middleware

The Laravel Query Logger Middleware is a package that provides a middleware for logging database queries with duplicate prevention in Laravel applications.

## Installation

You can install this package via Composer:

```bash
composer require zxygel0913/query-logger-middleware
```

# Usage
To use the Query Logger Middleware, you can add it to your routes or controllers:

```bash
use Zxygel0913\QueryLoggerMiddleware\LogQueries;

// ...

public function __construct()
{
    $this->middleware(LogQueries::class);
}
```
The middleware will automatically log executed database queries along with additional context such as URL origin and IP address.

# Configuration
The package provides the flexibility to customize the middleware behavior by publishing its configuration file. To publish the configuration file, run the following command:

```bash
php artisan vendor:publish --tag=query-logger-config
```
This will create a query-logger.php configuration file in your application's config directory. You can modify this file to adjust the middleware's settings.

# Contributing
Contributions are welcome! If you encounter any issues or have suggestions for improvements, please open an issue on GitHub.

# License
This package is open-source software licensed under the MIT license.
