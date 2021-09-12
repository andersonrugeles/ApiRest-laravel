<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserSeed extends Seeder
{

    public function run()
    {
        $users=array(
            [
                'name'=>'Anderson Rujeles',
                'email'=>'anderson.rugeles0606@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>1
            ],
            [
                'name'=>'Martin Antonel',
                'email'=>'martin.anton@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>2
            ],
            [
                'name'=>'Patricio Zuluaga',
                'email'=>'patricio.zu@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>2
            ],
            [
                'name'=>'Ricardo Rodri',
                'email'=>'ricardo.ro@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>2
            ],
            [
                'name'=>'Cesar Camilo',
                'email'=>'cesar.ca@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>2
            ],
            [
                'name'=>'Dago Marin',
                'email'=>'dago.marin@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>2
            ],
            [
                'name'=>'Patrick Marri',
                'email'=>'marri.patrick@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>2
            ],
            [
                'name'=>'Sonia Lopez',
                'email'=>'soni.lo@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>2
            ],
            [
                'name'=>'Karen Guzman',
                'email'=>'karen.gu@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>2
            ],
            [
                'name'=>'Sebas Mocho',
                'email'=>'mocho.sebas@gmail.com',
                'password'=>Hash::make('1234'),
                'state'=>2
            ]
        
        );
    
            foreach($users as $user){
                User::updateOrCreate($user);
            }
    }
}
