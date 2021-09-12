<?php

use Illuminate\Database\Seeder;
use App\Model\Person;
class PersonSeeder extends Seeder
{

    public function run()
    {
        $persons= array(
            [
                'tipo_documento_id'=>1,
                'identificacion'=>564654,
                'nombres'=> 'Mauro Esteban',
                'apellidos'=>'Cuellar',
                'direccion'=>'Calle 4 nro 4-30',
                'telefono'=>568458,
                'email'=>'mauro.esteban@gmail.com',
                'nivel_educativo_id'=>1,
                'profesion_id'=>1,
                'estado'=>1
            ],
            [   
                'tipo_documento_id'=>2,
                'identificacion'=>45465568,
                'nombres'=> 'Camilo',
                'apellidos'=>'Marin',
                'direccion'=>'Calle 7 nro 4-30',
                'telefono'=>88575745,
                'email'=>'camilo.marin@gmail.com',
                'nivel_educativo_id'=>2,
                'profesion_id'=>2,
                'estado'=>1
            ],
            [   
                'tipo_documento_id'=>3,
                'identificacion'=>74123545,
                'nombres'=> 'Rodrigo Lok',
                'apellidos'=>'Sobrio',
                'direccion'=>'Calle 10 nro 4-30',
                'telefono'=>12467968,
                'email'=>'rodrigo.lok@gmail.com',
                'nivel_educativo_id'=>3,
                'profesion_id'=>3,
                'estado'=>1
            ],
            [   
                'tipo_documento_id'=>4,
                'identificacion'=>2334795,
                'nombres'=> 'Sebastian',
                'apellidos'=>'Rodriguez',
                'direccion'=>'Calle 49 nro 4-30',
                'telefono'=>4566841,
                'email'=>'sebastian.rodri@gmail.com',
                'nivel_educativo_id'=>4,
                'profesion_id'=>4,
                'estado'=>1
            ],
            [   
                'tipo_documento_id'=>5,
                'identificacion'=>87646123,
                'nombres'=> 'Anderson',
                'apellidos'=>'Rujes',
                'direccion'=>'Calle 17 nro 4-30',
                'telefono'=>568458,
                'email'=>'anderson.rujeles@gmail.com',
                'nivel_educativo_id'=>5,
                'profesion_id'=>5,
                'estado'=>1
            ],
            [   
                'tipo_documento_id'=>6,
                'identificacion'=>94613135,
                'nombres'=> 'Brayan',
                'apellidos'=>'Silva',
                'direccion'=>'Calle 756 nro 4-30',
                'telefono'=>4576894,
                'email'=>'brayan.silva@gmail.com',
                'nivel_educativo_id'=>6,
                'profesion_id'=>6,
                'estado'=>1
            ],
            [   
                'tipo_documento_id'=>7,
                'identificacion'=>798633425,
                'nombres'=> 'Edwin',
                'apellidos'=>'Farias',
                'direccion'=>'Carrera 11 nro 4-30',
                'telefono'=>77454565,
                'email'=>'edwin.farias@gmail.com',
                'nivel_educativo_id'=>7,
                'profesion_id'=>7,
                'estado'=>1
            ],
            [   
                'tipo_documento_id'=>8,
                'identificacion'=>2437864,
                'nombres'=> 'Camilo',
                'apellidos'=>'Franco',
                'direccion'=>'Calle 88 nro 4-30',
                'telefono'=>36998752,
                'email'=>'camilo.franco@gmail.com',
                'nivel_educativo_id'=>8,
                'profesion_id'=>8,
                'estado'=>1
            ],
            [   
                'tipo_documento_id'=>9,
                'identificacion'=>2437864,
                'nombres'=> 'Lina',
                'apellidos'=>'Beltran',
                'direccion'=>'Carrera 88 nro 4-30',
                'telefono'=>87646345,
                'email'=>'lina.beltran@gmail.com',
                'nivel_educativo_id'=>9,
                'profesion_id'=>9,
                'estado'=>1
            ],
            [   
                'tipo_documento_id'=>10,
                'identificacion'=>1231564,
                'nombres'=> 'Sofia',
                'apellidos'=>'Pastrana',
                'direccion'=>'Calle 2 nro 4-30',
                'telefono'=>14578952,
                'email'=>'sofia.pastrana@gmail.com',
                'nivel_educativo_id'=>10,
                'profesion_id'=>10,
                'estado'=>1
            ]
    
            );
            foreach ($persons as $person) {
                Person::updateOrCreate($person);
            }
    }
}
