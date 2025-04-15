<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Wilayah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wilayah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'desa')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'rw')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'rt')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
