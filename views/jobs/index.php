<?php

use yii\helpers\Html;
use yii\grid\GridView;
$request = Yii::$app->request;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\todolist\models\JobsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jobs', ['create', 'project_id' => $request->get('project_id')], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'project_id',
            'title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
