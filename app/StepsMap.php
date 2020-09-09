<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class StepsMap
 * @package App
 */
class StepsMap extends Model
{
    public const ACOES_DE_VALIDACAO = 19;
    public const ACOES_DE_VERIFICACAO = 12;
    public const ANALISE_DO_FORNECEDOR = 3;
    public const ATUALIZACOES_E_CORRECOES_ECR = 7;
    public const ATUALIZACOES_E_CORRECOES_EDR = 14;
    public const ATUALIZACOES_E_CORRECOES_QER = 21;
    public const DESENVOLVIMENTO_DA_FERRAMENTA = 9;
    public const ESPECIFICACOES_PRELIMINARES = 1;
    public const ITEM_LIBERADO_PARA_PRODUCAO = 22;
    public const LOTE_1 = 5;
    public const LOTE_2 = 11;
    public const LOTE_3 = 18;
    public const PLANO_DE_CONTROLE_DE_MANUFATURA = 17;
    public const PLANO_DE_CONTROLE_DE_PROTOTIPO = 2;
    public const PLANO_DE_CONTROLE_DE_QUALIDADE = 8;
    public const QUALIFICACAO_DO_FORNECEDOR = 15;
    public const RESULTADOS_ACEITAVEIS_ECR = 6;
    public const RESULTADOS_ACEITAVEIS_EDR = 13;
    public const RESULTADOS_ACEITAVEIS_QER = 20;
    public const SOLICITACAO_DO_LOTE_1 = 4;
    public const SOLICITACAO_DO_LOTE_2 = 10;
    public const SOLICITACAO_DO_LOTE_3 = 16;


    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'ui_id',
        'type',
        'phase'
    ];

    /**
     * @return HasMany
     */
    public function mappedStates(): HasMany
    {
        return $this->hasMany(StepStatesMap::class, 'step_id');
    }
}
