<?php

use yii\helpers\Html;

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <table class="table table-striped table-bordered">
        <tr><th>ID</th><td><?= Html::encode($model->id) ?></td></tr>
        <tr><th>Username</th><td><?= Html::encode($model->username) ?></td></tr>
        <tr><th>Role</th><td><?= Html::encode($model->role) ?></td></tr>
        <tr><th>Status</th><td><?= Html::encode($model->status) ?></td></tr>
        <tr><th>Created At</th><td><?= Html::encode($model->created_at) ?></td></tr>
        <tr><th>Updated At</th><td><?= Html::encode($model->updated_at) ?></td></tr>
    </table>

</div>
