<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'description',
        'checked',
        'step_id'
    ];

    public static array $stepActivitiesMap = [
        StepsMap::ESPECIFICACOES_PRELIMINARES => [
            'Criar documentação técnica, desenho técnico, processo produtivo, ferramentas, equipamentos e matéria prima.',
            'Se necessário, descrever processo produtivo, suas etapas, ferramentas/equipamentos, tempos e materiais utilizados.',
            'Determinar tolerâncias dimensionais e geométricas.',
            'Realizar simulações de CAE para avaliar parâmetros.'
        ],
        StepsMap::PLANO_DE_CONTROLE_DE_PROTOTIPO => [
            'Determinar os tipos de protótipos para os testes: Rapid Prototype, Model ou Physical Prototype.',
            'Selecionar finalidade da avaliação, o material e quantidade de amostras.',
            'Criar plano de controle do protótipo.'
        ],
        StepsMap::ANALISE_DO_FORNECEDOR => [
            'Enviar documentação necessária para avaliação do fornecedor.',
            'Requisitar de RQF',
            'Realizar análise de riscos da empresa.',
            'Fazer análise de DFM do fornecedor.',
            'Incluir análise de localização com aspectos de estoque em trânsito e estoque de segurança.',
            'Verificar do possível histórico de fornecimento.'
        ],
        StepsMap::SOLICITACAO_DO_LOTE_1 => [
            'Definir qual a dimensão do pedido que será solicitado.',
            'Analisar o orçamento imposto pelo fornecedor.',
            'Negociar a data prevista para a entrega da solicitação.',
        ],
        StepsMap::LOTE_1 => [
            'Selecionar os responsáveis de cada área que irão acompanhar o lote.',
            'Analisar os pontos importantes, visando ajustes futuros.',
            'Pontuar características importantes relacionada a avaliação do design do produto.',
            'Elaborar um relatório de resultados.'
        ],
        StepsMap::RESULTADOS_ACEITAVEIS_ECR => [
            'Realizar reunião de debate do fim de etapa.',
            'Analisar todos resultados obtidos até então.',
            'Julgar o prosseguimento ou não do projeto.'
        ],
        StepsMap::ATUALIZACOES_E_CORRECOES_ECR => [
            'Determinar ações necessárias conforme discussão realizada anteriormente.',
            'Criar plano de ações para ser executado.',
            'Definir quais etapas deverão ser retrabalhadas.'
        ],
        StepsMap::PLANO_DE_CONTROLE_DE_QUALIDADE => [
            'Definir as propriedades que devem ser avaliadas.',
            'Estipular cronograma, amostras e executores dos testes.',
            'Utilizar diagrama-P para realizar o controle dos parâmetros.',
            'Determinar os melhores testes para obter os melhores resultados.',
            'Criar diagrama de causa e efeito para encontrar e mapear as principais falhas encontradas. ',
            'Elaborar um plano de controle de qualidade com todas as informações necessárias. '
        ],
        StepsMap::DESENVOLVIMENTO_DA_FERRAMENTA => [
            'Realizar o projeto informacional e preliminar da ferramenta/equipamento.',
            'Criar um cronograma de prazos para entregas e avaliações.',
            'Entrega do projeto detalhado.',
            'Receber relatório de desenvolvimento do fornecedor.'
        ],
        StepsMap::SOLICITACAO_DO_LOTE_2 => [
            'Definir qual a dimensão do pedido que será solicitado.',
            'Analisar o orçamento imposto pelo fornecedor.',
            'Negociar a data prevista para a entrega da solicitação.'
        ],
        StepsMap::LOTE_2 => [
            'Selecionar os responsáveis de cada área que irão acompanhar o lote.',
            'Analisar os pontos importantes, visando ajustes futuros.',
            'Pontuar características importantes relacionada a avaliação do processo do produto.',
            'Elaborar um relatório de resultados.'
        ],
        StepsMap::ACOES_DE_VERIFICACAO => [
            'Organizar o cronograma de testes que devem ser realizados.',
            'Determinar os executores de cada um destes testes selecionados anteriormente.',
            'Utilizar o método de inspeção para verificar o recebimento das amostras.',
            'Utilizar o método de testes para avaliar os pontos necessários estipulados no plano de controle de qualidade.',
            'Analisar os resultados obtidos com as ações.',
            'Criar relatório de verificação dos componentes.'
        ],
        StepsMap::RESULTADOS_ACEITAVEIS_EDR => [
            'Realizar reunião de debate do fim de etapa.',
            'Analisar todos resultados obtidos até então.',
            'Julgar o prosseguimento ou não do projeto.',
        ],
        StepsMap::ATUALIZACOES_E_CORRECOES_EDR => [
            'Determinar ações necessárias conforme discussão realizada anteriormente.',
            'Criar plano de ações para ser executado.',
            'Definir quais etapas deverão ser retrabalhadas.'
        ],
        StepsMap::QUALIFICACAO_DO_FORNECEDOR => [
            'Finalizar o contrato que será estabelecido com o fornecedor.',
            'Realizar uma avaliação completa da empresa em questão conforme parâmetros tradicionalmente estabelecidos.',
            'Atualizar, caso preciso, o histórico do fornecedor para consultas futuras.',
        ],
        StepsMap::PLANO_DE_CONTROLE_DE_MANUFATURA => [
            'Determinar testes e critérios de análises para serem validados.',
            'Estipular cronograma destas atividades.',
            'Se necessário, compor uma Bill of Manufacture (BOMfr).',
            'Criar um plano de controle de manufatura para o item em questão.'
        ],
        StepsMap::SOLICITACAO_DO_LOTE_3 => [
            'Definir qual a dimensão do pedido que será solicitado.',
            'Analisar o orçamento imposto pelo fornecedor.',
            'Negociar a data prevista para a entrega da solicitação.'
        ],
        StepsMap::LOTE_3 => [
            'Selecionar os responsáveis de cada área que irão acompanhar o lote.',
            'Analisar os pontos importantes, visando ajustes futuros.',
            'Pontuar características importantes relacionada a validação do processo e do produto na linha de produção.',
            'Elaborar um relatório de resultados.'
        ],
        StepsMap::ACOES_DE_VALIDACAO => [
            'Organizar o cronograma de testes que devem ser realizados.',
            'Determinar os executores de cada um destes testes selecionados anteriormente.',
            'Utilizar o método de análise por meio de softwares de CAM e Lean Simulation.',
            'Selecionar testes de validação: Teste de uso, Teste de vida, Teste de ambiente, Teste de fiabilidade e Teste de embalagem.',
            'Analisar os resultados obtidos com as ações.',
            'Criar relatório de validação dos componentes.'
        ],
        StepsMap::RESULTADOS_ACEITAVEIS_QER => [
            'Realizar reunião de debate do fim de etapa.',
            'Analisar todos resultados obtidos até então.',
            'Julgar a finalização e liberação do item para produção.'
        ],
        StepsMap::ATUALIZACOES_E_CORRECOES_QER => [
            'Determinar ações necessárias conforme discussão realizada anteriormente.',
            'Criar plano de ações para ser executado.',
            'Definir quais etapas deverão ser retrabalhadas.'
        ]
    ];
}
