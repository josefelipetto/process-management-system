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
         $this->call(UserSeeder::class);
         $this->call(ProjectsSeeder::class);
         $this->call(StatusesSeeder::class);
         $this->call(ItemsSeeder::class);
         $this->call(StepsMapSeeder::class);
         $this->call(StatesMapSeeder::class);
    }
}
