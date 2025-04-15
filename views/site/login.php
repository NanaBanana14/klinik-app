<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';

?>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-blue-200">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-blue-600"><?= Html::encode($this->title) ?></h1>
            <p class="text-gray-600 mt-2">Masukkan username dan password Anda untuk masuk</p>
        </div>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'space-y-4']
        ]); ?>

            <?= $form->field($model, 'username')->textInput([
                'autofocus' => true,
                'class' => 'w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none'
            ])->label('Username', ['class' => 'font-semibold']) ?>

            <?= $form->field($model, 'password')->passwordInput([
                'class' => 'w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none'
            ])->label('Password', ['class' => 'font-semibold']) ?>

            <div class="flex items-center justify-between">
                <div>
                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"flex items-center\">{input} {label}</div>"
                    ]) ?>
                </div>
                <div class="text-sm text-right">
                    <a href="#" class="text-blue-500 hover:underline">Lupa password?</a>
                </div>
            </div>

            <div>
                <?= Html::submitButton('Login', [
                    'class' => 'w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition'
                ]) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
