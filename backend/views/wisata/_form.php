<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Provinsi;
use backend\models\ProvinsiSearch;


/* @var $this yii\web\View */
/* @var $model backend\models\Wisata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wisata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= 
        $form->field($model, 'idProvinsi')->dropDownList(
        ArrayHelper::map(Provinsi::find()->all(),'idProvinsi','namaProvinsi'),
        ['prompt'=>'Pilih Provinsi'])

        

    ?>

    <?= $form->field($model, 'namaWisata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsiWisata')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kategori')->dropDownList(
        array(
            "0"=>"Pilih Kategori",
            "alam"=>"Alam",
            "modern"=>"Modern",
            "budaya"=>"Budaya",
            "kuliner"=>"kuliner")); ?>

    <?= $form->field($model, 'biayaMasuk')->textInput() ?>

    <?= $form->field($model, 'lokasiWisata')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
