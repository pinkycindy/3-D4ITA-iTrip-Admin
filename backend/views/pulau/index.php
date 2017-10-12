<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PulauSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pulau';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pulau-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pulau', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'namaPulau',
            'idPulau',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
