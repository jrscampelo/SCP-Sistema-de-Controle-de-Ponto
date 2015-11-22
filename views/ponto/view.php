<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ponto */

$this->title = $model->idPonto_Eletronico;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pontos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ponto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Alterar'), ['update', 'id' => $model->idPonto_Eletronico], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Excluir'), ['delete', 'id' => $model->idPonto_Eletronico], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idPonto_Eletronico',
            'data',
            'hora_Chegada',
            //'hora_saida',
            'tipoFrequencia',
            'idBolsista',
        ],
    ]) ?>

</div>
