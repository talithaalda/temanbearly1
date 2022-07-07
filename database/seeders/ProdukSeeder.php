<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        produk::create([
            'namaproduk'=>'Emina Bright Stuff Moisturizing Cream - Normal',
            'slug'=>'emina-bright-stuff-moisturizing-cream-normal',
            'category_id'=> 1 ,
            'merk'=>'Emina',
            'harga'=> 18002,
            'deskripsi'=>'Pelembab yang cocok untuk sehari-hari. Formulanya mengandung ekstrak summer Plum yang dikenal sebagai anti pollutant, vitamin E, dan moisturizing agent untuk wajah tampak lebih sehat dan cerah merona. Pelembab ini juga mengandung perlindungan UV A & UV B untuk melindungi Kulit mu dari kusam.',
            'stok'=>13,
            'image'=>'produk-image/npHAO7OndMRnqrrMam6r2hNHqcKRuuRYMGGWTGVj.jpg',
        ]);
        produk::create([
            'namaproduk'=>'Emina Lip Cushion 9 gr',
            'slug'=>'emina-lip-cushion',
            'category_id'=>2,
            'merk'=>'Emina',
            'harga'=>47500,
            'deskripsi'=>'Emina Lip Cushion merupakan lip cream dengan tekstur velvety yang memberikan warna yang intens dan hasil matte yang terasa ringan sepanjang hari, Dilengkapi dengan aplikator cushion yang dapat menghasilkan tampilan gradient lips maupun full lips. Kini hadir dengan 4 warna baru yang dapat mewarnai aktivitasmu sepanjang hari',
            'stok'=>23,
            'image'=>'produk-image/6ABbZKvp43lm8udRMNTea3VyBQvvovOiXpx72ME7.png',
        ]);
        produk::create([
            'namaproduk'=>'Emina Ms Pimple Acne Solution Face Wash',
            'slug'=>'emina-ms-pimple-acne-solutionface-wash',
            'category_id'=>1,
            'merk'=>'Emina',
            'harga'=>16300,
            'deskripsi'=>'Emina Ms Pimple Acne Solution Series merupakan seri skin care Emina yang diperuntukkan untuk merawat kulit acne prone. Series ini terdiri dari face wash, face toner, moisturizing gel dan spot gel sebagai tahap pembersihan hingga perawatan. Kandungan Salicylic Acid membantu mempercepat regenerasi kulit dan mencegah pertumbuhan bakteri serta Rosebay Willowherb Extract yang efektif mengurangi kemerahan pada kulit. Kandungan Witch Hazel Extract dan Zinc Gluconate nya mampu mengontrol produksi sebum dan mengurangi tampilan kulit',
            'stok'=>2,
            'image'=>'produk-image/OsaW17tsZnBQi8vBWyviw6E7lDSmAEe0RWfSwkmp.jpg',
        ]);
        produk::create([
            'namaproduk'=>'Geamoore Addicted Parfum 5ml',
            'slug'=>'geamoore-addicted-parfum-5ml',
            'category_id'=>3,
            'merk'=>'Geamoore',
            'harga'=>4600,
            'deskripsi'=>'ADDICTED SERIES PERFUME GEAMOORE ROLL ON 5ML

            <br><br>Blush Sunny NA18210601342
            Base aroma ini adalah red apple, peach dan lotus. Fiturnya sangat kuat disebut dengan passion fruity, cocok digunakan di siang hari karena sangat segar dan ceria.
            
            <br><br>Vanillatte NA18210601345
            Aroma cocoa berpadu dengan vanila yang warm dan powdery, termasuk ke dalam aroma strong sehingga sangat tahan lama sepanjang pemakaian.
            
            <br><br>Flamingo Flame NA18210601347
            Aroma ini identik dengan floral fruity. Terdiri dari strawberry, blackcurrant, peony dan jasmine. Flamingo Flame termasuk kategori strong dan memberikan sensasi yang kuat.
            
            <br><br>Cotton Candy NA18210601346
            Cotton Candy terobsesi dengan seni wewangian yang unik, ciri khasnya adalah aroma musk, jeruk, candies dan rosewood. Memiliki finish aroma yang lembut dan manis.
            
            <br><br>Greentealova NA18210601343
            Wewangian dengan pencampuran super extra dari greentea, rose extract, rasperry dan peach. Aroma saat di spray sangat kuat sehingga selaras dengan ketahanannya.
            
            <br><br>Peach Cookies NA18210601341
            Aromanya sangat sweet dan sensual, terdiri dari perpaduan musk, lily, irish dan vanilla, cocok digunakan oleh pecinta aroma manis dan lembut',
            'stok'=>12,
            'image'=>'produk-image/oWToxgBwAuRjq6ue2sqwJBsEgYJG491oXYPaHaEo.jpg',
        ]);
        produk::create([
            'namaproduk'=>'Geamoore Inspired Parfum 6ml',
            'slug'=>'geamoore-inspired-parfum-6ml',
            'category_id'=>3,
            'merk'=>'Geamoore',
            'harga'=>4700,
            'deskripsi'=>'Deskripsi Wewangian:
            <br>🌸BABY BACKARATZ
            [ BPOM : NA18210600450 ]
            Perpaduan aroma baby dan mewahnya Bacaratz, aroma dominan mewah dan segar
            
            <br>🌸PEONY JOOMALONE
            [ BPOM : NA18210600451 ]
            Aroma khas buah yang segar
            
            <br>🌸BABBY SWEET POWDER
            [ BPOM : NA18210600452 ]
            Aroma bedak bayi yang segar dan lembut
            
            <br>🌸BACKARATZ
            [ BPOM : NA18210600453 ]
            Aroma mewah dan tahan lama
            
            <br>🌸PEACHY OH BABY
            [ BPOM : NA18210600450 ]
            Aroma segar buah peach dan perpaduan manis
            
            <br>🌸VANILLA
            [ BPOM : NA18210600450 ]
            Aroma latte vanilla yang lembut dan segar
            
            <br><br>inspired parfum GEAMOORE
            dengan pilihan varian aroma yg sangat best seller dan berkesan mewah, di kemas dengan kemasan yg simple dan cantik dan mini sangat cocok untuk anda yg sering beraktivitas di luar rumah maupun di dalam kantor',
            'stok'=>33,
            'image'=>'produk-image/fg0R7nc29fqywvtnrvxC3UT28VX1Iw7wJoeQfAIf.jpg',
        ]);
        produk::create([
            'namaproduk'=>'Innisfree Sheet Mask',
            'slug'=>'innisfre-sheet-mask',
            'category_id'=>1,
            'merk'=>'Innisfree',
            'harga'=>4100,
            'deskripsi'=>'Innisfree My Real Squeeze Mask adalah versi perbaruan dari It’s Real Squeeze Mask Sheet.
            Kemasan BARU dengan lembaran yg lebih tipis.
            Ini menjadi best seller di korea, ternyata orang korea sangat menjadi favorit orang korea untuk di gunakan sebagai perawatan wajah. 
            Harga mask sheet ini tergolong murah tapi kualitas nomor 1 dan wanginya enak banget dan fungsi sesuai variant.',
            'stok'=>9,
            'image'=>'produk-image/luFauJXom70KYuS1ybYwIfJKgSdmf0AXOJZd8sfr.jpg',
        ]);
        produk::create([
            'namaproduk'=>'Wardah Everyday Luminous Face Powder 30 g',
            'slug'=>'wardah-everyday-luminous-face-powder',
            'category_id'=>2,
            'merk'=>'Wardah',
            'harga'=>35500,
            'deskripsi'=>'Everyday Luminous Face Powder adalah bedak tabur ringan untuk membuat kulit tampak lebih halus dan cantik alami. Dengan microcoated yang membantu menyerap kelebihan minyak pada kulit wajah.',
            'stok'=>5,
            'image'=>'produk-image/g4dZuwAzQPOmEbu6MDKuksnc6pTR3KFrnnUJcP32.jpg',
        ]);
        produk::create([
            'namaproduk'=>'Wardah EyeXpert Eye Shadow Passionate 4.2 gr',
            'slug'=>'wardah-eyexpert-eye-shadow-passionate-4.2-gr',
            'category_id'=>2,
            'merk'=>'Wardah',
            'harga'=>39500,
            'deskripsi'=>'Sapuan pigmen halus untuk memberikan kesan warna natural bagi kelopak mata. Memberikan aksen bagi bentuk terbaik dari keindahan tersembunyi dari matamu. Tersedia dalam 2 kombinasi warna untuk tunjukkan kecantikan natural matamu.',
            'stok'=>45,
            'image'=>'produk-image/Dr49HfrI2QhUNFWApmpTquszI9QuOuQSjiFKa5Jh.png',
        ]);
        produk::create([
            'namaproduk'=>'Wardah Lightening Oil-Infused Micellar Water - 100 ml',
            'slug'=>'wardah-lightening-oil-infused-micellar-water-100-ml',
            'category_id'=>1,
            'merk'=>'Wardah',
            'harga'=>30000,
            'deskripsi'=>'Wardah Lightening Oil-Infused Micellar Water mengandung 4 Pure Botanical Oils yang terdiri dari Macadamia Oil, Jojoba Oil, Avocado Oil, dan Soybean Oil yang membantu menutrisi kulit. Kandungan Advanced Niacinamide (vitamin B3) bantu kulit tampak lebih cerah serta kandungan alantoin yang berperan sebagai anti iritan sekaligus melembabkan kulit. Cara penggunaan produk ini adalah : Wardah Lightening Oil-Infused Micellar Water diaplikasikan dengan cara dikocok terlebih dahulu agar 2 fasanya menyatu. Kemudian tuangkan produk pada kapas lalu usapkan pada wajah, daerah mata, dan bibir dengan lembut. Fasa pada produk yang menyatu setelah dikocok membutuhkan waktu untuk berpisah lagi, namun tetap dapat digunakan seperti biasa.',
            'stok'=>20,
            'image'=>'produk-image/DK48oWPFf39BZ3V0I8jZ6r59SuhGp8UWfPnUWE06.jpg',
        ]);
        produk::create([
            'namaproduk'=>'Wardah Lightening Night Cream - 20 gr',
            'slug'=>'wardah-lightening-night-cream-20gr',
            'category_id'=>1,
            'merk'=>'Wardah',
            'harga'=>22500,
            'deskripsi'=>'Krim malam Wardah Lightening Night Cream hadir dalam kemasan baru, berfungsi untuk mencerahkan kulit membuat warna kulit tampak lebih merata, dan menyamarkan bekas jerawat.',
            'stok'=>11,
            'image'=>'produk-image/8AQ3SbCuJbjFVEtrMlD78YMn0kghxAxJN4j65Nze.jpg',
        ]);
    }
}
