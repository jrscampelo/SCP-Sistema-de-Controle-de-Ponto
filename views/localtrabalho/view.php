<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LocalTrabalho */

$this->title = $model->idLocal_Trabalho;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Local de Trabalho'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="local-trabalho-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Alterar'), ['update', 'id' => $model->idLocal_Trabalho], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Excluir'), ['delete', 'id' => $model->idLocal_Trabalho], [
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
            //'idLocal_Trabalho',
            'nome',
        ],
    ]) ?>

</div>
