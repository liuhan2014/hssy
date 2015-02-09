<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\Customer\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '客户列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= Html::a('添加新客户', ['create'], ['class' => 'btn btn-success']) ?></p>

    <div class="row table-responsive">
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
    	               <a href="index.php?r=customer/customer/update&id=<?= $item['id'] ?>&url=<?= urlencode(Yii::$app->request->url) ?>" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-edit"></span>修改</a> &nbsp;
    	               <a href="index.php?r=visit/visit/create&customer_id=<?= $item['id'] ?>&url=<?= urlencode(Yii::$app->request->url) ?>" data-toggle="modal" data-target="#visitModal"><span class="glyphicon glyphicon-edit"></span>添加回访</a>
    	               </a>
    	            </td>
    	        </tr>
    	    <?php } ?>
    	    </table>
    	    <!-- div><?= ''//LinkPager::widget(['pagination' => $pages]); ?></div -->
    </div>

</div>


<!-- edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    </div>
  </div>
</div>

<!-- visit -->
<div class="modal fade" id="visitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    </div>
  </div>
</div>

<!-- $("#datepicker").datepicker({showOtherMonths: true,selectOtherMonths: false,});  -->

<?= $this->registerJs('$("#editModal").on("hidden.bs.modal", function() {$(this).removeData("bs.modal");}); $("#removeModal").on("hidden.bs.modal", function() {$(this).removeData("bs.modal");});', View::POS_END, 'my-options'); ?>
