<?php

use App\Rol;
use Illuminate\Database\Seeder;

class rol_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Rol::create([
            'nombre' => "Administrador",
            'descripcion' => "Rol para usuario Admin"
        ]);

        Rol::create([
            'nombre' => "Digitador",
            'descripcion' => "Rol para usuario Digitador"
        ]);
    }
}
