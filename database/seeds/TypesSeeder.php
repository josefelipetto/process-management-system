<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    private $types = [
        'Elétrico',
        'Embalagem',
        'Documento',
        'Metálico',
        'Não-Metálico',
        'Ceramico',
        'Polimérico',
        'Compósito'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->types as $type) {
            Type::create([
                'name' => $type
            ]);
        }
    }
}
