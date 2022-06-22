<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rols;

class RolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $rols = new Rols;
      $rols -> name_rol = "usuario";
      $rols ->save();

      $rols2 = new Rols;
      $rols2 -> name_rol = "administrador";
      $rols2 ->save();
    }
}
