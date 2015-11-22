<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bolsista */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bolsista-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'nome')->textInput(['maxlength' => 50]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'turno')->textInput(['maxlength' => 45]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'matricula')->textInput(['maxlength' => 45]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'idTutor')->textInput() ?></div>
    </div>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'idLocal_Trabalho')->textInput() ?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Cadastrar') : Yii::t('app', 'Alterar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
