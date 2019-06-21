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
            'name' => 'aaa',
            'email'=> 'aaa@aaa.fr',
            'password'=> 'aaa',
            
        ]);
        DB::table('users')->insert([
            'name' => 'bbb',
            'email'=> 'bbb@bbb.fr',
            'password'=> 'bbb',
        ]);
        DB::table('users')->insert([
            'name' => 'ccc',
            'email'=> 'ccc@ccc.fr',
            'password'=> 'ccc',
        ]);
    }
}
