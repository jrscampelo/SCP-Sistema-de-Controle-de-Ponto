<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Ponto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ponto-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-2"><?= $form->field($model, 'data')->widget(DatePicker::classname(),[
        'name' => 'dp_1',
        'type' => DatePicker::TYPE_INPUT,
        'value' => '',
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'dd/mm/yyyy',
            'todayHighlight' => true
        ]])?></div>
        <div class="col-md-2"><?= $form->field($model, 'hora')->widget(TimePicker::classname(),[
            'name' => 't1',
            'disabled' => false,
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5,
        ]]) ?></div>
        <div class="col-md-2"><?= $form->field($model, 'Estado')->dropDownList(['Chegada' => 'Chegada', 'Saída' => 'Saída' ], ['prompt' => ''])?></div>
        <div class="col-md-2"><?= $form->field($model, 'tipoFrequencia')->dropDownList(['Presente' => 'Presente', 'Ausente' => 'Ausente', 'Atrasado'=>'Atrasado' ], ['prompt' => ''])?></div>
        <div class="col-md-2"> <?= $form->field($model, 'idBolsista')->textInput() ?></div>
    </div>
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Cadastrar') : Yii::t('app', 'Alterar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
