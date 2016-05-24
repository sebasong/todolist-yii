<?php

use yii\helpers\Html;
$request = Yii::$app->request;

/* @var $this yii\web\View */
/* @var $model backend\modules\todolist\models\Projects */

$this->title = 'Create Projects';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'team_id' => $request->get('team_id')
    ]) ?>

</div>
