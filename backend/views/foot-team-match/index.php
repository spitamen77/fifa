<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\FootTeamMatch;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FootTeamMatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foot Team Matches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-team-match-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Foot Team Match', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'userid',
                'value'=>'user.name'
            ],
            'match_id',
            ['attribute'=>'dr1',
                'value'=>function (FootTeamMatch $category){
                    return ArrayHelper::getValue($category,'dr10.player_id'); }
            ],
            'plr1',
            'plr2',
            // 'plr3',
            // 'plr4',
            // 'plr5',
            // 'plr6',
            // 'plr7',
            // 'plr8',
            // 'plr9',
            // 'plr10',
            // 'dr2',
            // 'zah1',
            // 'zah2',
            // 'zah3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
