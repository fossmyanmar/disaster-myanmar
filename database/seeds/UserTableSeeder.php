<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ngos')->insert([
        		'name'	=> 'Admin',
        		'email' 	=> 'admin@email.com',
        		'password' 	=> \Hash::make('admin'),
                    'role' => 'admin',
                    'is_approve' => true
        	]);
    }
}
