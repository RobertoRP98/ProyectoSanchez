<?php

namespace Database\Factories;

use App\Models\empleados_ocupados;
use Illuminate\Database\Eloquent\Factories\Factory;

class empleados_ocupadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = empleados_ocupados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_ejecucion' => $this->faker->randomDigitNotNull,
        'ultima_hora' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
