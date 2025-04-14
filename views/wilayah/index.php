<?php

use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Manajemen Wilayah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-index">

    <h1 class="text-2xl font-bold mb-4"><?= Html::encode($this->title) ?></h1>

    <p class="mb-4">
        <?= Html::a('Tambah Wilayah', ['create'], ['class' => 'bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['class' => 'table-auto w-full border'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_wilayah',
            'rt',
            'rw',
            'desa',
            'kecamatan',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Aksi',
                'headerOptions' => ['class' => 'text-center'],
            ],
        ],
    ]); ?>

</div>
