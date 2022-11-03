<?php

namespace Database\Seeders;

use App\Models\Trademark;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trademark::factory()->count(4)->state(new Sequence(
            ['name'=> 'Optima'],
            ['name'=> 'Puma'],
            ['name'=> 'Adiddas'],
            ['name'=> 'Nike'],
        ))->create();
    }
}
