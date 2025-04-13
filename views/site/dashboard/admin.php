<?php
use yii\helpers\Html;
$this->title = 'Dashboard Admin';
?>

<div class="p-6">
    <h1 class="text-3xl font-bold text-blue-700 mb-4">
        Selamat Datang <?= Html::encode(Yii::$app->user->identity->username) ?>
    </h1>
    <p class="text-gray-600 mb-6">
        Anda login sebagai <strong>ADMIN</strong>
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="?r=user/index" class="block p-4 bg-blue-500 text-white rounded shadow hover:bg-blue-600">👤 Manajemen User</a>
        <a href="?r=pegawai/index" class="block p-4 bg-teal-500 text-white rounded shadow hover:bg-teal-600">👩‍⚕️ Data Pegawai</a>
        <a href="?r=tindakan/index" class="block p-4 bg-purple-500 text-white rounded shadow hover:bg-purple-600">💉 Master Tindakan</a>
        <a href="?r=obat/index" class="block p-4 bg-indigo-500 text-white rounded shadow hover:bg-indigo-600">💊 Master Obat</a>
    </div>
</div>
