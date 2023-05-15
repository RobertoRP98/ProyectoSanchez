<?php

namespace Database\Factories;

use App\Models\cronograma;
use Illuminate\Database\Eloquent\Factories\Factory;

class cronogramaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cronograma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_info_autos' => $this->faker->randomDigitNotNull,
        'ult_mp' => $this->faker->word,
        'ult_fecha' => $this->faker->word,
        'id_ejecucion' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
