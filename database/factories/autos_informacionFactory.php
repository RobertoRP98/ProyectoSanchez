<?php

namespace Database\Factories;

use App\Models\autos_informacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class autos_informacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = autos_informacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_economico' => $this->faker->word,
        'modelo_auto' => $this->faker->word,
        'marca_auto' => $this->faker->word,
        'anio_modelo' => $this->faker->word,
        'tipo_unidad' => $this->faker->word,
        'departamento' => $this->faker->word,
        'ult_mp' => $this->faker->word,
        'ult_hra_km' => $this->faker->randomDigitNotNull,
        'ult_fecha' => $this->faker->word,
        'act_hra_km' => $this->faker->randomDigitNotNull,
        'act_fecha' => $this->faker->word,
        'periocidad' => $this->faker->word,
        'km_prom_mensual' => $this->faker->randomDigitNotNull,
        'prox_mp' => $this->faker->word,
        'prox_hra_km' => $this->faker->randomDigitNotNull,
        'prox_hra_km_faltante' => $this->faker->randomDigitNotNull,
        'prox_dias_faltantes' => $this->faker->randomDigitNotNull,
        'prox_fecha_estim' => $this->faker->word,
        'fecha_recomendada' => $this->faker->word,
        'programar_por_km' => $this->faker->word,
        'programar_por_tiempo' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
