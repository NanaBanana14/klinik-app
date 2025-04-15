<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KunjunganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kunjungan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kunjungan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'user_id',
            'dokter_id',
            'wilayah_id',
            'jenis_kunjungan',
            'tanggal_kunjungan',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
