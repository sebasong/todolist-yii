<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$request = Yii::$app->request;
/* @var $this yii\web\View */
/* @var $model backend\modules\todolist\models\Messages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="messages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sender_id')->textInput(['value' => $sender_id]) ?>

    <?= $form->field($model, 'receiver_id')->textInput(['value' => $request->get('id')]) ?>

    <?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
