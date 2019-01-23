<?php

use App\User;
use Illuminate\Database\Seeder;


class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'role_id' 		 => 1,
        	'is_active'		 => 1,
        	'firstname'		 => 'Neil',
        	'middlename'     => 'Galang',
            'lastname'       => 'Bantatua',
            'address'        => '500 Purok 5 Marinig Cabuyao Laguna',
            'username'       => 'neilpot',
            'password'       => Hash::make('asdasdasd'),
            'remember_token' => str_random(20),
       ]);
    }
}
