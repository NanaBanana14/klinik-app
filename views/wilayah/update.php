<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wilayah */

$this->title = 'Update Wilayah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wilayah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
