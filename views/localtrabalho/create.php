<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LocalTrabalho */

$this->title = Yii::t('app', 'Cadastrar Local de Trabalho');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Local de Trabalho'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="local-trabalho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
