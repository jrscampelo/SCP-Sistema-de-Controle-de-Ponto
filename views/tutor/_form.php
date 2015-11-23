<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Tutor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tutor-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'siap')->textInput(['maxlength' => 15]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'nome')->textInput(['maxlength' => 200]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-4"><?= Form::widget([
            'model'=> $model,
            'form'=> $form,
            'columns' => 2,
            'attributes' => [
                'username' => ['type'=>Form::INPUT_TEXT],
                'password' => ['type'=>Form::INPUT_PASSWORD],
            ],
        ]) ?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Cadastrar') : Yii::t('app', 'Atualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
