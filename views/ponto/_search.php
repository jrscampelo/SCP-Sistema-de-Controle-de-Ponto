<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PontoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ponto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPonto_Eletronico') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'hora_Chegada') ?>

    <?= $form->field($model, 'tipoFrequencia') ?>

    <?= $form->field($model, 'nome_bolsista') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
