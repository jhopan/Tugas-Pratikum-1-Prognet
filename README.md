# Laravel CRUD Application with Authentication

Aplikasi Laravel lengkap dengan sistem autentikasi dan 3 modul CRUD (Posts, Artikels, Produks).

## 🚀 Fitur Aplikasi

- **Sistem Autentikasi**: Register, Login, Logout menggunakan Laravel Breeze
- **CRUD Posts**: Manajemen artikel/postingan dengan judul dan konten
- **CRUD Artikels**: Manajemen artikel dengan penulis dan tanggal terbit
- **CRUD Produks**: Manajemen produk dengan harga dan stok
- **Dashboard**: Halaman dashboard dengan navigasi ke semua modul
- **Responsive Design**: Menggunakan Tailwind CSS

## 📋 Persyaratan Sistem

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL/MariaDB
- Laravel 12.x

## ⚙️ Konfigurasi Database

### Informasi Database

| Parameter | Value |
|-----------|-------|
| DB_CONNECTION | mysql |
| DB_HOST | 127.0.0.1 |
| DB_PORT | 3306 |
| DB_DATABASE | **praktikum_laravel** |
| DB_USERNAME | **root** |
| DB_PASSWORD | *(kosongkan)* |

> **Catatan**: Untuk Laragon/XAMPP, username default adalah `root` dengan password kosong.

## 🔧 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/jhopan/Tugas-Pratikum-1-Prognet.git
cd Tugas-Pratikum-1-Prognet
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Setup Database

Buka file `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=praktikum_laravel
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Buat Database

Buat database baru dengan nama `praktikum_laravel`:

```sql
CREATE DATABASE praktikum_laravel;
```

Atau melalui command line:
```bash
mysql -u root -e "CREATE DATABASE praktikum_laravel;"
```

### 6. Jalankan Migrasi
```bash
php artisan migrate
```

### 7. Seed Database (Opsional)

Untuk mengisi database dengan data dummy:
```bash
php artisan db:seed
```

Data dummy yang akan diisi:
- 5 Posts
- 6 Artikels
- 8 Produks

### 8. Build Assets
```bash
npm run dev
```

Atau untuk production:
```bash
npm run build
```

### 9. Jalankan Aplikasi
```bash
php artisan serve
```

Aplikasi akan berjalan di: `http://127.0.0.1:8000`

## 📊 Struktur Database

### Tabel: posts
| Column | Type | Description |
|--------|------|-------------|
| id | bigint(20) | Primary key (Auto Increment) |
| title | varchar(255) | Judul post |
| content | text | Isi konten post |
| created_at | timestamp | Waktu dibuat |
| updated_at | timestamp | Waktu diupdate |

### Tabel: artikels
| Column | Type | Description |
|--------|------|-------------|
| id | bigint(20) | Primary key (Auto Increment) |
| judul | varchar(255) | Judul artikel |
| isi | text | Isi artikel |
| penulis | varchar(255) | Nama penulis |
| tanggal_terbit | date | Tanggal terbit artikel |
| created_at | timestamp | Waktu dibuat |
| updated_at | timestamp | Waktu diupdate |

### Tabel: produks
| Column | Type | Description |
|--------|------|-------------|
| id | bigint(20) | Primary key (Auto Increment) |
| nama_produk | varchar(255) | Nama produk |
| deskripsi | text | Deskripsi produk |
| harga | decimal(10,2) | Harga produk |
| stok | int(11) | Jumlah stok |
| created_at | timestamp | Waktu dibuat |
| updated_at | timestamp | Waktu diupdate |

## 🛣️ Routes

### Authentication Routes
- `GET /register` - Halaman registrasi
- `POST /register` - Proses registrasi
- `GET /login` - Halaman login
- `POST /login` - Proses login
- `POST /logout` - Logout

### Protected Routes (Memerlukan Login)
- `GET /dashboard` - Dashboard utama
- `resource /posts` - CRUD Posts
- `resource /artikels` - CRUD Artikels
- `resource /produks` - CRUD Produks

## 🎨 UI/UX Features

- **Create Button**: Tombol Create dengan background gelap di bagian bawah tabel
- **Submit/Update Button**: Tombol hijau (green-600) dengan padding yang lebih besar
- **Back Button**: Tombol gray untuk kembali
- **Flash Messages**: Notifikasi sukses/error setelah operasi CRUD
- **Responsive Tables**: Tabel responsive untuk semua ukuran layar
- **Form Validation**: Validasi input di semua form

## 🔐 Default User (Setelah Seed)

Aplikasi ini menggunakan Laravel Breeze untuk autentikasi. Silakan register user baru melalui halaman registrasi.

## 📝 Development

### Menambah Module Baru

1. Buat migration:
```bash
php artisan make:migration create_nama_tabel_table
```

2. Buat model:
```bash
php artisan make:model NamaModel
```

3. Buat controller:
```bash
php artisan make:controller NamaController --resource
```

4. Tambahkan route di `routes/web.php`

### Struktur Folder Penting
```
app/
├── Http/Controllers/
│   ├── PostController.php
│   ├── ArtikelController.php
│   └── ProdukController.php
├── Models/
│   ├── Post.php
│   ├── Artikel.php
│   └── Produk.php
database/
├── migrations/
├── seeders/
│   ├── PostSeeder.php
│   ├── ArtikelSeeder.php
│   ├── ProdukSeeder.php
│   └── DatabaseSeeder.php
resources/
└── views/
    ├── posts/
    ├── artikels/
    ├── produks/
    └── dashboard.blade.php
```

## 🐛 Troubleshooting

### Error: "SQLSTATE[HY000] [1049] Unknown database"
Pastikan database `praktikum_laravel` sudah dibuat.

### Error: "Vite manifest not found"
Jalankan `npm run build` atau `npm run dev`

### Error: "Class not found"
Jalankan `composer dump-autoload`

### Port 8000 sudah digunakan
Jalankan di port lain:
```bash
php artisan serve --port=8001
```

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👨‍💻 Author
Jhosua Armando Putra Panjaitan
**Repository**: https://github.com/jhopan/Tugas-Pratikum-1-Prognet.git

---

**Praktikum Laravel - Pemrograman Internet**
