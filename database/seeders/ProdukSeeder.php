<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'Laptop ASUS ROG Strix G15',
            'deskripsi' => 'Laptop gaming dengan processor AMD Ryzen 7, RAM 16GB, SSD 512GB, dan VGA NVIDIA RTX 3060. Layar 15.6 inch Full HD 144Hz. Cocok untuk gaming dan rendering.',
            'harga' => 18500000,
            'stok' => 15
        ]);

        Produk::create([
            'nama_produk' => 'Samsung Galaxy S24 Ultra',
            'deskripsi' => 'Smartphone flagship dengan chipset Snapdragon 8 Gen 3, kamera 200MP, RAM 12GB, storage 256GB. Layar Dynamic AMOLED 6.8 inch dengan S-Pen.',
            'harga' => 21999000,
            'stok' => 25
        ]);

        Produk::create([
            'nama_produk' => 'Sony WH-1000XM5 Headphones',
            'deskripsi' => 'Headphone wireless premium dengan noise cancelling terbaik di kelasnya. Battery life hingga 30 jam, audio berkualitas tinggi, dan comfortable untuk penggunaan lama.',
            'harga' => 5499000,
            'stok' => 30
        ]);

        Produk::create([
            'nama_produk' => 'iPad Air M2 2024',
            'deskripsi' => 'Tablet Apple dengan chip M2, layar Liquid Retina 10.9 inch, storage 128GB. Mendukung Apple Pencil Gen 2 dan Magic Keyboard. Ideal untuk kreator dan profesional.',
            'harga' => 10999000,
            'stok' => 20
        ]);

        Produk::create([
            'nama_produk' => 'Mechanical Keyboard Keychron K8 Pro',
            'deskripsi' => 'Keyboard mechanical wireless dengan switch hot-swappable, RGB backlight, dan koneksi Bluetooth atau USB-C. Layout 80% tanpa numpad. Cocok untuk gaming dan typing.',
            'harga' => 1850000,
            'stok' => 40
        ]);

        Produk::create([
            'nama_produk' => 'Logitech MX Master 3S Mouse',
            'deskripsi' => 'Mouse ergonomis untuk produktivitas dengan sensor 8000 DPI, scroll wheel magnetik, dan 7 tombol programmable. Battery hingga 70 hari. Support multi-device pairing.',
            'harga' => 1599000,
            'stok' => 35
        ]);

        Produk::create([
            'nama_produk' => 'Monitor LG UltraGear 27 inch 4K',
            'deskripsi' => 'Monitor gaming 27 inch dengan resolusi 4K UHD, refresh rate 144Hz, response time 1ms. Mendukung HDR10 dan G-Sync. Panel IPS untuk warna akurat.',
            'harga' => 8750000,
            'stok' => 12
        ]);

        Produk::create([
            'nama_produk' => 'Apple AirPods Pro 2nd Gen',
            'deskripsi' => 'Earbuds wireless dengan active noise cancellation, chip H2, dan spatial audio. Case charging mendukung USB-C dan MagSafe. Water resistant IPX4.',
            'harga' => 3999000,
            'stok' => 50
        ]);
    }
}
