<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Obat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
