<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\User;
use app\models\Dokter;
use app\models\Wilayah;

?>

<div class="kunjungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList(
        ArrayHelper::map(
            User::find()->all(),
            'id',
            fn($user) => $user->username . " (ID: $user->id)"
        ),
        ['prompt' => 'Pilih Pengguna']
    ) ?>

    <?= $form->field($model, 'dokter_id')->dropDownList(
        ArrayHelper::map(
            Dokter::find()->all(),
            'id',
            function($dokter) {
                return $dokter->nama . ' - ' . $dokter->spesialis;
            }
        ),
        ['prompt' => 'Pilih Dokter']
    ) ?>

    <?= $form->field($model, 'wilayah_id')->dropDownList(
        ArrayHelper::map(
            Wilayah::find()->all(),
            'id',
            fn($w) => "Desa {$w->desa}, Kec. {$w->kecamatan} (RT{$w->rt}/RW{$w->rw})"
        ),
        ['prompt' => 'Pilih Wilayah']
    ) ?>

    <?= $form->field($model, 'jenis_kunjungan')->textInput(['maxlength' => true]) ?>

    <div class="form-group mt-3">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
