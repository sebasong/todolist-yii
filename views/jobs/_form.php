<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$request = Yii::$app->request;
/* @var $this yii\web\View */
/* @var $model backend\modules\todolist\models\Jobs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_id')->textInput(['value' => $request->get('project_id')]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
