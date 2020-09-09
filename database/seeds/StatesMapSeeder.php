<?php

use App\StatesMap;
use Illuminate\Database\Seeder;

class StatesMapSeeder extends Seeder
{

    private $statesMap = [
        [
            'name' => 'Bill Of Material(BOM)',
            'type' => StatesMap::FILE,
            'is_mandatory' => true,
            'should_propagate' => true
        ],
        [
            'name' => 'Estrutura Funcional do Produto',
            'type' => StatesMap::FILE,
            'is_mandatory' => true,
            'should_propagate' => true
        ],
        [
            'name' => 'Especificações Preliminares',
            'type' => StatesMap::FILE,
            'is_mandatory' => true,
            'should_propagate' => true
        ],
        [
            'name' => 'Etapas do Processo',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => false,
        ],
        [
            'name' => 'Outros Arquivos',
            'type' => StatesMap::FILE,
            'is_mandatory' => false,
            'should_propagate' => false
        ],
        [
            'name' => 'Plano de Controle de Protótipo',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Histórico de Risco do Fornecedor',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Retorno do Fornecedor',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => false,
        ],
        [
            'name' => 'Solicitação com o Fornecedor',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Prazo de Entrega da Solicitação',
            'type' => StatesMap::DATE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Responsável da Engenharia',
            'type' => StatesMap::TEXT,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Responsável da Qualidade',
            'type' => StatesMap::TEXT,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Responsável da Fábrica',
            'type' => StatesMap::TEXT,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Relatório de Resultados do Lote 1',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Ata de Reunião de Checkpoint',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Plano de Ações de Correção',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Documentos Adicionais',
            'type' => StatesMap::FILE,
            'should_propagate' => false,
            'is_mandatory' => false,
        ],
        [
            'name' => 'Plano de Controle de Qualidade',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Relatório de Desenvolvimento do Fornecedor',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Relatório de Resultados do Lote 2',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Relatório dos Resultados de Verificação 2',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Contrato de Serviços Prestados',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Relatório de Qualificação do Fornecedor',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Plano de Controle de Manufatura',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Relatório de Resultados do Lote 3',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],
        [
            'name' => 'Relatório de Resultados de Validação',
            'type' => StatesMap::FILE,
            'should_propagate' => true,
            'is_mandatory' => true,
        ],

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->statesMap as $state) {
            StatesMap::create($state);
        }
    }
}
