<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">
    <p><?= Html::a('Input Barang', ['create'], ['class' => 'btn btn-success']) ?></p>
    <div class="box">
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'code',
                    'name',
                    'stock',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'visibleButtons' => ['view' => false]
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
