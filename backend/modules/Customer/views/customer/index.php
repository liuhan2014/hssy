<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\Customer\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '客户列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <div class="row">
    	    <table class="table table-bordered">
    	        <tr class="table-header">
    	            <th>姓名</th>
    	            <th>电话</th>
    	            <th>微信</th>
    	            <th>QQ</th>
    	            <th>预算</th>
    	            <th>创建时间</th>
    	            <th>操作</th>
    	        </tr>
    	    <?php foreach($data as $key=>$item) { ?>
    	         <tr>
    	            <td><?= $item['name'] ?></td>
    	            <td><?= $item['phone'] ?></td>
    	            <td><?= $item['weixin'] ?></td>
    	            <td><?= $item['qq'] ?></td>
    	            <td><?= $item['price'] ?></td>
    	            <td><?= $item['create_time'] ?></td>
    	            <td>
    	               <a href="index.php?r=source/source/update&id=<?= $item['id'] ?>&url=<?= urlencode(Yii::$app->request->url) ?>" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-edit"></span>修改</a> &nbsp;
    	               </a>
    	            </td>
    	        </tr>
    	    <?php } ?>
    	    </table>
    	    <!-- div><?= ''//LinkPager::widget(['pagination' => $pages]); ?></div -->
    </div>



</div>
