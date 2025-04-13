<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Dashboard';

$user = Yii::$app->user->identity;
$role = $user ? $user->role : 'guest';

?>
<div class="p-6">
    <h1 class="text-3xl font-bold text-blue-700 mb-4">
        Selamat Datang <?= Html::encode($user->username ?? 'Tamu') ?>
    </h1>
    <p class="text-gray-600 mb-6">
        Anda login sebagai <strong><?= Html::encode(strtoupper($role)) ?></strong>
    </p>

    <?php if ($role === 'admin'): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="?r=user/index" class="block p-4 bg-blue-500 text-white rounded shadow hover:bg-blue-600">👤 Manajemen User</a>
            <a href="?r=pegawai/index" class="block p-4 bg-teal-500 text-white rounded shadow hover:bg-teal-600">👩‍⚕️ Data Pegawai</a>
            <a href="?r=tindakan/index" class="block p-4 bg-purple-500 text-white rounded shadow hover:bg-purple-600">💉 Master Tindakan</a>
            <a href="?r=obat/index" class="block p-4 bg-indigo-500 text-white rounded shadow hover:bg-indigo-600">💊 Master Obat</a>
        </div>

    <?php elseif ($role === 'pendaftaran'): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="?r=pasien/create" class="block p-4 bg-blue-500 text-white rounded shadow hover:bg-blue-600">➕ Daftar Pasien Baru</a>
            <a href="?r=kunjungan/index" class="block p-4 bg-green-500 text-white rounded shadow hover:bg-green-600">📋 Riwayat Kunjungan</a>
        </div>

    <?php elseif ($role === 'dokter'): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="?r=kunjungan/daftar" class="block p-4 bg-orange-500 text-white rounded shadow hover:bg-orange-600">🩺 Pasien Hari Ini</a>
            <a href="?r=tindakan/rekam" class="block p-4 bg-red-500 text-white rounded shadow hover:bg-red-600">📝 Input Tindakan & Obat</a>
        </div>

    <?php elseif ($role === 'kasir'): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="?r=tagihan/index" class="block p-4 bg-yellow-500 text-white rounded shadow hover:bg-yellow-600">💰 Daftar Tagihan</a>
            <a href="?r=laporan/index" class="block p-4 bg-gray-600 text-white rounded shadow hover:bg-gray-700">📊 Laporan Pembayaran</a>
        </div>

    <?php else: ?>
        <p class="text-red-500">Role Anda belum dikenali. Silakan hubungi admin.</p>
    <?php endif; ?>
</div>
