<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::create([
            'judul' => 'Teknologi AI Mengubah Dunia Industri',
            'isi' => 'Artificial Intelligence (AI) telah menjadi teknologi yang mengubah berbagai sektor industri. Dari manufaktur hingga layanan kesehatan, AI membantu meningkatkan efisiensi dan produktivitas. Implementasi machine learning dan deep learning membuka peluang baru dalam automasi dan analisis data.',
            'penulis' => 'Dr. Budi Santoso',
            'tanggal_terbit' => '2024-11-15'
        ]);

        Artikel::create([
            'judul' => 'Panduan Memulai Bisnis Startup di Indonesia',
            'isi' => 'Memulai bisnis startup membutuhkan persiapan matang mulai dari riset pasar, validasi ide, hingga pencarian investor. Indonesia dengan populasi besar dan penetrasi internet yang tinggi menawarkan peluang besar bagi startup. Artikel ini membahas langkah-langkah praktis membangun startup dari nol.',
            'penulis' => 'Siti Rahayu, MBA',
            'tanggal_terbit' => '2024-12-01'
        ]);

        Artikel::create([
            'judul' => 'Perubahan Iklim dan Dampaknya Terhadap Pertanian',
            'isi' => 'Perubahan iklim global memberikan dampak signifikan terhadap sektor pertanian. Perubahan pola cuaca, kenaikan suhu, dan intensitas hujan yang tidak menentu mempengaruhi produktivitas tanaman. Petani harus beradaptasi dengan menerapkan teknologi pertanian modern dan sistem irigasi yang efisien.',
            'penulis' => 'Prof. Made Wijaya',
            'tanggal_terbit' => '2024-10-20'
        ]);

        Artikel::create([
            'judul' => 'Revolusi Digital dalam Pendidikan',
            'isi' => 'Pandemi COVID-19 mempercepat transformasi digital dalam dunia pendidikan. Platform pembelajaran online, video conference, dan e-learning menjadi solusi utama. Teknologi ini tidak hanya memudahkan akses pendidikan tetapi juga membuka peluang pembelajaran yang lebih personal dan fleksibel.',
            'penulis' => 'Dra. Ani Wijayanti, M.Pd',
            'tanggal_terbit' => '2024-09-10'
        ]);

        Artikel::create([
            'judul' => 'Pentingnya Cybersecurity di Era Digital',
            'isi' => 'Dengan meningkatnya digitalisasi, ancaman keamanan siber juga meningkat. Serangan ransomware, phishing, dan pencurian data menjadi ancaman serius bagi perusahaan dan individu. Artikel ini membahas strategi cybersecurity yang efektif untuk melindungi aset digital dan data pribadi.',
            'penulis' => 'Ahmad Fauzi, CISSP',
            'tanggal_terbit' => '2024-11-25'
        ]);

        Artikel::create([
            'judul' => 'Tren Pariwisata Berkelanjutan di Indonesia',
            'isi' => 'Pariwisata berkelanjutan menjadi tren global yang juga berkembang di Indonesia. Konsep ini mengintegrasikan aspek ekonomi, sosial, dan lingkungan dalam pengelolaan destinasi wisata. Bali, Lombok, dan Raja Ampat menjadi contoh destinasi yang menerapkan prinsip sustainable tourism.',
            'penulis' => 'I Ketut Suardana',
            'tanggal_terbit' => '2024-12-10'
        ]);
    }
}
