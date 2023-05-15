<?php

namespace Database\Factories;

use App\Models\historico_cronograma;
use Illuminate\Database\Eloquent\Factories\Factory;

class historico_cronogramaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = historico_cronograma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_anio' => $this->faker->word,
        'fecha_mes' => $this->faker->word,
        'id_cronograma' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
