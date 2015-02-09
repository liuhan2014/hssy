<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\web\View;

/* @var $searchModel app\modules\Source\models\SourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '参数说明';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="page-content-area">
	<div class="page-header">
	  <h2><?= $this->title ?><small>&nbsp;Metric Translations</small></h2>
	</div>
	
	<div class="row">
    	    <table class="table table-bordered  table-hover">
    	        <tr class="info">
    	            <th>参数</th> <th>说明</th>
    	        </tr>

    	    <?php foreach($lists as $key=>$item){ ?>
    	        <tr>
    	            <td><?= $key ?></td> <td><?= $item ?></td>
    	        </tr>
            <?php } ?>
    	    </table>
    	    <div><!-- ?= LinkPager::widget(['pagination' => $pages]); ? --></div>
	</div>
