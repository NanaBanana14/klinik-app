<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\User;


/** @var yii\web\View $this */
/** @var app\models\Dokter $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="dokter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $users = User::find()
        ->where(['role' => 'dokter'])
        ->all();

    $userItems = ArrayHelper::map($users, 'id', 'username');
    ?>

    <?= $form->field($model, 'user_id')->dropDownList(
        $userItems,
        ['prompt' => '-- Pilih User Dokter --']
    ) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'spesialis')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'alamat')->textarea(['rows' => 4]) ?>

    <div class="form-group mt-3">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
