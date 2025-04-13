<?php
use yii\helpers\Html;

$this->title = 'Dashboard Guest';
?>

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
        <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-xl transition">
            <img src="https://cdn-icons-png.flaticon.com/512/3822/3822167.png" class="w-16 h-16 mb-4 mx-auto" alt="Pendaftaran">
            <h2 class="text-xl font-semibold text-blue-600 mb-2 text-center">Pendaftaran Pasien</h2>
            <p class="text-gray-600 text-sm text-center mb-3">
                Daftarkan pasien baru ke sistem, pilih jenis kunjungan, dan simpan riwayat mereka.
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-xl transition">
            <img src="https://cdn-icons-png.flaticon.com/512/2965/2965566.png" class="w-16 h-16 mb-4 mx-auto" alt="Tindakan Medis">
            <h2 class="text-xl font-semibold text-blue-600 mb-2 text-center">Tindakan Medis</h2>
            <p class="text-gray-600 text-sm text-center mb-3">
                Catat tindakan medis yang dilakukan pada pasien dan resep obat dari dokter.
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-xl transition">
            <img src="https://cdn-icons-png.flaticon.com/512/4298/4298890.png" class="w-16 h-16 mb-4 mx-auto" alt="Pembayaran">
            <h2 class="text-xl font-semibold text-blue-600 mb-2 text-center">Pembayaran & Tagihan</h2>
            <p class="text-gray-600 text-sm text-center mb-3">
                Kelola tagihan pasien berdasarkan tindakan dan obat yang diterima.
            </p>
        </div>
    </div>

    <!-- Statistik -->
    <div class="bg-white p-6 rounded-lg shadow-md border mb-8 flex flex-col lg:flex-row items-center">
        <img src="https://cdn-icons-png.flaticon.com/512/4149/4149651.png" class="w-32 h-32 mb-6 lg:mb-0 lg:mr-6" alt="Statistik">
        <div>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">Laporan & Statistik Klinik</h2>
            <p class="text-gray-600 mb-4">
                Lihat statistik kunjungan, tindakan terbanyak, dan pemakaian obat secara visual.
            </p>
        </div>
    </div>

    <!-- Info & Reminder -->
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
