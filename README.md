<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

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
