<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BolsistaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bolsista-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idBolsista') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'sobrenome') ?>

    <?= $form->field($model, 'matricula') ?>

    <?= $form->field($model, 'senha') ?>

    <?php // echo $form->field($model, 'login') ?>

    <?php // echo $form->field($model, 'idTutor') ?>

    <?php // echo $form->field($model, 'idHorario_Trabalho') ?>

    <?php // echo $form->field($model, 'idLocal_Trabalho') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
