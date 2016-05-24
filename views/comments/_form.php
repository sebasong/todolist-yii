<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$request = Yii::$app->request;
/* @var $this yii\web\View */
/* @var $model backend\modules\todolist\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'owner_id')->textInput(['value' => Yii::$app->user->getId()]) ?>

    <?= $form->field($model, 'job_id')->textInput(['value' => $request->get('id')]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
