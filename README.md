<p align="center">
  <h1 align="center">🏭 Website PT Petrokimia Kayaku</h1>
  <p align="center">
    Website Company Profile PT Petrokimia Kayaku — Dibangun dengan Laravel 12
    <br />
    <a href="https://github.com/AryoXGG/petrokimiakayaku.git"><strong>📂 Lihat Repository »</strong></a>
  </p>
</p>

---

## 📋 Daftar Isi

- [Tentang Project](#-tentang-project)
- [Fitur Utama](#-fitur-utama)
- [Arsitektur Database & Konsep Slug](#-arsitektur-database--konsep-slug)
- [System Requirements](#-system-requirements)
- [Instalasi & Setup](#-instalasi--setup)
  - [1. Clone Repository](#1-clone-repository)
  - [2. Install Dependencies](#2-install-dependencies)
  - [3. Konfigurasi Environment](#3-konfigurasi-environment)
  - [4. Generate Application Key](#4-generate-application-key)
  - [5. Setup Database](#5-setup-database)
  - [6. Jalankan Migrasi](#6-jalankan-migrasi)
  - [7. Storage Link](#7-storage-link)
  - [8. Build Assets (Vite)](#8-build-assets-vite)
  - [9. Jalankan Server](#9-jalankan-server)
- [Manajemen Gambar & Aset](#-manajemen-gambar--aset)
  - [Lokasi Penyimpanan Gambar](#lokasi-penyimpanan-gambar)
  - [Memasukkan Gambar ke Database](#memasukkan-gambar-ke-database)
- [Panduan Input Data via phpMyAdmin](#-panduan-input-data-via-phpmyadmin)
  - [Tabel articles (dengan Slug)](#1-tabel-articles-dengan-slug)
  - [Tabel videos (dengan Slug)](#2-tabel-videos-dengan-slug)
  - [Tabel management_members (tanpa Slug)](#3-tabel-management_members-tanpa-slug)
  - [Tabel products](#4-tabel-products)
  - [Tabel hero_slides](#5-tabel-hero_slides)
  - [Tabel company_menus](#6-tabel-company_menus)
  - [Tabel product_categories](#7-tabel-product_categories)
- [Verifikasi & Pengecekan](#-verifikasi--pengecekan)
- [Struktur Project](#-struktur-project)
- [Tech Stack](#-tech-stack)
- [Troubleshooting](#-troubleshooting)
- [Kontributor](#-kontributor)

---

## 📖 Tentang Project

Project ini merupakan pembaruan website **Company Profile PT Petrokimia Kayaku** yang dibuat selama program magang. Website ini menampilkan profil perusahaan, produk, berita/kegiatan, video, dan informasi manajemen perusahaan.

Karena belum tersedia **API** dan **CMS (Content Management System)**, konten gambar dan data lainnya di-*manage* langsung melalui **database (phpMyAdmin)** secara manual. Sistem menggunakan **slug** sebagai **tag identifier** untuk menentukan konten mana yang ditampilkan di halaman beranda dan detail.

### Konsep Slug pada Project Ini

| Kondisi | Penjelasan |
|---------|-----------|
| **Ada Slug** | Gambar/konten **tampil di beranda** dan dapat diakses melalui URL detail (contoh: `/kegiatan/petrokimia-kayaku-membangun-kantor-baru`) |
| **Tidak Ada Slug** | Gambar/konten **hanya bisa diakses** melalui menu tertentu saja, **tidak muncul di beranda** |

---

## ✨ Fitur Utama

- 🏠 **Beranda** — Hero slider dinamis, produk terbaru, berita, dan video
- 🏢 **Profil Perusahaan** — Tentang, fasilitas, pemasaran, riset
- 👥 **Manajemen** — Dewan komisaris & direksi (dari database)
- 📰 **Berita / Kegiatan** — Artikel dinamis dengan detail & view counter
- 🎬 **Video** — Integrasi YouTube dengan slug & view counter
- 🛒 **Produk** — Katalog produk per kategori (Insektisida, Herbisida, dll.)
- 🔍 **Pencarian** — Fitur search produk
- 📱 **Responsive** — Tampilan optimal di desktop & mobile

---

## 🗄️ Arsitektur Database & Konsep Slug

Berikut adalah tabel-tabel utama di database beserta fungsinya:

| No | Tabel | Fungsi | Slug |
|----|-------|--------|------|
| 1 | `articles` | Berita / Kegiatan perusahaan | ✅ Ya |
| 2 | `videos` | Video YouTube perusahaan | ✅ Ya |
| 3 | `products` | Katalog produk | ❌ Tidak |
| 4 | `hero_slides` | Gambar slider beranda & about | ❌ Tidak |
| 5 | `company_menus` | Menu profil perusahaan | ❌ Tidak |
| 6 | `product_categories` | Kategori produk | ✅ Ya |
| 7 | `management_members` | Data komisaris & direksi | ❌ Tidak |

> **Catatan:** Tabel dengan slug menggunakan slug sebagai identifier URL untuk mengakses halaman detail. Kolom `slug` harus **unik** dan menggunakan format **huruf kecil dengan strip** (contoh: `petrokimia-kayaku-membangun-kantor-baru`).

---

## 💻 System Requirements

Pastikan perangkat Anda memiliki software berikut:

| Software | Versi Minimum | Keterangan |
|----------|--------------|------------|
| **PHP** | >= 8.2 | Wajib |
| **Composer** | >= 2.x | PHP dependency manager |
| **Node.js** | >= 18.x | Untuk build Vite assets |
| **NPM** | >= 9.x | Terinstal bersama Node.js |
| **MySQL** | >= 5.7 / MariaDB >= 10.3 | Database server |
| **XAMPP / Laragon** | Versi terbaru | Menyediakan Apache + MySQL + PHP |
| **Git** | >= 2.x | Version control |
| **Web Browser** | Chrome / Firefox / Edge | Untuk akses website |

### Ekstensi PHP yang Dibutuhkan

Pastikan ekstensi berikut aktif di `php.ini`:

```
extension=pdo_mysql
extension=mbstring
extension=openssl
extension=tokenizer
extension=xml
extension=ctype
extension=json
extension=bcmath
extension=fileinfo
extension=zip
```

> **Tip:** Jika menggunakan XAMPP, mayoritas ekstensi ini sudah aktif secara default. Cek dengan perintah `php -m` di terminal.

---

## 🚀 Instalasi & Setup

### 1. Clone Repository

```bash
git clone https://github.com/AryoXGG/petrokimiakayaku.git
```

Pindahkan atau clone langsung ke direktori web server:

```bash
# Untuk XAMPP
cd C:\xampp\htdocs
git clone https://github.com/AryoXGG/petrokimiakayaku.git

# Untuk Laragon
cd C:\laragon\www
git clone https://github.com/AryoXGG/petrokimiakayaku.git
```

### 2. Install Dependencies

Buka terminal di folder project, lalu jalankan:

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

> Jika `composer install` gagal, coba jalankan `composer update` terlebih dahulu.

### 3. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`:

```bash
copy .env.example .env
```

Lalu edit file `.env` dan sesuaikan konfigurasi database:

```env
APP_NAME="Petrokimia Kayaku"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=agriculture
DB_USERNAME=root
DB_PASSWORD=
```

> **Penting:** Nama database default adalah `agriculture`. Anda bisa menggantinya sesuai keinginan, pastikan database sudah dibuat di phpMyAdmin.

### 4. Generate Application Key

```bash
php artisan key:generate
```

Perintah ini akan menghasilkan `APP_KEY` di file `.env` secara otomatis.

### 5. Setup Database

1. **Buka phpMyAdmin** → `http://localhost/phpmyadmin`
2. **Buat database baru** dengan nama `agriculture` (atau sesuai `DB_DATABASE` di `.env`)
3. **Collation:** Pilih `utf8mb4_unicode_ci`

Atau via terminal MySQL:

```sql
CREATE DATABASE agriculture CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 6. Jalankan Migrasi

```bash
php artisan migrate
```

Perintah ini akan membuat semua tabel yang dibutuhkan:
- `users`
- `hero_slides`
- `company_menus`
- `products`
- `articles`
- `videos`
- `product_categories`
- `management_members`
- `cache`, `jobs`, `sessions` (tabel sistem Laravel)

> Jika muncul error **"table already exists"**, jalankan `php artisan migrate:fresh` (**PERINGATAN:** ini akan menghapus semua data di database).

### 7. Storage Link

Buat symbolic link dari `storage/app/public` ke `public/storage`:

```bash
php artisan storage:link
```

> Ini diperlukan agar file gambar yang disimpan di `storage/app/public` dapat diakses melalui browser via URL `/storage/...`.

### 8. Build Assets (Vite)

```bash
# Untuk development (auto-refresh)
npm run dev

# Untuk production (build final)
npm run build
```

> **Catatan:** Saat development, `npm run dev` harus tetap berjalan di terminal terpisah bersamaan dengan `php artisan serve`.

### 9. Jalankan Server

```bash
php artisan serve
```

Website akan berjalan di: **http://localhost:8000**

> **Alternatif:** Jalankan semua sekaligus dengan `composer dev` yang akan menjalankan server, queue, dan Vite secara bersamaan.

---

## 🖼️ Manajemen Gambar & Aset

### Lokasi Penyimpanan Gambar

Gambar pada project ini disimpan di **dua lokasi utama**:

```
petrokimiakayaku/
├── public/
│   └── assets/
│       └── img/              ← 📁 LOKASI UTAMA gambar statis
│           ├── img_sq_3.jpg
│           ├── img_sq_8.jpg
│           └── ...
│
└── storage/
    └── app/
        └── public/           ← 📁 LOKASI ALTERNATIF (via storage:link)
            └── images/
                └── ...
```

| Lokasi | Path di Database | URL di Browser |
|--------|-----------------|----------------|
| `public/assets/img/` | `assets/img/nama_file.jpg` | `http://localhost:8000/assets/img/nama_file.jpg` |
| `storage/app/public/` | `storage/nama_file.jpg` | `http://localhost:8000/storage/nama_file.jpg` |

### Memasukkan Gambar ke Database

**Langkah-langkah:**

1. **Siapkan file gambar** (format: `.jpg`, `.jpeg`, `.png`, `.webp`)
2. **Copy gambar** ke folder `public/assets/img/` atau `storage/app/public/`
3. **Catat nama file** beserta path-nya
4. **Insert data** melalui phpMyAdmin (lihat panduan di bawah)
5. **Pastikan** path di database sesuai dengan lokasi fisik file gambar

> ⚠️ **PENTING:** Jika path di database tidak sesuai dengan lokasi file gambar, gambar **tidak akan tampil** di website!

---

## 📝 Panduan Input Data via phpMyAdmin

Buka **phpMyAdmin** → `http://localhost/phpmyadmin` → Pilih database `agriculture`

### 1. Tabel `articles` (dengan Slug)

Tabel ini menyimpan berita/kegiatan yang **ditampilkan di Beranda** dan halaman Kegiatan.

**Struktur kolom:**

| Kolom | Tipe | Contoh Isi | Keterangan |
|-------|------|-----------|------------|
| `id` | INT (auto) | 1 | Auto increment |
| `title` | VARCHAR | Petrokimia Kayaku Sedang membangun Kantor Baru | Judul berita |
| `slug` | VARCHAR (unique) | `petrokimia-kayaku-membangun-kantor-baru` | **Tag URL** — wajib diisi agar tampil di beranda |
| `image_path` | VARCHAR | `assets/img/img_sq_8.jpg` | Path gambar relatif |
| `link` | VARCHAR | `/detail-kegiatan` | Link tujuan |
| `description` | LONGTEXT | `<div class="content-body"><p>Isi berita...</p></div>` | Isi berita (mendukung HTML) |
| `is_active` | BOOLEAN | 1 | 1 = aktif, 0 = nonaktif |
| `views` | INT | 0 | Jumlah view (otomatis) |
| `created_at` | TIMESTAMP | 2026-02-17 13:25:07 | Tanggal dibuat |
| `updated_at` | TIMESTAMP | NULL | Tanggal diupdate |

**Contoh SQL Insert:**

```sql
INSERT INTO articles (title, slug, image_path, link, description, is_active, views, created_at)
VALUES (
  'Petrokimia Kayaku Sedang membangun Kantor Baru',
  'petrokimia-kayaku-membangun-kantor-baru',
  'assets/img/img_sq_8.jpg',
  '/detail-kegiatan',
  '<div class="content-body"><p>Gresik — PT Petrokimia Kayaku sedang membangun kantor baru...</p></div>',
  1,
  0,
  NOW()
);
```

> **📌 Catatan Slug:** Format slug harus **huruf kecil**, **tanpa spasi** (gunakan strip `-`), dan **unik**. Slug inilah yang menjadi URL halaman detail, contoh: `http://localhost:8000/kegiatan/petrokimia-kayaku-membangun-kantor-baru`

---

### 2. Tabel `videos` (dengan Slug)

Tabel ini menyimpan video YouTube yang **ditampilkan di Beranda** dan halaman Video.

**Struktur kolom:**

| Kolom | Tipe | Contoh Isi | Keterangan |
|-------|------|-----------|------------|
| `id` | INT (auto) | 1 | Auto increment |
| `title` | VARCHAR | Petrokimia kayaku | Judul video |
| `slug` | VARCHAR (unique) | `petrokimia-kayaku` | **Tag URL** — wajib diisi agar tampil |
| `youtube_id` | VARCHAR | `0TVbMQDQZMw` | ID video YouTube |
| `description` | LONGTEXT | Video Berkelas | Deskripsi video |
| `upload_date` | DATE | 2019-12-19 | Tanggal upload |
| `duration` | VARCHAR | NULL | Durasi video (opsional) |
| `is_active` | BOOLEAN | 1 | 1 = aktif, 0 = nonaktif |
| `views` | INT | 0 | Jumlah view (otomatis) |

**Contoh SQL Insert:**

```sql
INSERT INTO videos (title, slug, youtube_id, description, upload_date, is_active, views, created_at)
VALUES (
  'Petrokimia Kayaku',
  'petrokimia-kayaku',
  '0TVbMQDQZMw',
  'Video Berkelas',
  '2019-12-19',
  1,
  0,
  NOW()
);
```

> **📌 Cara mendapatkan YouTube ID:** Dari URL `https://www.youtube.com/watch?v=0TVbMQDQZMw`, ID-nya adalah **`0TVbMQDQZMw`** (setelah `v=`).

---

### 3. Tabel `management_members` (tanpa Slug)

Tabel ini menyimpan data anggota manajemen perusahaan. Tabel ini **tidak memiliki slug** — data diakses hanya melalui halaman manajemen, komisaris, atau direksi.

**Struktur kolom:**

| Kolom | Tipe | Contoh Isi | Keterangan |
|-------|------|-----------|------------|
| `id` | INT (auto) | 1 | Auto increment |
| `name` | VARCHAR | Muammar Ma'arif | Nama anggota |
| `position` | VARCHAR | Direktur Komersil | Jabatan |
| `description` | TEXT | Beliau memiliki pengalaman lebih dari 20 tahun... | Deskripsi singkat |
| `image_path` | VARCHAR | `muammar-maarif.jpg` | Nama file gambar |
| `role` | ENUM | `direksi` atau `komisaris` | Peran (menentukan halaman tampil) |
| `is_active` | BOOLEAN | 1 | 1 = aktif |
| `sort_order` | INT | 1 | Urutan tampil |

**Contoh SQL Insert:**

```sql
INSERT INTO management_members (name, position, description, image_path, role, is_active, sort_order, created_at)
VALUES
  ('Muammar Ma''arif', 'Direktur Komersil', 'Beliau memiliki pengalaman lebih dari 20 tahun di ...', 'muammar-maarif.jpg', 'direksi', 1, 1, NOW()),
  ('Shujiro Nishida', 'Komisaris', 'Beliau memiliki pengalaman lebih dari 30 tahun di ...', 'Shujiro.jpg', 'komisaris', 1, 2, NOW()),
  ('Muhammad Faizal Reza', 'Komisaris', 'Pengalaman selama lebih dari 40 tahun di dunia agr...', 'Faizal-Reza.png', 'komisaris', 1, 2, NOW());
```

> **📌 Penting:** Pastikan file gambar (`muammar-maarif.jpg`, `Shujiro.jpg`, dll.) sudah tersedia di folder `public/assets/img/` atau sesuai path yang digunakan di view.

---

### 4. Tabel `products`

| Kolom | Tipe | Contoh Isi | Keterangan |
|-------|------|-----------|------------|
| `id` | INT (auto) | 1 | Auto increment |
| `name` | VARCHAR | Admil 50 EC | Nama produk |
| `category` | VARCHAR | Insecticide | Kategori |
| `image_path` | VARCHAR | `assets/img/produk/admil.jpg` | Path gambar |
| `price` | DECIMAL | 50000.00 | Harga (opsional) |
| `link` | VARCHAR | `#` | Link detail |
| `is_active` | BOOLEAN | 1 | Status aktif |

---

### 5. Tabel `hero_slides`

| Kolom | Tipe | Contoh Isi | Keterangan |
|-------|------|-----------|------------|
| `id` | INT (auto) | 1 | Auto increment |
| `type` | VARCHAR | `home` atau `about` | Halaman tempat slider tampil |
| `title` | VARCHAR | Selamat Datang | Judul slider |
| `description` | TEXT | Deskripsi... | Teks deskripsi |
| `image_path` | VARCHAR | `assets/img/hero-1.jpg` | Path gambar |
| `is_active` | BOOLEAN | 1 | 1 = aktif |

---

### 6. Tabel `company_menus`

| Kolom | Tipe | Contoh Isi | Keterangan |
|-------|------|-----------|------------|
| `id` | INT (auto) | 1 | Auto increment |
| `title` | VARCHAR | Tentang Perusahaan | Judul menu |
| `image_path` | VARCHAR | `assets/img/menu-1.jpg` | Gambar menu |
| `url` | VARCHAR | `/tentang-perusahaan` | Link tujuan |
| `sort_order` | INT | 1 | Urutan tampil |
| `is_active` | BOOLEAN | 1 | Status aktif |

---

### 7. Tabel `product_categories`

| Kolom | Tipe | Contoh Isi | Keterangan |
|-------|------|-----------|------------|
| `id` | INT (auto) | 1 | Auto increment |
| `name` | VARCHAR | Insektisida | Nama kategori |
| `slug` | VARCHAR | `insektisida` | Slug URL |
| `description` | TEXT | Insektisida adalah bahan... | Deskripsi |

---

## ✅ Verifikasi & Pengecekan

Setelah setup selesai dan data sudah dimasukkan, lakukan pengecekan berikut:

### 1. Cek Gambar Fisik

```bash
# Pastikan gambar ada di lokasi yang benar
dir public\assets\img\

# Atau untuk storage
dir storage\app\public\
```

### 2. Cek Data di Database

Buka phpMyAdmin → database `agriculture` → Cek setiap tabel:

```sql
-- Cek data articles
SELECT id, title, slug, image_path FROM articles;

-- Cek data videos
SELECT id, title, slug, youtube_id FROM videos;

-- Cek data management_members
SELECT id, name, role, image_path FROM management_members;

-- Cek data products
SELECT id, name, category, image_path FROM products;

-- Cek data hero_slides
SELECT id, type, title, image_path FROM hero_slides;
```

### 3. Cek Tampilan Website

| URL | Halaman | Yang Harus Dicek |
|-----|---------|-----------------|
| `http://localhost:8000` | Beranda | Hero slider, produk, berita, video tampil |
| `http://localhost:8000/about-us` | About | Slider & menu profil |
| `http://localhost:8000/kegiatan` | Kegiatan | Daftar berita tampil |
| `http://localhost:8000/kegiatan/{slug}` | Detail Kegiatan | Detail berita + gambar |
| `http://localhost:8000/video` | Video | Daftar video |
| `http://localhost:8000/video/{slug}` | Detail Video | Player YouTube |
| `http://localhost:8000/manajemen-perusahaan` | Manajemen | Foto & data komisaris/direksi |
| `http://localhost:8000/kategori/{slug}` | Kategori Produk | Produk per kategori |

### 4. Cek Gambar Tampil

Jika gambar tidak muncul:
1. ✅ Pastikan path di database **sama persis** dengan lokasi file fisik
2. ✅ Pastikan `php artisan storage:link` sudah dijalankan
3. ✅ Periksa nama file (case-sensitive di Linux/Mac)
4. ✅ Buka langsung URL gambar di browser: `http://localhost:8000/assets/img/nama_file.jpg`

---

## 📁 Struktur Project

```
petrokimiakayaku/
├── app/
│   ├── Http/Controllers/
│   │   └── FrontendController.php    ← Controller utama
│   ├── Models/
│   │   ├── Article.php
│   │   ├── Video.php
│   │   ├── Product.php
│   │   ├── ProductCategory.php
│   │   ├── HeroSlide.php
│   │   ├── CompanyMenu.php
│   │   └── ManagementMember.php
│   └── Providers/
├── database/
│   ├── migrations/                    ← File migrasi tabel
│   └── seeders/
├── public/
│   └── assets/
│       ├── img/                       ← Gambar statis
│       ├── css/                       ← CSS
│       ├── js/                        ← JavaScript
│       └── video/                     ← Video lokal
├── resources/views/                   ← Blade templates
├── routes/
│   └── web.php                        ← Definisi route
├── storage/app/public/                ← Gambar via storage
├── .env                               ← Konfigurasi environment
├── composer.json                      ← PHP dependencies
└── package.json                       ← Node.js dependencies
```

---

## 🔧 Tech Stack

| Teknologi | Versi | Fungsi |
|-----------|-------|--------|
| **Laravel** | 12.x | PHP Framework |
| **PHP** | 8.2+ | Backend Language |
| **MySQL** | 5.7+ | Database |
| **Tailwind CSS** | 4.x | Styling |
| **Vite** | 7.x | Asset Bundler |
| **Blade** | (Laravel) | Template Engine |

---

## 🛠️ Troubleshooting

### Error: "Specified key was too long"
```bash
# Edit file: app/Providers/AppServiceProvider.php
# Tambahkan di method boot():
Schema::defaultStringLength(191);
```

### Error: "SQLSTATE[HY000] [1049] Unknown database"
```
Pastikan database 'agriculture' sudah dibuat di phpMyAdmin.
```

### Error: "Vite manifest not found"
```bash
# Jalankan build Vite terlebih dahulu:
npm run build

# Atau jalankan dev server:
npm run dev
```

### Error: "The stream or file ... could not be opened"
```bash
# Berikan permission pada folder storage & cache (Linux/Mac):
chmod -R 775 storage bootstrap/cache

# Untuk Windows, pastikan folder tidak read-only
```

### Gambar Tidak Muncul
```
1. Periksa path di database vs lokasi file fisik
2. Jalankan: php artisan storage:link
3. Periksa format nama file (case-sensitive)
4. Clear cache: php artisan cache:clear
```

### Error: "Class not found"
```bash
composer dump-autoload
php artisan config:clear
php artisan cache:clear
```

---

## 🧹 Perintah Artisan Berguna

```bash
# Menjalankan server
php artisan serve

# Menjalankan migrasi
php artisan migrate

# Reset dan migrasi ulang (HATI-HATI: hapus semua data)
php artisan migrate:fresh

# Clear semua cache
php artisan optimize:clear

# Membuat storage link
php artisan storage:link

# Cek route yang terdaftar
php artisan route:list

# Menjalankan server + queue + vite sekaligus
composer dev
```

---

## 👨‍💻 Kontributor

| Nama | Role |
|------|------|
| **Aryo** | Developer (Intern) |

---

## 📄 Lisensi

Project ini digunakan untuk keperluan internal **PT Petrokimia Kayaku**.

---

<p align="center">
  <strong>🏭 PT Petrokimia Kayaku — 2026</strong><br>
  <a href="https://github.com/AryoXGG/petrokimiakayaku.git">GitHub Repository</a>
</p>
