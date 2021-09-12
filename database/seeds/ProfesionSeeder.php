<?php

use Illuminate\Database\Seeder;
use App\Model\Profesion;
class ProfesionSeeder extends Seeder
{

    public function run()
    {
        $profesiones= array(
            ['nombre'=> 'Geología'],
            ['nombre'=> 'Medicina'],
            ['nombre'=> 'Ingeniería de minas'],
            ['nombre'=> 'Ingeniería de Telecomunicaciones'],
            ['nombre'=> 'Ingeniería Informática'],
            ['nombre'=> 'Enfermería'],
            ['nombre'=> 'Ingeniería Administrativa'],
            ['nombre'=> 'Licenciado'],
            ['nombre'=> 'Especialista'],
            ['nombre'=> 'Ingeniería Electrónica']
        );
        foreach ($profesiones as $profesion) {
            Profesion::updateOrCreate($profesion);
        }
    }
}
