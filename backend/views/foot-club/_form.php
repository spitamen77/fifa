<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FootClub */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foot-club-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rank')->textInput() ?>

    <?= $form->field($model, 'club')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abbr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'played')->textInput() ?>

    <?= $form->field($model, 'points')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Yaratish' : 'Tahrirlash', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
