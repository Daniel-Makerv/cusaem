<?php

namespace Database\Factories;
use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usu' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'pregunta_uno' => $this->faker->randomElement(["si","no"]),
            'pregunta_dos' => $this->faker->randomElement(["si","no"]),
            'pregunta_tres' => $this->faker->randomElement(["si","no"]),
            'pregunta_cuatro' => $this->faker->randomElement(["si","no"]),
            'pregunta_cinco' => $this->faker->randomElement(["si","no"]),
            'pregunta_seis' => $this->faker->randomElement(["si","no"]),
            'pregunta_siete' => $this->faker->randomElement(["si","no"]),
            'pregunta_ocho' => $this->faker->randomElement(["si","no"]),
            'pregunta_nueve' => $this->faker->randomElement(["si","no"]),
            'pregunta_diez' => $this->faker->randomElement(["si","no"]),
            'pregunta_once' => $this->faker->randomElement(["si","no"]),
            'pregunta_doce' => $this->faker->randomElement(["si","no"]),
            'pregunta_trece' => $this->faker->randomElement(["si","no"]),
            'pregunta_catorce' => $this->faker->randomElement(["si","no"]),
            'pregunta_quince' => $this->faker->randomElement(["si","no"]),
            'pregunta_dieciseis' => $this->faker->randomElement(["si","no"]),
            'pregunta_diecisiete' => $this->faker->randomElement(["si","no"]),
            'pregunta_dieciocho' => $this->faker->randomElement(["si","no"]),
            'pregunta_diecinueve' => $this->faker->randomElement(["si","no"]),
            'pregunta_veinte' => $this->faker->randomElement(["si","no"]),
            'pregunta_veintiuno' => $this->faker->randomElement(["si","no"]),
            'pregunta_veintidos' => $this->faker->randomElement(["si","no"]),
            'pregunta_veintitres' => $this->faker->randomElement(["si","no"]),
            'pregunta_veinticuatro' => $this->faker->randomElement(["si","no"]),
            'pregunta_veinticinco' => $this->faker->randomElement(["si","no"]),
            'pregunta_veintiseis' => $this->faker->randomElement(["si","no"]),
            'pregunta_veintisiete' => $this->faker->randomElement(["si","no"]),
            'pregunta_veintiocho' => $this->faker->randomElement(["si","no"]),
            'pregunta_veintinueve' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta_y_uno' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta_y_dos' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta_y_tres' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta_y_cuatro' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta_y_cinco' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta_y_seis' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta_y_siete' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta_y_ocho' => $this->faker->randomElement(["si","no"]),
            'pregunta_treinta_y_nueve' => $this->faker->randomElement(["si","no"]),
            'pregunta_cuarenta' => $this->faker->randomElement(["si","no"]),
            'remember_token' => Str::random(10),
        ];
    }
}
