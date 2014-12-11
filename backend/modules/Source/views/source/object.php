<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Source\models\Source */

$this->title = $model->name;
?>

<?php $form = ActiveForm::begin([
                    'layout' => 'horizontal',
		    'action' => ['update'],
                    'fieldConfig' => [
                            'horizontalCssClasses' => [
                                'label' => 'col-sm-3',
                                'wrapper' => 'col-sm-8',
                            ],
                         ],
                    ]); ?>

  <div class="modal-header bg-danger">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title"><?= Html::encode($this->title) ?></h4>
  </div>
  <div class="model-body">
	</br>
	<table class="table table-hover">
		<tr>
			<th>渠道名称</th><td><?= $model->name?></td>	

		</tr>
		<tr>
			<th>渠道描述</th><td><?= $model->desc?></td>	
		</tr>
	</table>
	
  </div>
  <div class="modal-footer">
	 <?php if($model->status == 1) { ?>
	 <a href="index.php?r=source/source/disable&id=<?= $model->id ?>&url=<?= urlencode($url) ?>" class="btn btn-danger" role="button">禁&nbsp;用</a>
	<?php }else{ ?>
	 <a href="index.php?r=source/source/cancel&id=<?= $model->id ?>&url=<?= urlencode($url) ?>" class="btn btn-danger" role="button">取消禁用</a>
	<?php } ?>
 	 <button type="button" class="btn btn-default" data-dismiss="modal">取&nbsp;消</button>
  </div>
<?php ActiveForm::end(); ?>
