<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        // $this->call(Type_clotheSeeder::class);
        // $this->call(TrademarkSeeder::class);
        // $this->call(SaleSeeder::class);

        $this->call(ProductSeeder::class);
    }
}
