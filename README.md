# CRUD-Laravel-Livewire-Sederhana

Aplikasi ini merupakan contoh sederhana penerapan operasi CRUD (Create, Read, Update, Delete) menggunakan Laravel dan Livewire. Proyek ini dibuat untuk membantu pemahaman dasar tentang bagaimana mengintegrasikan Laravel dengan Livewire guna membangun aplikasi web interaktif.

## Fitur

- **Operasi CRUD:** Menambahkan, menampilkan, mengubah, dan menghapus data.
- **Livewire:** Update UI secara real-time tanpa harus reload halaman.
- **Struktur Kode yang Bersih:** Mudah untuk dipelajari dan dikembangkan lebih lanjut.

## Persyaratan

- PHP versi 7.4 atau lebih tinggi
- Composer
- Laravel 8 atau lebih tinggi
- Node.js dan npm (jika ingin meng-compile asset front-end)

## Cara Clone dan Setup Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek secara lokal:

1. **Clone Repository**

   Jalankan perintah berikut di terminal untuk meng-clone repository:
   ```bash
   git clone https://github.com/M-Ardiansyah-EP/CRUD-Laravel-Livewire-Sederhana.git
Masuk ke Direktori Proyek

Pindah ke folder proyek:

bash
cd CRUD-Laravel-Livewire-Sederhana
Install Dependensi PHP

Instal semua dependensi menggunakan Composer:

bash
composer install
Setup Environment

Salin file environment example dan sesuaikan pengaturan yang diperlukan:

bash
cp .env.example .env
Kemudian, buka file .env dan atur konfigurasi database serta variabel lain sesuai kebutuhan.

Generate Application Key

Jalankan perintah berikut untuk menghasilkan application key:

bash
php artisan key:generate
Jalankan Migrasi Database

Untuk membuat tabel-tabel yang diperlukan, jalankan:

bash
php artisan migrate
(Opsional) Install Dependensi Node.js dan Compile Assets

Jika proyek menggunakan asset front-end, jalankan:

bash
npm install
npm run dev
Jalankan Server

Mulai server pengembangan Laravel:

bash
php artisan serve
Proyek akan dapat diakses melalui http://localhost:8000.

Kontribusi
Kontribusi sangat diterima! Jika ingin berkontribusi, silakan fork repository ini dan buat pull request.

Lisensi
Proyek ini dilisensikan di bawah MIT License.

Dokumentasi di atas sudah mencakup penjelasan tentang apa proyek ini serta langkah-langkah untuk melakukan clone dan setup sehingga mudah dipahami oleh siapa saja yang ingin mencoba atau mengembangkan lebih lanjut.






