<?php

use yii\helpers\Html;
use yii\grid\GridView;
$request = Yii::$app->request;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\todolist\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Projects', ['create', 'team_id' => $request->get('team_id')], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'team_id',
            'title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
