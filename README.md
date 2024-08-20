<div style="text-align: center; width:"100%"">
  <img src="public/img/temanbearly.png" alt="Teman Bearly" width="70%">
</div>

# Hi there, welcome to Teman Bearly 👋

Teman Bearly adalah situs web E-Commerce yang menawarkan berbagai produk perawatan kulit dan makeup dari toko dengan nama Teman Bearly. Dikembangkan menggunakan framework Laravel dengan tampilan yang user friendly, situs web ini menyediakan pengalaman berbelanja online yang mulus dan nyaman.

## Petunjuk Instalasi
Tools yang perlu diinstal adalah PHP Version minimal 8.0, XAMPP, dan Composer.

    1. Aktifkan XAMPP dengan membuka XAMPP Control Panel. Tekan tombol "Start" pada module Apache dan MySQL.
    2. Jika baru pertama kali, buka http://localhost/phpmyadmin/index.php dan klik menu Database pada sebelah atas. Ketik "laravel" pada  kolom input database name dan klik tombol create.
    4. Setelah tools telah terpasang secara sempurna, masuk ke dalam direktori xampp yang dimana file tersebut disimpan saat dilakukan penginstallan pertama kali
    5. Buatlah sebuah folder dengan nama bebas dan masuk ke dalam direktori folder baru tersebut
    6. Klik kanan dan pilih Open in Terminal
    7. Melakukan clone project GitHub melalui CMD atau terminal dan ketik "git clone https://github.com/AirlanggaOBE/OBE-SI.git" 
    8. Selanjutnya, ketik masuk ke folder OBE-SI dan ketik "composer update"
    9. Lalu, ketik "cp .env.example .env"
    10. Kemudian buat database baru lalu buka file .env untuk merubah DB_DATABASE sesuai database yang dibuat.
    11. Lalu, ketik "php artisan key:generate"
    12. Selanjutnya untuk membuat symlink ketik "php artisan storage:link"
    13. Ketik "php artisan migrate:fresh --seed"
    14. Ketik "php artisan serve"
    15. Lalu, aplikasi sudah berjalan dan melakukan pencarian di browser "http://127.0.0.1:8000"
    16. Jika terdapat pesan error, coba jalankan "php artisan optimize"
    
> Gambar yang ada pada produk masih belum bisa tertampil. Untuk menampilkanya perlu menambahkan gambar pada dashboard admin di menu edit produk pada masing-masing produk.
> Gambar produk dapat diambil di folder public
    
**Akses Dashboard Admin**

    1. Pergi ke http://127.0.0.1:8000/admin
    2. Login dengan email : admin@gmail.com, passsword: admin

**Akses Dashboard Admin**

    1. Pergi ke http://127.0.0.1:8000/login
    2. Jika belum punya akun perlu mendaftar terlebih dahulu dengan mengklik "Register Now"
    3. Mengetikkan data nama, username, email, dan password
    4. Login menggunakan email dan password yang sudah dibuat
