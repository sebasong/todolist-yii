<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\todolist\models\Teams */

$this->title = 'Update Teams: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teams-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user_id' => $user_id
    ]) ?>

</div>
