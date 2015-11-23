<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LocalTrabalho */

$this->title = Yii::t('app', 'Create Local Trabalho');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Local Trabalhos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="local-trabalho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
