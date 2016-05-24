<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
$request = Yii::$app->request;
/* @var $this yii\web\View */
/* @var $model backend\modules\todolist\models\Teams */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teams-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Project List of This Team', Url::to(['/todolist/projects','team_id'=> $request->get('id')]), ['class' => 'btn btn-info']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'owner_id',
            'title',
        ],
    ]) ?>

</div>
