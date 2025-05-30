<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Tindakan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tindakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'nama',
            'deskripsi:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
