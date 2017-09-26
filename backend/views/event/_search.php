<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EventSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idEvent') ?>

    <?= $form->field($model, 'idProvinsi') ?>

    <?= $form->field($model, 'namaEvent') ?>

    <?= $form->field($model, 'tglEvent') ?>

    <?= $form->field($model, 'deskripsiEvent') ?>

    <?php // echo $form->field($model, 'lokasiEvent') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
