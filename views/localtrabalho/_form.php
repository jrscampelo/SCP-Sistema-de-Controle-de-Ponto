<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LocalTrabalho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="local-trabalho-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row"><div class="col-md-4"><?= $form->field($model, 'nome')->textInput(['maxlength' => 45]) ?></div></div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Cadastrar') : Yii::t('app', 'Alterar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
