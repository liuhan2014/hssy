<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\web\View;

/* @var $searchModel app\modules\Source\models\SourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '页面统计 URL ';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="page-content-area">
	<div class="page-header">
	  <h1><?= $this->title ?><small>统计地址: &nbsp;</small></h1>
	</div>

<div class="col-sm-7 infobox-container">
	<!-- #section:pages/dashboard.infobox -->
    <?php foreach($model as $key=>$value){ ?>
	<div class="infobox infobox-green">
		<div class="infobox-icon"><i class="ace-icon fa fa-comments"></i></div>
		<div class="infobox-data">
			<span class="infobox-data-number"><?= $value ?></span>
			<div class="infobox-content"><?= $key ?></div>
		</div>
		<div class="stat stat-success">8%</div>
	</div>
    <?php } ?>

	<!-- /section:pages/dashboard.infobox -->
</div>





<!-- ********************************************************************************** -->
</div>
