<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BolsistaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bolsistas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolsista-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Cadastrar Bolsista'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idBolsista',
            'nome',
            'turno',
            'matricula',
            // 'horas_trabalhadas',
            // 'idTutor',
            // 'idLocal_Trabalho',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
