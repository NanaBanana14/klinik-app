<?php

use yii\helpers\Html;

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <strong>Nama:</strong> <?= Html::encode($model->nama) ?><br>
        <strong>Jabatan:</strong> <?= Html::encode($model->jabatan) ?><br>
        <strong>Alamat:</strong> <?= Html::encode($model->alamat) ?><br>
        <strong>Created At:</strong> <?= Html::encode($model->created_at) ?><br>
        <strong>Updated At:</strong> <?= Html::encode($model->updated_at) ?><br>
    </p>

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

</div>
