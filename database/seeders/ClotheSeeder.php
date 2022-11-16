<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clothe;


class ClotheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registro1 = new Clothe();

        $registro1->trademark_id = 1;
        $registro1->type_clothes_id = 1;
        $registro1->type_costumer_clothe = 1;
        $registro1->name = "Camisa Roja Marca C&A";
        $registro1->size = "XL";
        $registro1->description = "Camisa roja deportiva para hacer ejercicio";
        $registro1->price = 99.99;
        $registro1->stock = 5;
        $registro1->img = "https://images-na.ssl-images-amazon.com/images/I/51r%2BtJ3RiPL._UX385_.jpg";
        $registro1->save();

        $registro2 = new Clothe();

        $registro2->trademark_id = 1;
        $registro2->type_clothes_id = 1;
        $registro2->type_costumer_clothe = 1;
        $registro2->name = "Camisa Roja Marca C&A";
        $registro2->size = "L";
        $registro2->description = "Camisa roja deportiva para hacer ejercicio";
        $registro2->price = 99.99;
        $registro2->stock = 6;
        $registro2->img = "https://images-na.ssl-images-amazon.com/images/I/51r%2BtJ3RiPL._UX385_.jpg";
        $registro2->save();


        $registro3 = new Clothe();

        $registro3->trademark_id = 1;
        $registro3->type_clothes_id = 1;
        $registro3->type_costumer_clothe = 1;
        $registro3->name = "Camisa Roja Marca C&A";
        $registro3->size = "M";
        $registro3->description = "Camisa roja deportiva para hacer ejercicio";
        $registro3->price = 99.99;
        $registro3->stock = 2;
        $registro3->img = "https://images-na.ssl-images-amazon.com/images/I/51r%2BtJ3RiPL._UX385_.jpg";
        $registro3->save();


        $registro4 = new Clothe();

        $registro4->trademark_id = 2;
        $registro4->type_clothes_id = 2;
        $registro4->type_costumer_clothe = 2;
        $registro4->name = "Pantalon de mezclilla Marca levis";
        $registro4->size = "L";
        $registro4->description = "Pantalon de mezclilla";
        $registro4->price = 35.99;
        $registro4->stock = 5;
        $registro4->img = "https://th.bing.com/th/id/R.3575ece9d923bb8211193db2daea3428?rik=c%2f15dknajCN8BA&pid=ImgRaw&r=0";
        $registro4->save();
    }
}