<?php

use App\Nature;
use Illuminate\Database\Seeder;

class NaturesSeeder extends Seeder
{
    private $natures = [
        'Comprado Padronizado',
        'Manufaturado Interno',
        'Manufaturado Externo'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->natures as $nature) {
            Nature::create([
                'name' => $nature
            ]);
        }
    }
}
