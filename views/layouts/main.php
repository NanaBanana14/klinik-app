<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$user = Yii::$app->user->identity;
$role = $user->role ?? 'guest';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="scroll-smooth">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | Klinik App</title>
    <?php $this->head() ?>
    <link href="/css/site.css" rel="stylesheet">
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</head>
<body class="bg-gradient-to-b from-white via-sky-50 to-white min-h-screen flex flex-col font-sans text-gray-700">
<?php $this->beginBody() ?>

<!-- 🔵 Navbar -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <img src="/images/clinic-icon.svg" class="h-8" alt="Logo Klinik">
            <span class="text-xl font-bold text-blue-600">Klinik App</span>
        </div>
        <div class="flex items-center gap-6">
            <?php if (Yii::$app->user->isGuest): ?>
                <a href="/index.php?r=site/login" class="text-sm px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-medium transition-all">
                    Login
                </a>
            <?php else: ?>
                <span class="text-sm text-gray-500 hidden md:inline">
                    👋 Hai, <strong><?= Html::encode($user->username) ?></strong> (<?= strtoupper($role) ?>)
                </span>
                <a href="/index.php?r=site/logout" data-method="post" class="text-sm px-4 py-2 rounded-lg bg-red-500 hover:bg-red-600 text-white font-medium transition-all">
                    Logout
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>

<!-- 🧾 Main Content -->
<main class="flex-1 max-w-7xl mx-auto w-full px-4 py-6">
    <?= Breadcrumbs::widget([
        'links' => $this->params['breadcrumbs'] ?? [],
        'options' => ['class' => 'mb-4 text-sm text-blue-600']
    ]) ?>
    <div class="bg-white p-6 rounded-2xl shadow-lg transition-all">
        <?= $content ?>
    </div>
</main>

<!-- ⚪ Footer -->
<footer class="bg-blue-50 mt-8 border-t border-blue-100">
    <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-6 text-sm text-gray-700">
        <!-- Tentang Klinik -->
        <div>
            <h3 class="font-semibold text-blue-700 mb-2">Klinik Sehat Sentosa</h3>
            <p class="text-gray-600">
                Memberikan layanan kesehatan yang amanah, profesional, dan terjangkau untuk semua kalangan.
            </p>
        </div>

        <!-- Alamat & Kontak -->
        <div>
            <h4 class="font-semibold text-blue-700 mb-2">Kontak</h4>
            <ul class="space-y-1 text-gray-600">
                <li>Jl. Kesehatan No. 123, Yogyakarta</li>
                <li>Telepon: (0274) 123-456</li>
                <li>Email: info@kliniksehat.id</li>
            </ul>
        </div>

        <!-- Jam Operasional -->
        <div>
            <h4 class="font-semibold text-blue-700 mb-2">Jam Operasional</h4>
            <ul class="space-y-1 text-gray-600">
                <li>Senin - Jumat: 08.00 - 20.00</li>
                <li>Sabtu: 08.00 - 14.00</li>
                <li>Minggu & Hari Libur: Tutup</li>
            </ul>
        </div>

        <!-- Sosial Media -->
        <div>
            <h4 class="font-semibold text-blue-700 mb-2">Ikuti Kami</h4>
            <div class="flex gap-3 text-blue-600">
                <a href="#" class="hover:text-blue-800 transition"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#" class="hover:text-blue-800 transition"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#" class="hover:text-blue-800 transition"><i class="fab fa-twitter"></i> Twitter</a>
            </div>
        </div>
    </div>

    <div class="border-t border-blue-100 mt-6 pt-4 pb-6 text-center text-xs text-gray-500">
        &copy; <?= date('Y') ?> Klinik App. Dibuat dengan ❤️ oleh Tim Developer. Seluruh hak cipta dilindungi.
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
