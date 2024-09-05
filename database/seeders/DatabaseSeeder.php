<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'zami',
            'email' => 'ami@gmail.com',
            'password' => bcrypt('12345'),

        ]);
        product::create([
            'name'=>'Koko Pria',
            'harga'=>'200.000',
            'deskripsi'=>'Baju koko pria lengan 3/4 dengan paduan two tone yang cantik Berbahan Toyobo yang adem dan nyaman digunakan.',
            'foto'=>'koko.png',
        ]);
        product::create([
            'name'=>'Mukena',
            'harga'=>'300.000',
            'deskripsi'=>'Mukena Mahira berbahan Katun Rayon HQ yang adem, ringan, dingin, jatuh, lembut, nyaman berlama-lama dipake sholat..',
            'foto'=>'mukena.png',
        ]);
        product::create([
            'name'=>'Sejadah',
            'harga'=>'150.000',
            'deskripsi'=>'Sajadah Turky Dewasa Bahan Tebal dan Lembut Produk Original Super Spigel Sejadah Murah Terlaris By sajadahku.',
            'foto'=>'sejadah.png',
        ]);
        product::create([
            'name'=>'Abaya',
            'harga'=>'900.000',
            'deskripsi'=>'bahannya halus, adem, ringan tapi tidak menerawang dan tekstur kainnya unik.',
            'foto'=>'abaya.png',
        ]);
        product::create([
            'name'=>'Sarung',
            'harga'=>'600.000',
            'deskripsi'=>'sarung batik printing bahan berkualitas dan tentunya bagus dan elegan saat dipakai.',
            'foto'=>'sarung.png',
        ]);
        product::create([
            'name'=>'Kerudung Syari',
            'harga'=>'100.000',
            'deskripsi'=>'Kerudung syar’i ini terbuat dari bahan katun yang adem dan nyaman dipakai.',
            'foto'=>'kerudung.png',
        ]);
    }}
