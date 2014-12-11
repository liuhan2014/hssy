<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\web\View;

/* @var $searchModel app\modules\Source\models\SourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '渠道管理';
$this->params['breadcrumbs'][] = $this->title;

// 渠道状态
$status = [1 => '正常' ,2=> '禁用'];
?>

<div class="page-header">
  <h1><?= $this->title ?></h1>
</div>
<div class="source-index">
	<div class="panel panel-default">
	  <div class="panel-body">
		<?= Html::a('添加新渠道', ['create'], ['class' => 'btn btn-success']) ?>
	  </div>
	</div>
    <table class="table table-hover table-bordered">
        <tr class="bg-success">
            <th>渠道名称</th>
            <th>联系人</th>
            <th>联系方式</th>
            <th>描述</th>
            <th>创建时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
    <?php foreach($lists as $key=>$item) { ?>
         <tr>
            <td><?= $item->name ?></td>
            <td><?= $item->person ?></td>
            <td><?= $item->phone ?></td>
            <td><?= $item->desc ?></td>
            <td><?= $item->create_time ?></td>
            <td><?= $status[$item->status] ?></td>
            <td>
               <a href="index.php?r=source/source/update&id=<?= $item->id ?>&url=<?= urlencode(Yii::$app->request->url) ?>" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-edit"></span>修改</a> &nbsp;
               <a href="index.php?r=source/source/object&id=<?= $item->id ?>&url=<?= urlencode(Yii::$app->request->url) ?>" data-toggle="modal" data-target="#removeModal">
	      <?php if($item->status == 1) { ?>
			<span class="glyphicon glyphicon-ban-circle"></span>禁用
   	      <?php }else{ ?>
			<span class="glyphicon glyphicon-ban-circle"></span>取消禁用
 	      <?php } ?>
	       </a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <div><?= LinkPager::widget(['pagination' => $pages]); ?></div>
</div>


<!-- edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    </div>
  </div>
</div>

<!-- delete -->
<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    </div>
  </div>
</div>


<?= $this->registerJs('$("#editModal").on("hidden.bs.modal", function() {$(this).removeData("bs.modal");}); $("#removeModal").on("hidden.bs.modal", function() {$(this).removeData("bs.modal");});', View::POS_END, 'my-options'); ?>
