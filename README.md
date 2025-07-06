# Peminjaman Buku Digital

Aplikasi web sederhana untuk manajemen peminjaman buku secara digital. Cocok digunakan sebagai template atau bahan pembelajaran.

## Fitur

- Manajemen data buku (tambah, ubah, hapus)
- Manajemen kategori buku
- Peminjaman dan pengembalian buku
- Registrasi dan login user (Admin & Peminjam)
- Laporan peminjaman
- Ulasan buku oleh user
- Dashboard statistik sederhana

## Struktur Folder

- `index.php` — Halaman utama/dashboard
- `buku.php`, `buku_tambah.php`, `buku_ubah.php`, `buku_hapus.php` — Manajemen buku
- `kategori.php`, `kategori_tambah.php`, dll — Manajemen kategori
- `peminjaman.php`, `peminjaman_tambah.php`, dll — Manajemen peminjaman
- `ulasan.php`, `ulasan_tambah.php`, dll — Ulasan buku
- `register.php`, `login.php`, `logout.php` — Autentikasi user
- `koneksi.php` — Koneksi database
- `css/`, `js/`, `assets/` — Asset frontend
- `database/library.sql` — Struktur dan contoh data database

## Instalasi

1. **Clone repo**
    ```sh
    git clone https://github.com/msalmanrafadhlih/peminjaman-buku-digital.git
    cd peminjaman-buku-digital
    ```

2. **Import database**
    - Buat database baru di MySQL, misal: `library`
    - Import file `database/library.sql`

3. **Konfigurasi koneksi**
    - Edit file [`koneksi.php`](koneksi.php) sesuai pengaturan database Anda.

4. **Jalankan aplikasi**
    - Jalankan di localhost/web server (XAMPP/Laragon/dll)
    - Akses melalui browser: `http://localhost/peminjaman-buku-digital`

## Akun Default

- **Admin**
    - Username: `admin`
    - Password: `admin`
- **Peminjam**
    - Silakan registrasi melalui halaman register

## Lisensi

Template ini bebas digunakan untuk pembelajaran dan pengembangan lebih lanjut.
