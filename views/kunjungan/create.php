<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kunjungan $model */

$this->title = 'Tambah Kunjungan';
$this->params['breadcrumbs'][] = ['label' => 'Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kunjungan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
