<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WisataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wisata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idWisata') ?>

    <?= $form->field($model, 'idProvinsi') ?>

    <?= $form->field($model, 'namaWisata') ?>

    <?= $form->field($model, 'deskripsiWisata') ?>

    <?= $form->field($model, 'kategori') ?>

    <?php // echo $form->field($model, 'biayaMasuk') ?>

    <?php // echo $form->field($model, 'lokasiWisata') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
