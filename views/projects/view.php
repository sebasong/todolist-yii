<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
$request = Yii::$app->request;
/* @var $this yii\web\View */
/* @var $model backend\modules\todolist\models\Projects */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Job List of This Project', Url::to(['/todolist/jobs','project_id'=> $request->get('id')]), ['class' => 'btn btn-info']) ?>
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
            'team_id',
            'title',
        ],
    ]) ?>

</div>
