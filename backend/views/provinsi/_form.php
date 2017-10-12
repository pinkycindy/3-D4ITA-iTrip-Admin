<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Pulau;
use backend\models\PulauSearch;

/* @var $this yii\web\View */
/* @var $model backend\models\Provinsi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="provinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namaProvinsi')->textInput(['maxlength' => true]) ?>

    <?= 
    	$form->field($model, 'idPulau')->dropDownList(
        ArrayHelper::map(Pulau::find()->all(),'idPulau','namaPulau'),
        ['prompt'=>'Pilih Pulau'])

    	

    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
