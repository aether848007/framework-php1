# phpFrameworkLando

A simple custom PHP micro-framework built from scratch for educational and development purposes.  
It uses **LAMP stack**, **FastRoute** for routing, **Composer** for dependency management, and follows a basic MVC-like structure.

---

## 🚀 Features

- ⚙️ Lightweight custom framework structure
- 🧭 Routing powered by [FastRoute](https://github.com/nikic/FastRoute)
- ✨ Simple controllers and route handling
- 📦 Composer autoloading and dependency management
- 🌐 Public entry point (`public/index.php`)
- 🐳 Containerized via [Lando](https://docs.lando.dev/) (optional)
- ⚡ Quick local testing with PHP’s built-in server

---

## 📁 Project Structure

phpFrameworkLando/
├── app/
│ └── Controllers/ # Application controllers
│ ├── HomeController.php # Handles "/" route
│ └── PostController.php # Handles "/posts/{id}" route
├── framework/ # Core micro-framework logic
│ ├── Http/
│ │ ├── Kernel.php # Dispatches requests
│ │ ├── Request.php # Parses HTTP requests
│ │ └── Response.php # Sends HTTP responses
│ └── Routing/
│ └── Route.php # Defines route handling
├── public/
│ └── index.php # Application entry point
├── routes/
│ └── web.php # Route definitions
├── vendor/ # Composer dependencies
├── .gitignore # Git ignored files
├── .lando.yml # Lando configuration
├── composer.json # Composer config
├── composer.lock # Locked dependencies


---

## 🛠️ Technologies Used

- 🐘 **PHP 8+** – Core programming language  
- 📦 **Composer** – Dependency and autoloading manager  
- ⚡ **FastRoute** – High-performance routing library  
- 🧠 **PSR-4 Autoloading** – Standard for organizing PHP classes  
- 🛤️ **Custom Micro-framework** – Lightweight HTTP routing and dispatch system  
- 🖥️ **Lando (optional)** – Local development environment using Docker  
- 🌐 **Built-in PHP Server** – Quick local testing (`php -S`)

---

## 📦 Composer Autoloading

Ensure autoload is working with:

```bash
composer dump-autoload

Namespace structure follows PSR-4:

"autoload": {
    "psr-4": {
        "App\\": "app/",
        "Somecode\\Framework\\": "framework/"
    }
}

🧪 How to Run
1. Prerequisites

    Lando (optional)

    Composer

2. Start the app with Lando

lando start
lando composer install

Or run without Lando:

composer install
php -S localhost:8000 -t public

Then open your browser at:
http://localhost:8000
🧬 Routing Example

In routes/web.php:

Route::get('/', [HomeController::class, 'index']);
Route::get('/posts/{id:\d+}', [PostController::class, 'show']);

👨‍💻 Author

Created by aether848007
