<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
   public function run()
    {
         $this->call(UserSeed::class);
         $this->call(TipoDocumentoSeeder::class);
         $this->call(ProfesionSeeder::class);
         $this->call(NivelEducativoSeeder::class);
         $this->call(PersonSeeder::class);
    }
}
