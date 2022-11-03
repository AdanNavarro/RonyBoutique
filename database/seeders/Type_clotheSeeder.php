<?php

namespace Database\Seeders;

use App\Models\Type_clothe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class Type_clotheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type_clothe::factory()->count(4)->state(new Sequence(
            ['type'=> 'Camisa'],
            ['type'=> 'Playera'],
            ['type'=> 'Pantalon'],
            ['type'=> 'Sudadera']
        ))->create();
    }
}
