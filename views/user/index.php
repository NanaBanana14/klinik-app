<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => new yii\data\ArrayDataProvider([
            'allModels' => $users,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]),
        'columns' => [
            'id',
            'username',
            'role',
            [
                'class' => 'yii\grid\ActionColumn',
            ],
        ]);
    ?>
</div>
