<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'Criado'
        ]);

        Status::create([
            'name' => 'Proc. Avaliação'
        ]);

        Status::create([
            'name' => 'Real. Design'
        ]);

        Status::create([
            'name' => 'Liberado'
        ]);
    }
}
