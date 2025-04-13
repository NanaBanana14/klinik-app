<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Tambah User';
$this->params['breadcrumbs'][] = ['label' => 'Daftar User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password_hash')->passwordInput() ?>
        <?= $form->field($model, 'role')->dropDownList([
                'admin' => 'Admin', 
                'petugas' => 'Petugas', 
                'dokter' => 'Dokter', 
                'kasir' => 'Kasir'
            ]) 
        ?>

        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
