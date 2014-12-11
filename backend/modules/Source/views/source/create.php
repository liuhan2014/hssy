<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\Source\models\Source */

$this->title = '渠道新增';
$this->params['breadcrumbs'][] = ['label' => '渠道管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="main-content">


	
	<div class="source-create">
	
	    <h1><?= Html::encode($this->title) ?></h1>
	
	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
	
	</div>
</div>
