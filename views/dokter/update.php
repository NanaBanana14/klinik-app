<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dokter $model */

$this->title = 'Ubah Dokter: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Dokter', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="dokter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['model' => $model]) ?>

</div>
