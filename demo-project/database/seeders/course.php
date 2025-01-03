<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class course extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('course')->insert([
       'course'=>'Laravel Development',
       'description'=>'This is a test course A'
       ]);

       DB::table('course')->insert([
        'course'=>'Cake PHP Development',
        'description'=>'This is a test course B'
        ]);
    }
}
