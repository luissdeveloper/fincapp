<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Luis Sanchez',
            'username' => 'luissdev',
            'email' => 'luissdev@gmail.com',
            'password' => bcrypt('316416913'),
            'admin' => true,
            'address'=> 'Direccion 1',
            'phone'=>'350'
        ]);
        User::create([
            'name' => 'Oscar Corzo',
            'username' => 'oscarcorzo',
            'email' => 'caop@gmail.com',
            'password' => bcrypt('316416913'),
            'admin' => false,
            'address'=> 'Direccion 1',
            'phone'=>'350'
        ]);
    }
}
