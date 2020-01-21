<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'libelle'=>'Administrateur',
            'icon'=>'/public/image/icon/admin.png'
        ]);
        DB::table('user_types')->insert([
            'libelle'=>'Commerçant',
            'icon'=>'/public/image/icon/trader.png'
        ]);
        DB::table('user_types')->insert([
            'libelle'=>'Basique',
            'icon'=>'/public/image/icon/basic.png'
        ]);
    }
}
