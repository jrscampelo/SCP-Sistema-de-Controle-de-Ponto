<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LocalTrabalho */

$this->title = Yii::t('app', 'Alterar {modelClass}: ', [
    'modelClass' => 'Local Trabalho',
]) . ' ' . $model->idLocal_Trabalho;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Local de Trabalho'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLocal_Trabalho, 'url' => ['view', 'id' => $model->idLocal_Trabalho]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Alterar');
?>
<div class="local-trabalho-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
