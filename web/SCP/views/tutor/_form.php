<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tutor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tutor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'siap')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'sobrenome')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'senha')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
