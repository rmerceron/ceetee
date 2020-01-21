<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(UserTypeSeeder::class);
         $this->call(StateSeeder::class);
         $this->call(PromotionStatusSeeder::class);
         $this->call(PromotionTypeSeeder::class);
         $this->call(NotificationStatusSeeder::class);
         $this->call(GenderSeeder::class);
    }
}
