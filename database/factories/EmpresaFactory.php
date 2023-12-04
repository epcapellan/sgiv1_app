<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->company,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber(),
            'telefono2' => $this->faker->phoneNumber(),
            'extension' => $this->faker->fileExtension(),
            'email' => $this->faker->unique()->safeEmail,
            'url' => $this->faker->url,
            'rnc' => $this->faker->unique()->numerify('###'),
            'observacion' => $this->faker->text,
            'fecha_registro' => $this->faker->date,
            'estatus' => $this->faker->randomElement(['Activa', 'Inactivo', 'Supendida']),
            'cambios' => $this->faker->text,
        ];
    }
}
