<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sale */

$this->title = 'Input Penjualan Baru';
$this->params['breadcrumbs'][] = ['label' => 'Penjualan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-create">

    <?= $this->render('_form', [
        'model' => $model,
        'modelDetails' => $modelDetails,
    ]) ?>

</div>
