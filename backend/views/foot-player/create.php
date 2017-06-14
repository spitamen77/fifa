<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootPlayer */

$this->title = 'Create Foot Player';
$this->params['breadcrumbs'][] = ['label' => 'Foot Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-player-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
