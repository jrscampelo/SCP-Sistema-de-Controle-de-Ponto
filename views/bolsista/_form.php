<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bolsista */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bolsista-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sobrenome')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'senha')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'idTutor')->textInput() ?>

    <?= $form->field($model, 'idHorario_Trabalho')->textInput() ?>

    <?= $form->field($model, 'idLocal_Trabalho')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
