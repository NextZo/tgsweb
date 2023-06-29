<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@opera.com',
            'password' => Hash::make('admin!'),
            'role' => 'ROLE_ADMIN',
            'created_at' => Carbon::now()
        ]);

        // kaos
        for ($i = 1; $i <= 5; $i++) {
            DB::table('products')->insert([
                'nama' => 'Kaos Polos ' . $i,
                'harga' => '99000',
                'kategori' => 'kaos',
                'created_at' => Carbon::now()
            ]);
        }

        // kemeja
        for ($i = 1; $i <= 5; $i++) {
            DB::table('products')->insert([
                'nama' => 'Kemeja ' . $i,
                'harga' => '199000',
                'kategori' => 'kemeja',
                'created_at' => Carbon::now()
            ]);
        }

        // hoodie
        for ($i = 1; $i <= 5; $i++) {
            DB::table('products')->insert([
                'nama' => 'Hoodie ' . $i,
                'harga' => '929000',
                'kategori' => 'hoodie',
                'created_at' => Carbon::now()
            ]);
        }

        // jas
        for ($i = 1; $i <= 5; $i++) {
            DB::table('products')->insert([
                'nama' => 'Jas ' . $i,
                'harga' => '994000',
                'kategori' => 'jas',
                'created_at' => Carbon::now()
            ]);
        }

        // sweater
        for ($i = 1; $i <= 5; $i++) {
            DB::table('products')->insert([
                'nama' => 'Sweater ' . $i,
                'harga' => '12000',
                'kategori' => 'sweater',
                'created_at' => Carbon::now()
            ]);
        }
    }
}
