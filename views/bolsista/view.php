<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bolsista */

$this->title = $model->idBolsista;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bolsistas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolsista-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idBolsista], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idBolsista], [
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
            'idBolsista',
            'nome',
            'sobrenome',
            'matricula',
            'senha',
            'login',
            'idTutor',
            'idHorario_Trabalho',
            'idLocal_Trabalho',
        ],
    ]) ?>

</div>
