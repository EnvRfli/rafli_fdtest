# Laravel Project Setup

## Prerequisites

Pastikan Anda telah menginstal:
- [PHP](https://www.php.net/) (versi sesuai dengan Laravel)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) & [npm](https://www.npmjs.com/)
- [PostgreSQL](https://www.postgresql.org/)
- [Git](https://git-scm.com/)

## Installation

1. Clone repository ini:
   ```sh
   git clone https://github.com/EnvRfli/rafli_fdtest.git
   cd rafli_fdtest
   ```

2. Install dependency Laravel:
   ```sh
   composer install
   ```

3. Install dependency frontend:
   ```sh
   npm install
   ```

4. Copy file `.env.example` menjadi `.env`:
   ```sh
   cp .env.example .env
   ```

5. Generate application key:
   ```sh
   php artisan key:generate
   ```

## Database Setup

1. Buat database PostgreSQL baru.
2. Edit file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=rafli_fdtest
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```
3. Jalankan migrasi database:
   ```sh
   php artisan migrate
   ```

4. Seed database dengan data awal untuk buku:
   ```sh
   php artisan db:seed --class=BookSeeder
   ```

## Storage Setup

Untuk memastikan file yang diunggah dapat diakses, jalankan perintah berikut:
```sh
php artisan storage:link
```

## SMTP Gmail Setup

Dapatkan terlebih dahulu MAIL_PASSWORD dengan cara : 
1. Buka [Google Account Security](https://myaccount.google.com/security).
2. Aktifkan **2-Step Verification** jika belum diaktifkan.
3. Pergi ke **App Passwords** di bagian **Signing in to Google**.
4. Pilih **Mail** sebagai aplikasi dan **Other (Custom name)** sebagai perangkat.
5. Masukkan nama aplikasi, lalu klik **Generate**.
6. Salin kode yang dihasilkan dan gunakan sebagai `MAIL_PASSWORD` di `.env`.

Edit `.env` dan tambahkan konfigurasi berikut:
```env
MAIL_MAILER=smtp
MAIL_SCHEME=null
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_app_password
MAIL_FROM_ADDRESS="rafliagusta111@gmail.com"
MAIL_FROM_NAME="RAFLI_FDTEST"
```

## Running the Project

1. Jalankan server backend:
   ```sh
   php artisan serve
   ```
2. Jalankan frontend dengan Vite:
   ```sh
   npm run dev
   ```
3. akses Landing Page awal :
    ```sh
    http://127.0.0.1:8000/
    ```

## Running Tests

Jalankan unit test dengan perintah:
```sh
php artisan test
```

## Why Laravel Breeze & TailwindCSS?

- **Laravel Breeze** dipilih karena menyediakan sistem autentikasi yang ringan dan mudah dikonfigurasi, termasuk login, register, reset password, dan fitur lain yang langsung dapat digunakan.
- **TailwindCSS + Vite** digunakan untuk mempercepat pengembangan frontend dengan utility-first CSS framework yang fleksibel dan performa optimal menggunakan Vite.

## Features
- Laravel Breeze (Authentication system)
- TailwindCSS + Vite
- PostgreSQL database
- Unit Testing
- SMTP Gmail configuration
- Storage symlink for file access
- Database seeder for initial book data
