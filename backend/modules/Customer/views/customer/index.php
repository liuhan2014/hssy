<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\Customer\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'phone',
            'weixin',
            'qq',
            // 'concat',
            // 'sex',
            // 'price',
            // 'marry_date',
            // 'address',
            // 'source',
            // 'type',
            // 'remark:ntext',
            // 'status',
            // 'create_time',
            // 'last_modify',
            // 'entry_admin',
            // 'track_amdin',
            // 'reception_admin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
