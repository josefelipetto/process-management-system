<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatesMap extends Model
{
    public const FILE = 'F';
    public const TEXT = 'T';
    public const DATE = 'D';
    public const INPUT = 'I';
    public const OUTPUT = 'O';

    public const BILL_OF_MATERIAL_BOM = 1;
    public const ESTRUTURA_FUNCIONAL_DO_PRODUTO = 2;
    public const ESPECIFICACOES_PRELIMINARES = 3;
    public const ETAPAS_DO_PROCESSO = 4;
    public const OUTROS_ARQUIVOS = 5;
    public const PLANO_DE_CONTROLE_DE_PROTOTIPO = 6;
    public const HISTORICO_DE_RISCO_DO_FORNECEDOR = 7;
    public const RETORNO_DO_FORNECEDOR = 8;
    public const SOLICITACAO_COM_O_FORNECEDOR = 9;
    public const PRAZO_DE_ENTREGA_DA_SOLICITACAO = 10;
    public const RESPONSAVEL_DA_ENGENHARIA = 11;
    public const RESPONSAVEL_DA_QUALIDADE = 12;
    public const RESPONSAVEL_DA_FÁBRICA = 13;
    public const RELATORIO_DE_RESULTADOS_DO_LOTE_1 = 14;
    public const ATA_DE_REUNIAO_DE_CHECKPOINT = 15;
    public const PLANO_DE_ACOES_DE_CORRECAO = 16;
    public const DOCUMENTOS_ADICIONAIS = 17;
    public const PLANO_DE_CONTROLE_DE_QUALIDADE = 18;
    public const RELATORIO_DE_DESENVOLVIMENTO_DO_FORNECEDOR = 19;
    public const RELATORIO_DE_RESULTADOS_DO_LOTE_2 = 20;
    public const RELATORIO_DOS_RESULTADOS_DE_VERIFICACAO_2 = 21;
    public const CONTRATO_DE_SERVICOS_PRESTADOS = 22;
    public const RELATORIO_DE_QUALIFICACAO_DO_FORNECEDOR = 23;
    public const PLANO_DE_CONTROLE_DE_MANUFATURA = 24;
    public const RELATORIO_DE_RESULTADOS_DO_LOTE_3 = 25;
    public const RELATORIO_DE_RESULTADOS_DE_VALIDACAO = 26;

    protected $fillable = [
        'name',
        'type',
        'is_mandatory'
    ];
}
