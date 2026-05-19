# Globalizing-UB

Website resmi Globalizing UB — platform informasi internasionalisasi Universitas Brawijaya yang mencakup berita, acara, kemitraan, inovasi, galeri, dan pusat unduhan.

## Tech Stack

- **Backend:** Laravel 12 (PHP 8.2+)
- **Frontend:** Vite + Tailwind CSS + Alpine.js
- **Database:** MySQL
- **Cache / Session:** Redis (via Predis)
- **Editor:** CKEditor 5
- **Roles & Permission:** Laratrust
- **Multilingual:** spatie/laravel-translatable + Google Translate

## Requirements

- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL
- Redis

## Installation

```bash
# 1. Clone repo
git clone <repo-url>
cd global-ub

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Copy environment file
cp .env.example .env

# 5. Generate app key
php artisan key:generate

# 6. Konfigurasi .env
#    Sesuaikan DB_DATABASE, DB_USERNAME, DB_PASSWORD
#    dan pastikan REDIS_HOST sudah benar

# 7. Jalankan migrasi & seeder
php artisan migrate --seed
```

## Running the App

Jalankan ketiga perintah ini secara bersamaan (masing-masing di terminal terpisah):

```bash
# Terminal 1 — Redis server
redis-server

# Terminal 2 — Laravel development server
php artisan serve

# Terminal 3 — Vite asset bundler
npm run dev
```

Akses aplikasi di: `http://localhost:8000`

## Fitur Utama

| Modul | Keterangan |
|---|---|
| Berita (News) | Kelola artikel berita internasionalisasi |
| Acara (Events) | Informasi kegiatan & acara UB |
| Kemitraan (Partnerships) | Data mitra & partner internasional |
| Inovasi (Innovations) | Showcase inovasi dari UB |
| Galeri (Gallery) | Koleksi foto kegiatan |
| Pusat Unduhan (Download Center) | File & dokumen yang dapat diunduh |
| Studi (Studies) | Informasi program studi internasional |
| Testimonial | Testimoni mahasiswa/mitra |
| Merchandise | Produk merchandise UB |
| Manajemen User | Role & permission via Laratrust |

## Struktur Direktori Penting

```
app/
├── Models/          # Eloquent models
├── Http/
│   ├── Controllers/ # Controller aplikasi
│   └── Middleware/
resources/
├── views/
│   ├── admin/       # Panel admin
│   ├── landing/     # Halaman publik
│   └── components/  # Blade components
database/
├── migrations/      # Skema database
└── seeders/         # Data awal (roles, permissions, user)
```

## Database Seeding

```bash
# Seeder utama (roles, permissions, default admin user)
php artisan db:seed

# Atau jalankan seeder spesifik
php artisan db:seed --class=LaratrustSeeder
php artisan db:seed --class=UserSeeder
```

## Build untuk Produksi

```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## License

MIT
