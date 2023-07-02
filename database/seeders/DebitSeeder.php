<?php

namespace Database\Seeders;

use App\Models\Debit;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DebitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();
        $newDate = $date->format('Y-m-d');

        Debit::create([
            'rp' => '20000',
            'category_id' => 1,
            'description' => 'Jajanan Anak-anak',
            'created_at' => $newDate,
        ]);

        Debit::create([
            'rp' => '25000',
            'category_id' => 2,
            'description' => 'Air Mineral',
            'created_at' => $newDate,
        ]);
    }
}
