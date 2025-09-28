# Sistem Manajemen Artikel – Latihan Sebelum UTS

Project ini merupakan **latihan mandiri** untuk mengasah kemampuan Laravel sebelum Ujian Tengah Semester (UTS).  
Latihan ini **tidak memengaruhi nilai** dan **tidak perlu dikumpulkan**, tujuannya adalah memahami kembali syntax dan alur kerja Laravel.

---

## 📋 Deskripsi Project
Aplikasi ini adalah **Sistem Manajemen Artikel** sederhana yang memungkinkan pengguna untuk membuat dan mengelola artikel.  
Terdapat dua jenis peran (role) pengguna:

| Role     | Hak Akses                                                                 |
|----------|----------------------------------------------------------------------------|
| **Admin** | - Melihat semua artikel<br>- Membuat artikel<br>- Menghapus artikel siapa saja |
| **User**  | - Melihat semua artikel<br>- Membuat artikel sendiri<br>- Menghapus hanya artikel miliknya sendiri |

> **Catatan:**  
> Fitur CRUD penuh tidak diwajibkan. Fokus pada operasi **CREATE** (membuat) dan **DELETE** (menghapus).

---

## ⚙️ Fitur Utama
- **Autentikasi Pengguna**  
  Menggunakan **Laravel Breeze** untuk login, register, dan logout.
- **Manajemen Artikel**  
  Pengguna dapat membuat dan menghapus artikel yang disimpan di database.
- **Role & Otorisasi**  
  - **Admin** dapat menghapus artikel siapa pun.
  - **User** hanya dapat menghapus artikel yang ia buat sendiri.
- **Dashboard**  
  Halaman utama yang hanya dapat diakses setelah login.

---

## 🎯 Tujuan Latihan
- Mengulang dan memperkuat pemahaman **MVC Laravel** (Model, View, Controller).
- Melatih penggunaan **migration, model, controller, Blade template, routing, dan middleware**.
- Memahami cara menerapkan **role-based access** di Laravel.

---

## 📝 Output yang Diharapkan
- Aplikasi Laravel berjalan normal dengan fitur login, register, dan role admin/user.
- Pengguna dapat membuat artikel baru.
- Penghapusan artikel hanya dapat dilakukan sesuai aturan role:
  - **Admin** → semua artikel.
  - **User** → artikel miliknya sendiri.
- Struktur project mengikuti prinsip **MVC Laravel**.
