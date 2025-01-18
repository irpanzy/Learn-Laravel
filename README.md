# Learn Laravel

A repository for learning and exploring the Laravel framework. This repository contains various examples, tutorials, and projects that showcase Laravel's capabilities and features.

## Table of Contents

- [About](#about)
- [Getting Started](#getting-started)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## About

This repository is designed for those who want to learn Laravel from scratch or improve their skills by exploring different concepts and implementations in Laravel. It includes beginner to advanced level examples and practical projects.

## Getting Started

To get started with this repository, clone the repository to your local environment and follow the installation instructions below.

## Features

- Step-by-step tutorials for learning Laravel
- Practical projects and examples
- Covers key Laravel topics such as routing, controllers, Eloquent ORM, Blade templates, middleware, and more
- Codebase for experimenting and learning new concepts

## Requirements

- PHP 8.0 or higher
- Composer 2.0 or higher
- MySQL or SQLite database
- Node.js and npm (for front-end assets)
- Laravel 10.x

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/irpanzy/Learn-Laravel.git
   ```

2. Navigate to the project directory:

   ```bash
   cd Learn-Laravel
   ```

3. Install PHP dependencies using Composer:

   ```bash
   composer install
   ```

4. Install front-end dependencies using npm:

   ```bash
   npm install && npm run dev
   ```

5. Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

6. Generate the application key:

   ```bash
   php artisan key:generate
   ```

7. Set up the database:

   - Update your `.env` file with the correct database credentials.
   - Run migrations:

     ```bash
     php artisan migrate
     ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

## Usage

Once the installation is complete, open your browser and visit `http://127.0.0.1:8000` to see the application in action. Explore the repository to understand various Laravel concepts and projects.

## Contributing

Contributions are welcome! If you have ideas, bug fixes, or new features, feel free to submit a pull request or open an issue.

## License

This repository is open-sourced software licensed under the [MIT license](LICENSE).

---

Happy coding and enjoy learning Laravel!
