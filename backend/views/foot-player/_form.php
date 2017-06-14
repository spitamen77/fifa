<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\FootClub;
use common\models\FootPosition;

/* @var $this yii\web\View */
/* @var $model common\models\FootPlayer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foot-player-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'club_id')->dropDownList(FootClub::find()->select(['club','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->dropDownList(FootPosition::find()->select(['abbr','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'selected')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
