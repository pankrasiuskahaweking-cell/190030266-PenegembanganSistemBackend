Judul Project
Aplikasi To Do List Berbasis Web
Deskripsi Singkat
Aplikasi To Do List adalah aplikasi berbasis web yang digunakan untuk membantu pengguna dalam mencatat, mengelola, dan memantau daftar tugas atau pekerjaan yang harus diselesaikan. Aplikasi ini menyediakan fitur utama seperti menambahkan tugas baru, mengedit tugas, menghapus tugas, serta menampilkan daftar tugas secara terstruktur sehingga pengguna dapat mengelola waktu dan pekerjaan dengan lebih efektif.

Daftar Anggota
No	Nama	NIM	 Peran
1	Ridho Satria Ramadhan (190030266)	: Mengembangkan Aplikasi To Do List
2	Alexandro Eka Willian Se (240030332) : Membantu Membuat Dokumentasi
3	Pankrasius Kaha Weking (240030300) : Membantu Membuat Dokumentasi
4.I Made Bagus Swaharta (240030330)  : Membantu Membuat Dokumentasi

Lingkungan Pengembangan
Alat dan teknologi yang digunakan dalam pengembangan aplikasi ini meliputi:
•	Bahasa Pemrograman: PHP
•	Database: MySQL
•	Web Server: Apache (XAMPP)
•	Frontend: HTML, CSS, dan JavaScript
•	Version Control: Git dan GitHub
•	Text Editor / IDE: Visual Studio Code
•	Browser: Google Chrome / Mozilla Firefox
________________________________________
Hasil Pengembangan
Aplikasi To Do List memiliki beberapa modul dan fitur utama, antara lain:
1.	Modul Tambah Tugas
Pengguna dapat menambahkan tugas baru dengan memasukkan nama tugas dan deskripsi.
2.	Modul Edit Tugas
Pengguna dapat mengubah informasi tugas yang telah dibuat.
3.	Modul Hapus Tugas
Pengguna dapat menghapus tugas yang sudah tidak diperlukan.
4.	Modul Daftar Tugas
Sistem menampilkan seluruh daftar tugas yang tersimpan dalam database secara terstruktur.
5.	Status Tugas
Menampilkan status tugas (belum selesai / selesai).
________________________________________
Struktur Folder
Berikut adalah struktur folder dalam project Aplikasi To Do List:
todo-list/
│
├── config/
│   └── database.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
│
├── pages/
│   ├── tambah.php
│   ├── edit.php
│   └── hapus.php
│
├── index.php
└── README.md
Penjelasan:
•	config : Menyimpan konfigurasi koneksi database
•	assets : File pendukung seperti CSS dan JavaScript
•	pages : Halaman proses CRUD
•	index.php : Halaman utama aplikasi
Cara Instalasi dan Menjalankan Aplikasi
1.	Install XAMPP di komputer.
2.	Aktifkan Apache dan MySQL.
3.	Salin folder project todo-list ke dalam folder htdocs.
4.	Buat database di phpMyAdmin dengan nama todo_list.
5.	Import file database (jika tersedia).
6.	Atur koneksi database pada file config/database.php.
7.	Buka browser dan akses:
8.	http://localhost/todo-list

