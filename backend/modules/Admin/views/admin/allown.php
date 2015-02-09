<?php
/* @var $this yii\web\View */
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;

$this->title = '权限分配';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-content-area">
	<div class="page-header">
	  <h1><?= $this->title ?><small> </small></h1>
	</div>

<?php $form = ActiveForm::begin([
            'method' => 'post',
            'action' => 'index.php?r=admin/admin/additem',
    ]); ?>
	
	<div class="row">
    	    <table class="table table-bordered">
    	        <tr class="table-header">
    	            <th>角色名</th>
    	            <th>描述</th>
    	            <th>分配</th>
    	        </tr>
            <?php foreach($data as $key=>$item){ ?>
    	            <tr>
                         <td><?= $item->name ?></td> 
                         <td><?= $item->description ?></td> 
                         <td>
                             <div class="checkbox">
                                 <label>
                                     <input name="item_name[]" type="checkbox" class="ace" value="<?= $item->name ?>">
                                     <span class="lbl">&nbsp;选择</span>
                                 </label>
                             </div>
                         </td> 
    	            </tr>
            <?php } ?>
            </table>
    	    <div><!-- ?= LinkPager::widget(['pagination' => $pages]); ? --></div>
            <button type="submit" class="btn btn-success ">确认分配</button>
            <input type="hidden" name="user_id" value="<?= $user_id ?>">
	</div>
<?php ActiveForm::end(); ?>
</div>
