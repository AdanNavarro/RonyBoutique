<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type_sale' => ('Dedit'),
            'worker_id' => function($id){
                return Worker::find($id['user_id'])->user_id;
            },
            'client_id' =>function($id){
                return Client::find($id['user_id'])->user_id;
            },
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'subtotal' => $sub = random_int(0,1000),
            'TAX' => '0.16',
            'total' => $sub*1.16,
            'status' => ('paid out'),
        ];
    }
}
