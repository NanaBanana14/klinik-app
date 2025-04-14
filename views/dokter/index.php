<?php

use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\search\DokterSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Manajemen Dokter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokter-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Tambah Dokter', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'nama',
        // Menampilkan nama user, bukan hanya user_id
        [
            'attribute' => 'user_id',
            'value' => function ($model) {
                return $model->user ? $model->user->username : 'N/A';  // Menampilkan nama user terkait, atau N/A jika tidak ada
            }
        ],
        'spesialis',
        'no_hp',
        'alamat',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
</div>

