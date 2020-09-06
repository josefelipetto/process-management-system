<?php

use App\StatesMap;
use App\StepsMap;
use Illuminate\Database\Seeder;

/**
 * Class StepsStatesMapSeeder
 */
class StepsStatesMapSeeder extends Seeder
{

    /**
     * @var array[]
     * format: [
     *     step_id => [
     *          [
     *              state_id,
     *              type(Input or Output)
     *          ], ...
     *     ]
     * ]
     */
    private $map = [
        StepsMap::ESPECIFICACOES_PRELIMINARES => [
            [
                'state_id' => StatesMap::BILL_OF_MATERIAL_BOM,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::ESTRUTURA_FUNCIONAL_DO_PRODUTO,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::ESPECIFICACOES_PRELIMINARES,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::ETAPAS_DO_PROCESSO,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::OUTROS_ARQUIVOS,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::PLANO_DE_CONTROLE_DE_PROTOTIPO => [
            [
                'state_id' => StatesMap::BILL_OF_MATERIAL_BOM,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::ETAPAS_DO_PROCESSO,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::ESPECIFICACOES_PRELIMINARES,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::PLANO_DE_CONTROLE_DE_PROTOTIPO,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::ANALISE_DO_FORNECEDOR => [
            [
                'state_id' => StatesMap::ETAPAS_DO_PROCESSO,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::ESPECIFICACOES_PRELIMINARES,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::HISTORICO_DE_RISCO_DO_FORNECEDOR,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RETORNO_DO_FORNECEDOR,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::SOLICITACAO_DO_LOTE_1 => [
            [
                'state_id' => StatesMap::PLANO_DE_CONTROLE_DE_PROTOTIPO,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::SOLICITACAO_COM_O_FORNECEDOR,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::PRAZO_DE_ENTREGA_DA_SOLICITACAO,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::LOTE_1 => [
            [
                'state_id' => StatesMap::PRAZO_DE_ENTREGA_DA_SOLICITACAO,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RESPONSAVEL_DA_ENGENHARIA,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RESPONSAVEL_DA_QUALIDADE,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RESPONSAVEL_DA_FÁBRICA,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_1,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::RESULTADOS_ACEITAVEIS_ECR => [
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_1,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::ATA_DE_REUNIAO_DE_CHECKPOINT,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::ATUALIZACOES_E_CORRECOES_ECR => [
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_1,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::PLANO_DE_ACOES_DE_CORRECAO,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::DOCUMENTOS_ADICIONAIS,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::PLANO_DE_CONTROLE_DE_QUALIDADE => [
            [
                'state_id' => StatesMap::ESPECIFICACOES_PRELIMINARES,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_1,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::PLANO_DE_CONTROLE_DE_QUALIDADE,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::DESENVOLVIMENTO_DA_FERRAMENTA => [
            [
                'state_id' => StatesMap::ESPECIFICACOES_PRELIMINARES,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_1,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_DESENVOLVIMENTO_DO_FORNECEDOR,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::SOLICITACAO_DO_LOTE_2 => [
            [
                'state_id' => StatesMap::PLANO_DE_CONTROLE_DE_QUALIDADE,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::SOLICITACAO_COM_O_FORNECEDOR,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::PRAZO_DE_ENTREGA_DA_SOLICITACAO,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::LOTE_2 => [
            [
                'state_id' => StatesMap::PRAZO_DE_ENTREGA_DA_SOLICITACAO,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RESPONSAVEL_DA_ENGENHARIA,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RESPONSAVEL_DA_QUALIDADE,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RESPONSAVEL_DA_FÁBRICA,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_2,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::ACOES_DE_VERIFICACAO => [
            [
                'state_id' => StatesMap::PLANO_DE_CONTROLE_DE_QUALIDADE,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_2,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DOS_RESULTADOS_DE_VERIFICACAO_2,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::RESULTADOS_ACEITAVEIS_EDR => [
            [
                'state_id' => StatesMap::RELATORIO_DOS_RESULTADOS_DE_VERIFICACAO_2,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_2,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::ATA_DE_REUNIAO_DE_CHECKPOINT,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::ATUALIZACOES_E_CORRECOES_EDR => [
            [
                'state_id' => StatesMap::RELATORIO_DOS_RESULTADOS_DE_VERIFICACAO_2,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_2,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::PLANO_DE_ACOES_DE_CORRECAO,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::DOCUMENTOS_ADICIONAIS,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::QUALIFICACAO_DO_FORNECEDOR => [
            [
                'state_id' => StatesMap::HISTORICO_DE_RISCO_DO_FORNECEDOR,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_DESENVOLVIMENTO_DO_FORNECEDOR,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::CONTRATO_DE_SERVICOS_PRESTADOS,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_QUALIFICACAO_DO_FORNECEDOR,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::PLANO_DE_CONTROLE_DE_MANUFATURA => [
            [
                'state_id' => StatesMap::ESPECIFICACOES_PRELIMINARES,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_2,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DOS_RESULTADOS_DE_VERIFICACAO_2,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::PLANO_DE_CONTROLE_DE_MANUFATURA,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::SOLICITACAO_DO_LOTE_3 => [
            [
                'state_id' => StatesMap::PLANO_DE_CONTROLE_DE_MANUFATURA,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::SOLICITACAO_COM_O_FORNECEDOR,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::PRAZO_DE_ENTREGA_DA_SOLICITACAO,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::LOTE_3 => [
            [
                'state_id' => StatesMap::PRAZO_DE_ENTREGA_DA_SOLICITACAO,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RESPONSAVEL_DA_ENGENHARIA,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RESPONSAVEL_DA_QUALIDADE,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RESPONSAVEL_DA_FÁBRICA,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_3,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::ACOES_DE_VALIDACAO => [
            [
                'state_id' => StatesMap::PLANO_DE_CONTROLE_DE_MANUFATURA,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_3,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DE_VALIDACAO,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::RESULTADOS_ACEITAVEIS_QER => [
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DE_VALIDACAO,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_3,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::ATA_DE_REUNIAO_DE_CHECKPOINT,
                'type' => StatesMap::OUTPUT
            ],
        ],
        StepsMap::ATUALIZACOES_E_CORRECOES_QER => [
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DE_VALIDACAO,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::RELATORIO_DE_RESULTADOS_DO_LOTE_3,
                'type' => StatesMap::INPUT
            ],
            [
                'state_id' => StatesMap::PLANO_DE_ACOES_DE_CORRECAO,
                'type' => StatesMap::OUTPUT
            ],
            [
                'state_id' => StatesMap::DOCUMENTOS_ADICIONAIS,
                'type' => StatesMap::OUTPUT
            ],
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
