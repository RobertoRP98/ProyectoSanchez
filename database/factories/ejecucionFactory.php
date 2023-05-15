<?php

namespace Database\Factories;

use App\Models\ejecucion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ejecucionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ejecucion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_programada' => $this->faker->word,
        'fecha_de_ejecucion' => $this->faker->word,
        'hora_de_ejecucion' => $this->faker->word,
        'tiempo_de_ejecucion' => $this->faker->word,
        'responsable' => $this->faker->word,
        'resultado_final' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
