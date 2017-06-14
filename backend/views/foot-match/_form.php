<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\FootClub;
use common\models\FootMatch;

/* @var $this yii\web\View */
/* @var $model common\models\FootMatch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foot-match-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matchweek')->textInput() ?>

    <?= $form->field($model, 'data_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team1_id')->dropDownList(FootClub::find()->select(['club','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'team2_id')->dropDownList(FootClub::find()->select(['club','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'team1_score')->textInput() ?>

    <?= $form->field($model, 'team2_score')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Yaratish' : 'Tahrirlash', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
