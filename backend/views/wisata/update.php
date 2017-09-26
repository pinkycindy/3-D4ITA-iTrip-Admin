<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Wisata */

$this->title = 'Update Wisata: ' . $model->idWisata;
$this->params['breadcrumbs'][] = ['label' => 'Wisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idWisata, 'url' => ['view', 'id' => $model->idWisata]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wisata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
