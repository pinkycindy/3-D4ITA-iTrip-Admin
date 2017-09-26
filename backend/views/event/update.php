<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Event */

$this->title = 'Update Event: ' . $model->idEvent;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEvent, 'url' => ['view', 'id' => $model->idEvent]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
