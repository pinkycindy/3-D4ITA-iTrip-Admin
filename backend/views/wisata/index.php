<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WisataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wisatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wisata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idWisata',
            'provinsi.namaProvinsi',
            'namaWisata',
            //'deskripsiWisata:ntext',
            'kategori',
            'biayaMasuk',
            'lokasiWisata:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
