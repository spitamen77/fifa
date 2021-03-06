<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FootUserProfile */

$this->title = 'Update Foot User Profile: ' . $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'Foot User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userid, 'url' => ['view', 'userid' => $model->userid, 'fname' => $model->fname]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foot-user-profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
