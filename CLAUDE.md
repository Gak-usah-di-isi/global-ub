# CLAUDE.md — Globalizing-UB

Panduan konteks project untuk Claude Code. Baca ini sebelum mengerjakan apapun di repo ini.

## Tentang Project

**Globalizing-UB** adalah website resmi internasionalisasi Universitas Brawijaya. Berisi fitur berita, acara, kemitraan, inovasi, galeri, program studi, pusat unduhan, merchandise, dan testimonial — dengan panel admin terpisah dari halaman publik (landing).

## Cara Menjalankan (Development)

Jalankan **tiga terminal** secara bersamaan:

```bash
# Terminal 1
redis-server

# Terminal 2
php artisan serve

# Terminal 3
npm run dev
```

URL lokal: `http://localhost:8000`

## Database

- **Engine:** MySQL
- **Nama DB:** `global_ub_db`
- **User:** `root` (tanpa password di lokal)
- Migration: `php artisan migrate --seed`
- Jangan ubah migration yang sudah ada — buat file migration baru

## Struktur Penting

```
app/Http/Controllers/
├── Admin/              # Semua controller panel admin (prefix AdminXxx)
└── *.php               # Controller halaman publik (landing)

resources/views/
├── admin/              # Blade views panel admin, per-modul dalam subfolder
├── landing/            # Blade views halaman publik
├── components/         # Komponen blade yang dipakai bersama
└── layouts/            # Layout utama (admin & landing terpisah)

database/
├── migrations/         # Jangan diedit, tambah migration baru jika perlu
└── seeders/            # LaratrustSeeder (roles/permissions), UserSeeder
```

## Konvensi Coding

- **Role & Permission** — gunakan **Laratrust**, jangan buat sistem custom
- **Multilingual** — field teks konten pakai `spatie/laravel-translatable`, jangan hardcode teks
- **Image handling** — pakai `intervention/image`
- **Cache** — Redis via Predis (`CACHE_DRIVER=redis`)
- **Queue** — database (`QUEUE_CONNECTION=database`)
- Penamaan controller admin: `Admin` + nama modul + `Controller` (contoh: `AdminNewsController`)
- Setiap modul baru butuh: Model, Migration, Controller (admin + publik), Views (admin + landing)

## File Khusus

- **`artisan_run.php`** — script PHP untuk menjalankan artisan command di shared hosting (Plesk) tanpa SSH. Jangan hapus, dipakai saat deploy ke production.

## Deploy ke Production

Di production (Plesk), jalankan cache via browser dengan membuka `artisan_run.php`. Ini menjalankan:
`config:clear` → `cache:clear` → `route:clear` → `view:clear` → `config:cache` → `route:cache` → `view:cache`

Untuk build asset:
```bash
npm run build
```

## Yang Jangan Dilakukan

- Jangan edit migration yang sudah ada
- Jangan hardcode teks konten — pakai translatable atau lang file
- Jangan buat sistem role/permission sendiri, sudah ada Laratrust
- Jangan hapus `artisan_run.php` dari root project
