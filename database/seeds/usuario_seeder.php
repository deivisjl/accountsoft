<?php

use App\Rol;
use App\User;
use Illuminate\Database\Seeder;

class usuario_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rol = Rol::all();

        foreach ($rol as $roles){
            $rolId = $roles->id;
            break;
        }

        User::create([
            'nombres' => "admin",
            'apellidos' => "admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('123456'),
            'rolid' => $rolId
        ]);
    }
}
