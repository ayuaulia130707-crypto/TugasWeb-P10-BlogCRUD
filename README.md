# TugasWeb-P10-BlogCRUD

## Deskripsi

Project ini merupakan Tugas Rutin 10 pada mata kuliah Pemrograman Web.
Project menggunakan Laravel untuk membuat aplikasi Blog CRUD.

## Fitur

- Menampilkan daftar post
- Menambahkan post
- Melihat detail post
- Mengedit post
- Menghapus post
- Validasi input
- Pesan error pada form
- Flash message
- Pagination
- Search post
- Soft Delete
- Upload gambar
- Mengganti gambar pada post

## Teknologi

- Laravel
- PHP
- MySQL
- Blade
- HTML
- CSS

## CRUD Post

Aplikasi memiliki fitur CRUD:

1. Create — menambahkan post baru
2. Read — menampilkan daftar dan detail post
3. Update — mengubah data post
4. Delete — menghapus post menggunakan Soft Delete

## Cara Menjalankan

1. Clone repository.
2. Masuk ke folder project.
3. Jalankan `composer install`.
4. Buat database MySQL.
5. Atur konfigurasi database pada file `.env`.
6. Jalankan `php artisan migrate`.
7. Jalankan `php artisan storage:link`.
8. Jalankan `php artisan serve`.
9. Buka `http://127.0.0.1:8000/posts`.

## Catatan

Fitur upload gambar menggunakan penyimpanan Laravel pada disk `public`.
