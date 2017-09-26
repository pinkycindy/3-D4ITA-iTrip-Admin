<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Wisata */

$this->title = $model->idWisata;
$this->params['breadcrumbs'][] = ['label' => 'Wisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idWisata], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idWisata], [
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
            'idWisata',
            'idProvinsi',
            'namaWisata',
            'deskripsiWisata:ntext',
            'kategori',
            'biayaMasuk',
            'lokasiWisata:ntext',
        ],
    ]) ?>

</div>
