# Sistem Informasi Klinik

Proyek ini merupakan aplikasi **Sistem Informasi Klinik** berbasis web yang dikembangkan menggunakan **Yii2 Framework**, **Tailwind CSS** untuk tampilan antarmuka dan **PostgreSQL** sebagai sistem manajemen basis data. Aplikasi ini dibuat sebagai bagian dari **Tes Kompetensi posisi Web Programmer di PT. Inova Medika Solusindo** dengan fokus pada penerapan autentikasi berbasis peran (SRBAC), pengelolaan data master, transaksi pelayanan klinik hingga laporan berbasis visualisasi data.

---

## Tujuan

Aplikasi ini bertujuan untuk:
- Mengelola data dan aktivitas operasional klinik secara terstruktur dan efisien.
- Menerapkan prinsip-prinsip dasar web programming dan pemrograman berorientasi objek (OOP) menggunakan framework modern.
- Menunjukkan pemahaman konsep database relasional dan sistem otentikasi berbasis peran.
- Menampilkan kemampuan fullstack development (back-end, front-end, dan database).

---

## Fitur Utama

### Login Multi-Level User (SRBAC)
- Role: Admin, Petugas Pendaftaran, Dokter, Kasir
- Setiap role hanya dapat mengakses fitur sesuai hak aksesnya

### Menu Master (CRUD)
- **Wilayah**: Provinsi/kabupaten sebagai referensi alamat pasien
- **User**: Akun sistem berdasarkan hak akses
- **Pegawai**: Data staf klinik
- **Tindakan**: Layanan medis yang tersedia
- **Obat**: Daftar obat yang dapat diresepkan

### Pendaftaran Pasien
- Registrasi pasien baru
- Input jenis kunjungan dan simpan riwayat

### Tindakan & Obat
- Input tindakan medis oleh dokter
- Resep obat untuk pasien

### Pembayaran Pasien
- Hitung total biaya berdasarkan tindakan dan obat
- Proses penyelesaian tagihan oleh kasir

### Laporan Visual
- Statistik kunjungan pasien
- Grafik tindakan dan obat terbanyak
- Visualisasi berbasis chart sederhana

---

## Teknologi yang Digunakan

- **Yii2 Framework** (Advanced Template)
- **Tailwind CSS** (UI styling)
- **PostgreSQL** (Database)
- **Chart.js / Google Charts** (untuk laporan visual)
- **RBAC bawaan Yii2** (dengan penyesuaian sederhana untuk SRBAC)

---

## Cara Instalasi

### Persiapan

Pastikan sudah menginstal:

- PHP 8.x  
- Composer  
- PostgreSQL 16  
- Node.js & NPM (untuk Tailwind)  
- Git  
- Yii2 CLI support:  
  Jalankan:
  ```bash
  composer global require "fxp/composer-asset-plugin:^1.4"
  ```

---

### 1. Clone Repository

```bash
git clone https://github.com/username/sistem-klinik.git
cd sistem-klinik
```

---

### 2. Install Dependency PHP

```bash
composer install
```

---

### 3. Inisialisasi Yii2 (Advanced Template)

```bash
php init
```

Pilih environment: `Development` (ketik `0` lalu tekan `Enter`)

---

### 4. Buat Database PostgreSQL

1. Buka PgAdmin / terminal PostgreSQL.  
2. Buat database baru:

```sql
CREATE DATABASE klinik_db;
```

---

### 5. Konfigurasi Database

Edit file:

```bash
common/config/main-local.php
```

Isi seperti berikut:

```php
'components' => [
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'pgsql:host=localhost;dbname=klinik_db',
        'username' => 'postgres',
        'password' => 'isi_password',
        'charset' => 'utf8',
    ],
],
```

---

### 6. Jalankan Migrasi

```bash
php yii migrate
```

Pastikan semua tabel berhasil dibuat.

---

### 7. Jalankan Tailwind CSS (Opsional)

Jika menggunakan Tailwind CSS CLI:

```bash
npx tailwindcss -i ./web/css/input.css -o ./web/css/output.css --watch
```

---

### 8. Jalankan Server Yii2

```bash
php yii serve
```

Akses aplikasi melalui:

```
http://localhost:8080
```

---

### Selesai

Aplikasi siap digunakan untuk testing fitur Sistem Informasi Klinik.
```
