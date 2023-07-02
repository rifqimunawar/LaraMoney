<?php

namespace Database\Seeders;

use App\Models\CategoryDebit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryDebitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Debit Category
        CategoryDebit::create([
            'name' => 'Penjualan Makanan',
        ]);

        CategoryDebit::create([
            'name' => 'Penjualan Minuman',
        ]);

        CategoryDebit::create([
            'name' => 'Penjualan Rokok',
        ]);
    }
}
