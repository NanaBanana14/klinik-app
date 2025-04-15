<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Transaksi Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'kunjungan_id',
            'total',
            'tanggal',
            'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
