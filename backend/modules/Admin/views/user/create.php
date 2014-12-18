<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\User */

$this->title = '创建管理员';
$this->params['breadcrumbs'][] = ['label' => '管理员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="page-content-area">
	<div class="col-sm-5 col-md-offset-2">
		<div class="widget-box">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title"><?= Html::encode($this->title) ?></h4>
			</div>
	
			<div class="widget-body">
				<div class="widget-main">
		   	    	<?= $this->render('_form', [
		   	    	    'model' => $model,
		   	    	]) ?>
				</div>
			</div>
		</div>
	</div>
</div>
