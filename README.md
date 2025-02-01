# rafli_fdtest.git
 
Laravel Project Setup Guide 🚀

Proyek ini menggunakan Laravel Breeze sebagai autentikasi, TailwindCSS dengan Vite untuk styling, PostgreSQL sebagai database, serta mendukung unit testing dan SMTP Gmail untuk email.

🛠️ Setup & Instalasi

1. Clone Repository

git clone https://github.com/username/repository.git
cd repository

2. Install Dependencies

composer install
npm install

3. Konfigurasi .env

Copy file .env.example ke .env dan sesuaikan konfigurasi:

cp .env.example .env

Konfigurasi Database (PostgreSQL)

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password

Konfigurasi SMTP Gmail

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=email@gmail.com
MAIL_PASSWORD=app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=no-reply@example.com
MAIL_FROM_NAME="Your App Name"

📀 Note: Untuk MAIL_PASSWORD, gunakan App Password jika 2FA aktif di Gmail.

4. Generate Key & Migrate Database

php artisan key:generate
php artisan migrate --seed

5. Jalankan Vite & Server Laravel

npm run dev  # Menjalankan Vite (TailwindCSS)
php artisan serve  # Menjalankan Laravel

✅ Menjalankan Unit Test

Pastikan database testing sudah dikonfigurasi dengan benar di .env.testing, lalu jalankan:

php artisan test

📌 Fitur yang Tersedia

✅ Laravel Breeze (Autentikasi & Manajemen User)

🎨 TailwindCSS + Vite (Styling modern & cepat)

🗄️ PostgreSQL (Database)

🛠️ Unit Testing (Menggunakan PHPUnit)

📧 SMTP Gmail (Untuk pengiriman email)

🎯 Tech Stack

Laravel 10

PostgreSQL

TailwindCSS

Vite

PHPUnit
