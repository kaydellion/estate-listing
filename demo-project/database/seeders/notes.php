<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class notes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('saved_notes')->insert([
            'note_title'=>'Employment Message',
            'content'=>'making your Laravel projects both powerful and secure.'
            ]);
     
            DB::table('saved_notes')->insert([
             'note_title'=>'Termination Message',
             'content'=>'By the end of this lesson, youll be equipped.'
             ]);
    }
}
