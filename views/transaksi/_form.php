<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kunjungan;

$kunjunganList = ArrayHelper::map(
    Kunjungan::find()->all(),
    'id',
    function($model) {
        return 'Kunjungan #' . $model->id . ' - ' . Yii::$app->formatter->asDate($model->tanggal_kunjungan, 'php:d-m-Y');
    }
);
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kunjungan_id')->dropDownList(
        $kunjunganList,
        ['prompt' => '-- Pilih Kunjungan --']
    ) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'tanggal')->input('datetime-local') ?>

    <?= $form->field($model, 'status')->dropDownList([
        'pending' => 'Pending',
        'completed' => 'Completed',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', [
            'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
