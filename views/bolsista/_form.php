<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\web\JsExpression;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Bolsista */
/* @var $form yii\widgets\ActiveForm */
$url_tutor = Url::to(['tutor/list']);
$url_tutor = Url::to(['local-trabalho/list']);
?>

<div class="bolsista-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'nome')->textInput(['maxlength' => 50]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'turno')->dropDownList(['Matutino' => 'Matutino', 'Vespertino' => 'Vespertino', 'Noturno'=>'Noturno' ], ['prompt' => ''])?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'matricula')->textInput(['maxlength' => 45]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-4">
        <?= $form->field($model, 'idTutor')->widget(Select2::classname(),[
        'options' => ['placeholder'=>'Selecione o bolsista...'],
        'pluginOptions' => [
            'allowClear' => true,
            'minimumInputLength' => 1,
            'ajax' => [
                'url' => $url_tutor,
                'dataType' => 'json',
                'data' => new JsExpression('function(params) { return {search:params.term};}')
            ],
        ],
        ]) ?></div>
    </div>

    </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Cadastrar') : Yii::t('app', 'Alterar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
