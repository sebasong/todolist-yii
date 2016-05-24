<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\todolist\models\Teams */

$this->title = 'Create Teams';
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teams-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user_id' => $user_id
    ]) ?>

</div>
