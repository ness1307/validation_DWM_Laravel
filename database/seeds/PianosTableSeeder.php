<?php

use Illuminate\Database\Seeder;

class PianosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianos')->insert([
            'name' => Str::random(10),
            'color'=> 'red',
            'price'=> 599,
            'date'=>2010,
        ]);

        DB::table('pianos')->insert([
            'name' => Str::random(10),
            'color'=> 'blue',
            'price'=> 499,
            'date'=>2000,
        ]);
    }
}
