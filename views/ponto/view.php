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
                'confirm' => Yii::t('app', 'Tem certeza que deseja excluir?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idPonto_Eletronico',
            'data',
            'hora',
            'Estado',
            'tipoFrequencia',
            'idBolsista',
        ],
    ]) ?>

</div>
