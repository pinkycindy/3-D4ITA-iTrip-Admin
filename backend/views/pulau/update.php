<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pulau */

$this->title = 'Update Pulau';
$this->params['breadcrumbs'][] = ['label' => 'Pulau', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPulau, 'url' => ['view', 'id' => $model->idPulau]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pulau-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
