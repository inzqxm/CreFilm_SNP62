<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                "type_name" => "Pre-Production",

            ],
            [
                "type_name" => "Production",

            ],
            [
                "type_name" => "Post-Production",

            ],
        ]);
    }
}
