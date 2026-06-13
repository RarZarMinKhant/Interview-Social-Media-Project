# Interview Social Media Project

A Laravel-based social media application developed as part of a Junior Laravel Developer Code Test.

## Code Test Document

📄 **Requirements Document**

* [View Code Test PDF](https://github.com/RarZarMinKhant/Interview-Social-Media-Project/blob/main/public/JuniorLaravelCodeTest.pdf)

## Features

* User Authentication
* Create, Edit and Delete Posts
* Like and Unlike Posts
* Comment System
* User Profile Management
* Responsive UI
* Laravel 11 + MySQL
* Vite Frontend Build

## Tech Stack

* Laravel 11
* PHP 8.2+
* MySQL
* Blade
* Bootstrap/Tailwind CSS
* Vite

## Installation

### 1. Clone Repository

```bash
git clone https://github.com/RarZarMinKhant/Interview-Social-Media-Project.git
cd Interview-Social-Media-Project
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

Update your database credentials inside `.env`.

### 4. Run Migration & Seeder

```bash
php artisan migrate:fresh --seed
```

### 5. Start Development Server

Frontend:

```bash
npm run dev
```

Backend:

```bash
php artisan serve
```

## Default Access

Use the seeded users created by the database seeder.

## Screenshots

You can add screenshots here:

```md
![Home Page](screenshots/home.png)
```

## Author

Rar Zar Min Khant

GitHub: https://github.com/RarZarMinKhant
