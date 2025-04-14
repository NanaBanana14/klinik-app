<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>

<div class="mb-4">
    <?= $form->field($model, 'rt')->textInput(['maxlength' => true, 'class' => 'form-input mt-1 block w-full']) ?>
</div>

<div class="mb-4">
    <?= $form->field($model, 'rw')->textInput(['maxlength' => true, 'class' => 'form-input mt-1 block w-full']) ?>
</div>

<div class="mb-4">
    <?= $form->field($model, 'desa')->textInput(['maxlength' => true, 'class' => 'form-input mt-1 block w-full']) ?>
</div>

<div class="mb-4">
    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true, 'class' => 'form-input mt-1 block w-full']) ?>
</div>

<div class="form-group">
    <?= Html::submitButton('Simpan', ['class' => 'bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700']) ?>
</div>

<?php ActiveForm::end(); ?>
