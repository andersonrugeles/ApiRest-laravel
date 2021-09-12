<?php

use Illuminate\Database\Seeder;
use App\Model\TipoDocumento;
class TipoDocumentoSeeder extends Seeder
{
    public function run()
    {
        $tipo_documento= array(
            ['tipo'=>'CC'],
            ['tipo'=>'CE'],
            ['tipo'=>'TI'],
            ['tipo'=>'RC'],
            ['tipo'=>'PA'],
            ['tipo'=>'TE'],
            ['tipo'=>'NN'],
            ['tipo'=>'PE'],
            ['tipo'=>'RM'],
            ['tipo'=>'Tramite']
        );
        foreach ($tipo_documento as $tipo) {
            TipoDocumento::updateOrCreate($tipo);
        }
    }
}
