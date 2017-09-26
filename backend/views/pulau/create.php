<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Pulau */

$this->title = 'Create Pulau';
$this->params['breadcrumbs'][] = ['label' => 'Pulaus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pulau-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
