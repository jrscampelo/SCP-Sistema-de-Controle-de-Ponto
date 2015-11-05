<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PontoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pontos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ponto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Cadastrar Ponto'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPonto_Eletronico',
            'data',
            'hora',
            'Estado',
            'tipoFrequencia',
            // 'idBolsista',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
