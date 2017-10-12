<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Provinsi;
use backend\models\ProvinsiSearch;

/* @var $this yii\web\View */
/* @var $model backend\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= 
        $form->field($model, 'idProvinsi')->dropDownList(
        ArrayHelper::map(Provinsi::find()->all(),'idProvinsi','namaProvinsi'),
        ['prompt'=>'Pilih Provinsi'])


    ?>

    <?= $form->field($model, 'namaEvent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglEvent')->textInput(); ?>

    <?= $form->field($model, 'deskripsiEvent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lokasiEvent')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
