<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
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
            'name' => 'Rifqi Munawar',
            'email' => 'rifqi@gmail.com',
            'password' => Hash::make('rifqi'),
        ]);
        DB::table('category_debits')->insert([
            'name' => 'Penjualan Makanan',
        ]);
        DB::table('category_debits')->insert([
            'name' => 'Penjualan Minuman',
        ]);
        DB::table('category_debits')->insert([
            'name' => 'Penjualan Rokok',
        ]);

        $date = Carbon::now();
        $newDate = $date->format('Y-m-d');

        $data = [
            'rp' => '20000',
            'category_id' => '1',
            'description' => 'Jajanan Anak-anak',
            'created_at' => $newDate
        ];
        DB::table('debits')->insert($data);

        $data = [
            'rp' => '25000',
            'category_id' => '2',
            'description' => 'Air Mineral',
            'created_at' => $newDate
        ];
        DB::table('debits')->insert($data);
    }
}