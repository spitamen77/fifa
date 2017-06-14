<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\FootTeam;
use common\models\FootPlayer;

/* @var $this yii\web\View */
/* @var $model common\models\FootTeamContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foot-team-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userid')->dropDownList(FootTeam::find()->select(['name','userid'])->indexBy('userid')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'dr1')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'dr2')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'him1')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'him2')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'him3')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'him4')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'him5')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'yah1')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'yah2')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'yah3')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'yah4')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'yah5')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'huj1')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'huj2')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'huj3')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
