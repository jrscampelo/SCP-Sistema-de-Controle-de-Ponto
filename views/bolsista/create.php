<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bolsista */

$this->title = Yii::t('app', 'Create Bolsista');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bolsistas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolsista-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
