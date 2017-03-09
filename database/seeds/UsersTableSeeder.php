<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Elio',
        	'email' => 'elio.garcia.solis@gmail.com',
        	'username' => 'Admin',
        	'password' => bcrypt('123123'),
        	'role_id' => 1
       	]);
    }
}
