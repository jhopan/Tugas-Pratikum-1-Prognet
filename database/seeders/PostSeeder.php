<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Pengenalan Laravel Framework',
            'content' => 'Laravel adalah framework PHP yang powerful dan mudah digunakan untuk pengembangan web. Framework ini menyediakan berbagai fitur seperti routing, middleware, eloquent ORM, dan blade templating yang memudahkan developer dalam membangun aplikasi web modern.'
        ]);

        Post::create([
            'title' => 'Tutorial CRUD dengan Laravel',
            'content' => 'CRUD (Create, Read, Update, Delete) adalah operasi dasar dalam pengelolaan data. Dalam Laravel, kita dapat dengan mudah membuat CRUD menggunakan Resource Controller dan Eloquent Model. Tutorial ini akan membahas langkah-langkah pembuatan CRUD secara lengkap.'
        ]);

        Post::create([
            'title' => 'Mengenal Laravel Breeze',
            'content' => 'Laravel Breeze adalah starter kit autentikasi yang minimal dan sederhana. Breeze menyediakan implementasi dasar untuk fitur login, register, reset password, dan verifikasi email. Cocok untuk project yang membutuhkan autentikasi tanpa kompleksitas berlebih.'
        ]);

        Post::create([
            'title' => 'Database Migration di Laravel',
            'content' => 'Migration adalah version control untuk database. Laravel migration memungkinkan kita untuk mendefinisikan struktur tabel database menggunakan kode PHP. Dengan migration, tim development dapat dengan mudah berbagi dan memodifikasi struktur database.'
        ]);

        Post::create([
            'title' => 'Eloquent ORM: Model Relationships',
            'content' => 'Eloquent ORM menyediakan cara yang elegan untuk berinteraksi dengan database. Salah satu fitur powerful dari Eloquent adalah relationship antar model seperti One to One, One to Many, Many to Many, dan Polymorphic relations. Relationship ini membuat query menjadi lebih intuitif dan mudah.'
        ]);
    }
}
