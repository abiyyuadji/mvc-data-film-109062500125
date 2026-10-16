# MVC PHP Native - Data Film

Aplikasi CRUD sederhana untuk mengelola data film
menggunakan PHP Native dengan pola Model-View-Controller (MVC).

## Kebutuhan

- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- XAMPP atau Laragon
- Git

## Instalasi

1. Salin project ke folder htdocs.
2. Nyalakan Apache dan MySQL.
3. Import file `database/film.sql` melalui phpMyAdmin.
4. Pastikan konfigurasi database pada `config/database.php` sesuai.
5. Buka:

http://localhost/mvc-data-film-109062500125/public/index.php

## Struktur Folder

- `app/models/` : mengelola data dan query database.
- `app/controllers/` : mengatur alur request.
- `app/views/` : menampilkan halaman aplikasi.
- `config/` : konfigurasi database.
- `database/` : menyimpan database SQL.
- `public/` : entry point aplikasi.

## Fitur

- Menampilkan data film
- Menambahkan data film
- Mengubah data film
- Menghapus data film
- Validasi input
- Pesan keberhasilan operasi

## Atribut Data Film

- Judul
- Genre
- Tahun Rilis
- Durasi
- Sutradara

## Histori Git

Gunakan:

git log --oneline --graph --decorate

untuk melihat tahapan pengembangan aplikasi.