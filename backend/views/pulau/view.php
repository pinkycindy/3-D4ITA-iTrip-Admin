<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pulau */

$this->title = $model->idPulau;
$this->params['breadcrumbs'][] = ['label' => 'Pulaus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pulau-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idPulau], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idPulau], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idPulau',
            'namaPulau',
        ],
    ]) ?>

</div>
