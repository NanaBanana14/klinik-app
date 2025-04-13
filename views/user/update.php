<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\bootstrap5\ActiveForm */

$this->title = 'Update User: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Daftar User', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['readonly' => true]) ?>
        <?= $form->field($model, 'password_hash')->passwordInput() ?>
        <?= $form->field($model, 'role')->dropDownList([
            'admin' => 'Admin', 
            'petugas' => 'Petugas', 
            'dokter' => 'Dokter', 
            'kasir' => 'Kasir'
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
