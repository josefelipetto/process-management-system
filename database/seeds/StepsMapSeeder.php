<?php

use App\StepsMap;
use Illuminate\Database\Seeder;

class StepsMapSeeder extends Seeder
{
    private $states = [
        [
            'ui_id' => 'especificacoes_preliminares',
            'name'  => 'Especificacões Preliminares',
            'phase' => 'ECR',
        ],
        [
            'ui_id' => "plano_de_controle_de_prototipo",
            'name'  => 'Plano de Controle de Protótipo',
            'phase' => 'ECR',
        ],
        [
            'ui_id' => "analise_do_fornecedor",
            'name'  => 'Análise do Fornecedor',
            'phase' => 'ECR',
        ],
        [
            'ui_id' => "solicitacao_do_lote_1",
            'name'  => 'Solicitação do Lote 1',
            'phase' => 'ECR',
        ],
        [
            'ui_id' => "lote_1",
            'name'  => 'Lote 1',
            'phase' => 'ECR',
        ],
        [
            'ui_id' => 'resultados_aceitaveis_ecr',
            'name'  => 'Resultados aceitáveis?',
            'type'  => 'D',
            'phase' => 'ECR',
        ],
        [
            'ui_id' => 'atualizacoes_e_correcoes_ecr',
            'name'  => 'Atualizações e Correções',
            'phase' => 'ECR',
        ],
        [
            'ui_id' => 'plano_de_controle_de_qualidade',
            'name'  => 'Plano de Controle de Qualidade',
            'phase' => 'EDR',
        ],
        [
            'ui_id' => 'desenvolvimentp_da_ferramenta',
            'name'  => 'Desenvolvimento da Ferramenta',
            'phase' => 'EDR',
        ],
        [
            'ui_id' => 'solicitacao_do_lote_2',
            'name'  => 'Solicitação do Lote 2',
            'phase' => 'EDR',
        ],
        [
            'ui_id' => 'lote_2',
            'name'  => 'Lote 2',
            'phase' => 'EDR',
        ],
        [
            'ui_id' => 'acoes_de_verificacao',
            'name'  => 'Ações de Verificação',
            'phase' => 'EDR',
        ],
        [
            'ui_id' => 'resultados_aceitaveis_edr',
            'name'  => 'Resultados Aceitáveis?',
            'type'  => 'D',
            'phase' => 'EDR',
        ],
        [
            'ui_id' => 'atualizacoes_e_correcoes_edr',
            'name'  => 'Atualizações e Correções',
            'phase' => 'EDR',
        ],
        [
            'ui_id' => 'qualificacao_do_fornecedor',
            'name'  => 'Qualificação do Fornecedor',
            'phase' => 'QER',
        ],
        [
            'ui_id' => 'solicitacao_do_lote_3',
            'name'  => 'Solicitação do Lote 3',
            'phase' => 'QER',
        ],
        [
            'ui_id' => 'plano_de_controle_de_manufatura',
            'name'  => 'Plano de Controle de Manufatura',
            'phase' => 'QER',
        ],
        [
            'ui_id' => 'lote_3',
            'name'  => 'Lote 3',
            'phase' => 'QER',
        ],
        [
            'ui_id' => 'acoes_de_validacao',
            'name'  => 'Ações de Validação',
            'phase' => 'QER',
        ],
        [
            'ui_id' => 'resultados_aceitaveis_qer',
            'name'  => 'Resultados Aceitáveis?',
            'type'  => 'D',
            'phase' => 'QER',
        ],
        [
            'ui_id' => 'atualizacoes_e_correcoes_qer',
            'name'  => 'Atualizações e Correções',
            'phase' => 'QER',
        ],
        [
            'ui_id' => 'item_liberado_para_producao',
            'name'  => 'Item Liberado para Produção',
            'phase' => 'QER',
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->states as $state) {
            StepsMap::create($state);
        }
    }
}
