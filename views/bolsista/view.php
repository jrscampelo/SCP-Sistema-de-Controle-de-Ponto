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
        <?= Html::a(Yii::t('app', 'Alterar'), ['update', 'id' => $model->idBolsista], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Excluir'), ['delete', 'id' => $model->idBolsista], [
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
            //'idBolsista',
            'nome',
            'turno',
            'matricula',
            //'horas_trabalhadas',
            //'idTutor',
            //'idLocal_Trabalho',
        ],
    ]) ?>

</div>
