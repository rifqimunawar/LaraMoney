<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kredit;
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

        $this->call([
            CategoryDebitSeeder::class,
            DebitSeeder::class,
        ]);

        DB::table('users')->insert([
            'name' => 'Rifqi Munawar',
            'email' => 'rifqi@gmail.com',
            'password' => Hash::make('rifqi'),
        ]);


        // Kredit Category
        // =================================
        // =================================
        DB::table('category_kredits')->insert([
            'name' => 'Pembelian Stok Barang',
        ]);
        DB::table('category_kredits')->insert([
            'name' => 'Biaya Listrik dan Air',
        ]);
        DB::table('category_kredits')->insert([
            'name' => 'Biaya Transportasi',
        ]);
        DB::table('category_kredits')->insert([
            'name' => 'Biaya Operasional',
        ]);


        // Kredit
        // =================================
        // =================================

        $date = Carbon::now();
        $newDate = $date->format('Y-m-d');

        $data = [
            'rp' => '20000',
            'category_id' => '1',
            'description' => 'Transportasi',
            'created_at' => $newDate
        ];
        DB::table('kredits')->insert($data);

        $data = [
            'rp' => '25000',
            'category_id' => '2',
            'description' => 'Kebutuhan Pribadi',
            'created_at' => $newDate
        ];
        DB::table('kredits')->insert($data);
    }
}