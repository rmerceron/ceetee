<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotion_types')->insert([
            'libelle'=>'Info'
        ]);
        DB::table('promotion_types')->insert([
            'libelle'=>'Offre'
        ]);
    }
}
