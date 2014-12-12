<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\Visit\models\VisitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Visits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Visit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer_id',
            'result',
            'content:ntext',
            'next_time',
            // 'create_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
