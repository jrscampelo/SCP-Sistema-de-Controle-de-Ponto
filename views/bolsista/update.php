<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bolsista */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Bolsista',
]) . ' ' . $model->idBolsista;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bolsistas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idBolsista, 'url' => ['view', 'id' => $model->idBolsista]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bolsista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
