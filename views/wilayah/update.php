<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Wilayah $model */

$this->title = 'Update Wilayah: ' . $model->id_wilayah;
$this->params['breadcrumbs'][] = ['label' => 'Manajemen Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_wilayah, 'url' => ['view', 'id' => $model->id_wilayah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wilayah-update">

    <h1 class="text-2xl font-bold mb-4"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['model' => $model]) ?>

</div>
