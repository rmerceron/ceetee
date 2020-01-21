<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_status')->insert([
            'libelle'=>'Envoyée'
        ]);
        DB::table('notification_status')->insert([
            'libelle'=>'Lue'
        ]);
        DB::table('notification_status')->insert([
            'libelle'=>'Ignorée'
        ]);
        DB::table('notification_status')->insert([
            'libelle'=>'Enregistrée'
        ]);
        DB::table('notification_status')->insert([
            'libelle'=>'Validée'
        ]);
        DB::table('notification_status')->insert([
            'libelle'=>'Rejetée'
        ]);
        DB::table('notification_status')->insert([
            'libelle'=>'Annulée'
        ]);
    }
}
