<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Wilayah $model */

$this->title = 'Detail Wilayah: ' . $model->id_wilayah;
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-view">

    <h1 class="text-2xl font-bold mb-4"><?= Html::encode($this->title) ?></h1>

    <p class="mb-4">
        <?= Html::a('Update', ['update', 'id' => $model->id_wilayah], ['class' => 'bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_wilayah], [
            'class' => 'bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700',
            'data' => [
                'confirm' => 'Yakin ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_wilayah',
            'rt',
            'rw',
            'desa',
            'kecamatan',
        ],
    ]) ?>

</div>
