<?php
use yii\helpers\Html;
$this->title = 'Dashboard Dokter';
?>

<div class="p-6">
    <h1 class="text-3xl font-bold text-blue-700 mb-4">
        Selamat Datang <?= Html::encode(Yii::$app->user->identity->username) ?>
    </h1>
    <p class="text-gray-600 mb-6">
        Anda login sebagai <strong>DOKTER</strong>
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="?r=kunjungan/daftar" class="block p-4 bg-orange-500 text-white rounded shadow hover:bg-orange-600">🩺 Pasien Hari Ini</a>
        <a href="?r=tindakan/rekam" class="block p-4 bg-red-500 text-white rounded shadow hover:bg-red-600">📝 Input Tindakan & Obat</a>
    </div>
</div>
