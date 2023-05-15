<?php

namespace Database\Factories;

use App\Models\historico_auto_info;
use Illuminate\Database\Eloquent\Factories\Factory;

class historico_auto_infoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = historico_auto_info::class;

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
        'id_autos_info' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
