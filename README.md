<p align="center">
  <img src="asset/dashboard.png" width="400" alt="Logo Proyek">
</p>
# CRUD-Laravel-Livewire-Sederhana

Aplikasi ini merupakan contoh sederhana penerapan operasi CRUD (Create, Read, Update, Delete) menggunakan Laravel dan Livewire. Proyek ini dibuat untuk membantu pemahaman dasar tentang bagaimana mengintegrasikan Laravel dengan Livewire guna membangun aplikasi web interaktif.

**Fitur:** Operasi CRUD (menambahkan, menampilkan, mengubah, dan menghapus data), update UI secara real-time dengan Livewire, dan struktur kode yang bersih sehingga mudah untuk dipelajari dan dikembangkan lebih lanjut.

**Persyaratan:** PHP versi 7.4 atau lebih tinggi, Composer, Laravel 8 atau lebih tinggi, serta Node.js dan npm (jika ingin meng-compile asset front-end).

**Cara Clone dan Setup Proyek:**  
Clone repository dengan perintah:  
```bash
git clone https://github.com/M-Ardiansyah-EP/CRUD-Laravel-Livewire-Sederhana.git
```
Masuk ke direktori proyek:  
```bash
cd CRUD-Laravel-Livewire-Sederhana
```  
Install dependensi PHP menggunakan Composer:  
```bash
composer install
```  
Setup environment dengan menyalin file .env.example ke .env:  
```bash
cp .env.example .env
```  
Kemudian, atur konfigurasi database dan variabel lainnya pada file .env. Selanjutnya, generate application key:  
```bash
php artisan key:generate
```  
Jalankan migrasi database:  
```bash
php artisan migrate
```  
Jika proyek menggunakan asset front-end, install dependensi Node.js dan compile assets:  
```bash
npm install
npm run dev
```  
Jalankan server pengembangan Laravel:  
```bash
php artisan serve
```  
Proyek akan dapat diakses melalui [http://localhost:8000](http://localhost:8000).

**Kontribusi:**  
Kontribusi sangat diterima! Jika ingin berkontribusi, silakan fork repository ini dan buat pull request.

**Lisensi:**  
Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).
```
