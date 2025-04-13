<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Dashboard';

$user = Yii::$app->user->identity;
$role = $user ? $user->role : 'guest';

?>
<div class="p-6">
    <!-- <h1 class="text-3xl font-bold text-blue-700 mb-4">
        Selamat Datang <?= Html::encode($user->username ?? 'Tamu') ?>
    </h1>
    <p class="text-gray-600 mb-6">
        Anda login sebagai <strong><?= Html::encode(strtoupper($role)) ?></strong>
    </p> -->

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
        <div class="container mx-auto p-4">
            <!-- Judul Halaman -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-blue-700 mb-4">Selamat Datang di Sistem Informasi Klinik Sehat Sentosa</h1>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                    Sistem ini membantu pengelolaan layanan kesehatan: pendaftaran pasien, tindakan medis, manajemen obat, pembayaran, hingga laporan visual klinik.
                </p>
            </div>

            <!-- Fitur-fitur Utama -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Fitur 1: Pendaftaran Pasien -->
                <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-xl transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/3822/3822167.png" class="w-16 h-16 mb-4 mx-auto" alt="Pendaftaran">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2 text-center">Pendaftaran Pasien</h2>
                    <p class="text-gray-600 text-sm text-center mb-3">
                        Daftarkan pasien baru ke sistem, pilih jenis kunjungan, dan simpan riwayat mereka.
                    </p>
                    <a href="#" class="text-blue-600 text-sm block text-center hover:underline">Pelajari Lebih Lanjut</a>
                </div>

                <!-- Fitur 2: Tindakan Medis -->
                <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-xl transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/2965/2965566.png" class="w-16 h-16 mb-4 mx-auto" alt="Tindakan Medis">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2 text-center">Tindakan Medis</h2>
                    <p class="text-gray-600 text-sm text-center mb-3">
                        Catat tindakan medis yang dilakukan pada pasien dan resep obat dari dokter.
                    </p>
                    <a href="#" class="text-blue-600 text-sm block text-center hover:underline">Pelajari Lebih Lanjut</a>
                </div>

                <!-- Fitur 3: Pembayaran -->
                <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-xl transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/4298/4298890.png" class="w-16 h-16 mb-4 mx-auto" alt="Pembayaran">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2 text-center">Pembayaran & Tagihan</h2>
                    <p class="text-gray-600 text-sm text-center mb-3">
                        Kelola tagihan pasien berdasarkan tindakan dan obat yang diterima.
                    </p>
                    <a href="#" class="text-blue-600 text-sm block text-center hover:underline">Pelajari Lebih Lanjut</a>
                </div>
            </div>

            <!-- Statistik dan Laporan -->
            <div class="bg-white p-6 rounded-lg shadow-md border mb-8 flex flex-col lg:flex-row items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/4149/4149651.png" class="w-32 h-32 mb-6 lg:mb-0 lg:mr-6" alt="Statistik">
                <div>
                    <h2 class="text-2xl font-semibold text-blue-600 mb-2">Laporan & Statistik Klinik</h2>
                    <p class="text-gray-600 mb-4">
                        Lihat statistik kunjungan, tindakan terbanyak, dan pemakaian obat secara visual.
                    </p>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Lihat Laporan</a>
                </div>
            </div>

            <!-- Info & Pengingat -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md border flex flex-col lg:flex-row items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/4149/4149704.png" class="w-24 h-24 mb-6 lg:mb-0 lg:mr-6" alt="Reminder">
                <div>
                    <h2 class="text-xl font-semibold text-blue-600 mb-2">Informasi & Pengingat</h2>
                    <p class="text-gray-600 mb-2">
                        Selalu cek pengingat jadwal pasien dan pastikan sistem terupdate untuk operasional klinik.
                    </p>
                    <ul class="list-disc pl-5 text-gray-600 text-sm">
                        <li>Perbarui data pasien dan jadwal kunjungan secara rutin.</li>
                        <li>Pastikan laporan keuangan selalu up-to-date.</li>
                        <li>Jaga kualitas layanan medis dengan SOP klinik.</li>
                    </ul>
                </div>
            </div>
        </div>

    <?php endif; ?>
</div>