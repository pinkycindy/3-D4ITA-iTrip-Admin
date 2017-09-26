<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Provinsi */

$this->title = 'Update Provinsi: ' . $model->idProvinsi;
$this->params['breadcrumbs'][] = ['label' => 'Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idProvinsi, 'url' => ['view', 'id' => $model->idProvinsi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provinsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
