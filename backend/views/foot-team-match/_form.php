<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\FootTeam;
use common\models\FootPlayer;

/* @var $this yii\web\View */
/* @var $model common\models\FootTeamMatch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foot-team-match-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userid')->dropDownList(FootTeam::find()->select(['name','userid'])->indexBy('userid')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'match_id')->textInput() ?>

    <?= $form->field($model, 'dr1')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']),
    ['name', 'unique', 'attribute'=>['dr1', 'dr2']] ?>

    <?= $form->field($model, 'plr1')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'plr2')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'plr3')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'plr4')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'plr5')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'plr6')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'plr7')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'plr8')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'plr9')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'plr10')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'dr2')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'zah1')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'zah2')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <?= $form->field($model, 'zah3')->dropDownList(FootPlayer::find()->select(['name','id'])->indexBy('id')->column(), ['property'=>'']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
