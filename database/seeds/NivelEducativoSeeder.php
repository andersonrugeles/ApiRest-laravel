<?php

use Illuminate\Database\Seeder;
use App\Model\NivelEducativo;
class NivelEducativoSeeder extends Seeder
{

    public function run()
    {
        $nivel_educativo= array(
            ['nivel'=> 'Escolar'],
            ['nivel'=> 'Bachiller'],
            ['nivel'=> 'Profesional'],
            ['nivel'=> 'Maestria'],
            ['nivel'=> 'Diplomado'],
            ['nivel'=> 'Magister'],
            ['nivel'=> 'Docente'],
            ['nivel'=> 'Licenciado'],
            ['nivel'=> 'Especialista'],
            ['nivel'=> 'Primaria']
        );
        foreach ($nivel_educativo as $nivel) {
            NivelEducativo::updateOrCreate($nivel);
        }
    }
}
