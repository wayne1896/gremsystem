
<style>
.scrolling table {
  table-layout: inherit !important;
  *margin-left: -100px !important;
  /*ie7*/
}

.scrolling td,
th {
  vertical-align: top !important;
  padding: 10px !important;
  min-width: 100px !important;
}

.scrolling thead th:first-child,
.scrolling thead tr.filters td:first-child,
.scrolling tbody td:first-child {
  position: absolute !important;
  *position:relative !important;
  /*ie7*/
  left: 0 !important;
  width: 380px !important;
  border-color: #DBDBBE;
  border-top-width: 1px;
  border-bottom-width: 1px;
  border-right-width: 3px;
}

.outer {
  position: relative !important;
}

.inner {
  overflow-x: auto !important;
  overflow-y: visible !important;
  margin-left: 380px !important;
}


</style>

<div class="painel-index">

    <div class="panel panel-default">
    <div class="panel-body">
    <?php
    $contentOptions = ['class' => 'text-center', 'style'=>'width: 3%;text-align:center;vertical-align: middle'];
    $headerOptions  = ['style'=>'width:1px;word-wrap: break-word;white-space:pre-wrap;text-align:center;vertical-align: middle;background-color: #D7DE36;border: 0'];
    ?>

    <div class="scrolling outer" style="font-size:12px;">
  
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'inner'],
        'tableOptions' => ['class' => 'table table-striped table-hover table-bordered'],
        'formatter'     => ['class' => 'yii\i18n\Formatter','nullDisplay' => '<span class="not-set">--</span>'],
        'columns' => [
            [
                'attribute' => 'namecpfcnpj',
                'encodeLabel' => false,
                'format' => 'raw',  
                'label' => 'Nome<br/> Associado',
                'value' => function ($model) {
                    return  Html::a('<b>'.$model->client_nome.'</b>', ['view', 'id' => $model->id]) .
                    Html::a('<i class="fas fa-chart-pie"></i> APN', ['printapn', 'id' => $model->client_num_cpfcnpj], ['target'=>'_blank','class'=>'btn btn-default btn-xs pull-right', 'style'=>'margin-left:2px', 'title' => 'Clique para abrir o APN desse associado']);
                    },
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Pesquise Nome ou CPF/CNPJ',
                    ],
                'contentOptions' => ['style'=>'width: 15%;text-align:left;vertical-align: middle;font-weight: bold;text-transform: uppercase;background-color: #DBDBBE;'],
                'headerOptions'  => ['style'=>'text-align:center;vertical-align: middle;background-color: #D7DE36;'],
            ],
            [
                'attribute' => 'client_num_pa',
                'filter' => ArrayHelper::map(Location::find()->orderBy('num_sisbr')->asArray()->all(), 'num_sisbr', 'shortname'),
                'contentOptions' => $contentOptions,
                'headerOptions'  => $headerOptions,
            ],
            'prod_captacao_remunerada_rdc',
            'prod_captacao_remunerada_lca',
            'prod_poupanca',
            'prod_cartao_credito_ativo',
            'prod_cartao_debito_ativo',
            'prod_cobranca',
            'prod_consorcio_automovel',
            'prod_consorcio_imovel',
            'prod_consorcio_servico',
            'prod_consorcio_moto',
            'prod_pacote_tarifas',
            'prod_emprestimo',
            'prod_financiamento',
            'prod_titulos_descontados',
            'prod_credito_rural',
            'prod_pre_aprovado',
            'prod_cheque_especial',
            'prod_previdencia',
            'prod_seguro_agronegocio_nao_parceira',
            'prod_seguro_agronegocio_parceira',
            'prod_seguro_automovel_nao_parceira',
            'prod_seguro_automovel_parceira',
            'prod_seguro_gerais_nao_parceira',
            'prod_seguro_gerais_parceira',
            'prod_seguro_prestamista',
            'prod_seguro_previ_outras_seg',
            'prod_seguro_previ_sicoob_seg',
            'prod_seguro_res_emp_nao_parceira',
            'prod_seguro_res_emp_parceira',
            'prod_seguro_vida_pfpj_outras_seg',
            'prod_seguro_vida_pfpj_sicoob_seg',
            'prod_debito_automatico',
            'prod_conta_garantida',
        ],
    ]); ?>
    </div>

    </div>
    </div>

</div>