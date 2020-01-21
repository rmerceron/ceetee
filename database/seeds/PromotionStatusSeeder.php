<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotion_status')->insert([
            'libelle'=>'En attente'
        ]);
        DB::table('promotion_status')->insert([
            'libelle'=>'Programmée'
        ]);
        DB::table('promotion_status')->insert([
            'libelle'=>'Envoyée'
        ]);
        DB::table('promotion_status')->insert([
            'libelle'=>'Annulée'
        ]);
    }
}
