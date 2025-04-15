<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wilayah */

$this->title = 'View Wilayah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wilayah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p><strong>Provinsi:</strong> <?= Html::encode($model->provinsi) ?></p>
    <p><strong>Kabupaten:</strong> <?= Html::encode($model->kabupaten) ?></p>
    <p><strong>Kecamatan:</strong> <?= Html::encode($model->kecamatan) ?></p>
    <p><strong>Desa:</strong> <?= Html::encode($model->desa) ?></p>
    <p><strong>RW:</strong> <?= Html::encode($model->rw) ?></p>
    <p><strong>RT:</strong> <?= Html::encode($model->rt) ?></p>

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
