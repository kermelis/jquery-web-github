<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("formations")->insert([
          ["nomFormateur"=>"langage SQL"]
        ])
    }
}
