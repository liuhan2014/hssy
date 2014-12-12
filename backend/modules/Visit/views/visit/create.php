<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\Source\models\Source */

$this->title = '添加新回访';
$this->params['breadcrumbs'][] = ['label' => '回访管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="page-content-area">
	<div class="page-header">
		<h1><?= Html::encode($this->title) ?></h1>
	</div>
	
	<div class="row">
	    <div class="col-xs-5">
	   	    <?= $this->render('_form', [
	   	        'model' => $model,
	   	    ]) ?>
	    </div>
	    
	    <div class="col-xs-7">
		
	    </div>
	</div>
</div>
