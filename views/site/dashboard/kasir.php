<?php
use yii\helpers\Html;
$this->title = 'Dashboard Kasir';
?>

<div class="p-6">
    <h1 class="text-3xl font-bold text-blue-700 mb-4">
        Selamat Datang <?= Html::encode(Yii::$app->user->identity->username) ?>
    </h1>
    <p class="text-gray-600 mb-6">
        Anda login sebagai <strong>KASIR</strong>
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="?r=tagihan/index" class="block p-4 bg-yellow-500 text-white rounded shadow hover:bg-yellow-600">💰 Daftar Tagihan</a>
        <a href="?r=laporan/index" class="block p-4 bg-gray-600 text-white rounded shadow hover:bg-gray-700">📊 Laporan Pembayaran</a>
    </div>
</div>
