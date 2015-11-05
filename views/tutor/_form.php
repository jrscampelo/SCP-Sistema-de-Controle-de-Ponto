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

    <?= $form->field($model, 'siap')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => 200]) ?>

    <?= Form::widget([
        'model'=> $model,
        'form'=> $form,
        'columns' => 2,
        'attributes' => [
            'username' => ['type'=>Form::INPUT_TEXT],
            'password' => ['type'=>Form::INPUT_PASSWORD],
        ],
    ]) ?>

    <?= $form->field($model, 'idLocal_Trabalho_Tutor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
