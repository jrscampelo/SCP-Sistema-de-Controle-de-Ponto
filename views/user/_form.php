<?php

use yii\helpers\Html;
//Modificado para o ActiveForm utilizar os recursos do Kartik
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Form::widget([
        'model'=> $model,
        'form'=> $form,
        'columns' => 2,
        'attributes' => [
            'username' => ['type'=>Form::INPUT_TEXT],
            'password' => ['type'=>Form::INPUT_PASSWORD],
        ],
    ]) ?>

    <?= Form::widget([
        'model'=> $model,
        'form'=> $form,
        'columns' => 4,
        'attributes' => [
            'tipo' => ['type'=>Form::INPUT_DROPDOWN_LIST, 'items'=>['Médico' => 'Médico', 'Atendente' => 'Atendente']],
            'crm' => ['type'=>Form::INPUT_TEXT],
            'telefone' => [
                'type'=>Form::INPUT_WIDGET,
                'fieldConfig'=>[
                    'addon'=>[
                        'prepend'=>['content'=>'<i class="glyphicon glyphicon-phone"></i>']
                    ],
                ], 
                'widgetClass'=>MaskedInput::classname(), 
                'options' => ['mask'=>['(99) 9999-9999']]],
            'email' => ['type'=>Form::INPUT_TEXT, 'fieldConfig'=>['addon'=>['prepend'=>['content'=>'@']]]],
        ],
    ]) ?>

    <?= Form::widget([
        'model'=> $model,
        'form'=> $form,
        'columns' => 2,
        'attributes' => [
            'nome' => ['type'=>Form::INPUT_TEXT],
            'site' => ['type'=>Form::INPUT_TEXT],
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
