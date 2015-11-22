<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\TimePicker;
use yii\web\JsExpression;
use kartik\widgets\Select2;
use app\models\Bolsista;


/* @var $this yii\web\View */
/* @var $model app\models\Ponto */
/* @var $form yii\widgets\ActiveForm */

//A ação do controlador que renderiza a lista

$url_bolsista = Url::to(['bolsista/list']);


?>

<div class="ponto-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-2"><?= $form->field($model, 'data')->textInput([
        //'name' => 'dp_1',
        //'type' => DatePicker::TYPE_INPUT,
        'value' => date('Y-m-d'),
        'readonly' => "readonly",
        'pluginOptions' => [
            //'autoclose'=>true,
            'format' => 'dd-mm-yyyy',
            //'todayHighlight' => true
        ]])?></div>

        <div class="col-md-2">
            <?= $form->field($model, 'hora_Chegada')->widget(TimePicker::classname(),[
            'name' => 't1',
            'disabled' => false,
            'readonly' => "readonly",
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5,
        ]]) ?></div>

        <div class="col-md-2">
            <?= $form->field($model, 'tipoFrequencia')->dropDownList(['Presente' => 'Presente', 'Ausente' => 'Ausente', 'Atrasado'=>'Atrasado' ], ['prompt' => ''])?></div>
        
        <div class="col-md-2">
        <?= $form->field($model, 'idBolsista')->widget(Select2::classname(),[
        'options' => ['placeholder'=>'Selecione o bolsista...'],
        'pluginOptions' => [
            'allowClear' => true,
            'minimumInputLength' => 1,
            'ajax' => [
                'url' => $url_bolsista,
                'dataType' => 'json',
                'data' => new JsExpression('function(params) { return {search:params.term};}')
            ],
        ],
        ]) ?></div>
    </div>
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Cadastrar') : Yii::t('app', 'Alterar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
