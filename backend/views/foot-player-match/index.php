<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\FootPlayer;
use common\models\FootMatch;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FootPlayerMatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foot Player Matches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-player-match-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Foot Player Match', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'player_id',
                'value'=>'player.name',
                'filter'=>FootPlayer::find()->select(['name', 'id'])->indexBy('id')->column()
            ],
            ['attribute'=>'matchweek_id',
            'filter'=>FootMatch::find()->select(['matchweek','id'])->indexBy('id')->column()
            ],
            'minutes',
            'goal',
            'assists',
            // 'clean',
            // 'goal_conseded',
            // 'own_goal',
            // 'penalti_saved',
            // 'penalti_missed',
            // 'yellow_card',
            // 'red_card',
            // 'saves',
            // 'price',
            // 'matchweek_point',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
