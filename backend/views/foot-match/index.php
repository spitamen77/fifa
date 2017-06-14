<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\FootClub;
use common\models\FootMatch;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FootMatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foot Match';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-match-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Foot Matchga yaratish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            ['attribute'=>'matchweek',
            'filter'=>FootMatch::find()->select(['matchweek','id'])->indexBy('id')->column()
            ],
            'data_time',
            ['attribute'=>'team1_id',
                'value'=>'team1.club',
                'filter'=>FootClub::find()->select(['club','id'])->indexBy('id')->column()
            ],
            ['attribute'=>'team2_id',
                'value'=>'team2.club',
                'filter'=>FootClub::find()->select(['club','id'])->indexBy('id')->column()
            ],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
