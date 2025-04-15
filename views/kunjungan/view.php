<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kunjungan */

$this->title = 'Kunjungan #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kunjungan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <table class="table table-striped">
        <tr>
            <th>User</th>
            <td><?= Html::encode($model->user->username) ?></td>
        </tr>
        <tr>
            <th>Dokter</th>
            <td><?= Html::encode($model->dokter->nama) ?></td>
        </tr>
        <tr>
            <th>Wilayah</th>
            <td><?= Html::encode($model->wilayah->desa) ?></td>
        </tr>
        <tr>
            <th>Jenis Kunjungan</th>
            <td><?= Html::encode($model->jenis_kunjungan) ?></td>
        </tr>
        <tr>
            <th>Tanggal Kunjungan</th>
            <td><?= Html::encode($model->tanggal_kunjungan) ?></td>
        </tr>
    </table>

</div>
