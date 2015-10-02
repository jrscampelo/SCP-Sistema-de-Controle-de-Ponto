<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tutor */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tutor',
]) . ' ' . $model->idTutor;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tutors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTutor, 'url' => ['view', 'id' => $model->idTutor]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tutor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
