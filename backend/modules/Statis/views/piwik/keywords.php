<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\web\View;

/* @var $searchModel app\modules\Source\models\SourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '搜索词统计 getKeywords';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="page-content-area">
	<div class="page-header">
	  <h1><?= $this->title ?>______<small>共计:&nbsp;<?= $count ?>&nbsp;个检索词</small></h1>
	</div>
	
	<div class="row">
    	    <table class="table table-bordered">
    	        <tr class="table-header">
    	            <th>标签</th>
    	            <th>访客数</th>
    	            <th>访问次数</th>
    	            <th>活动次数</th>
    	            <!-- th>users</th -->
    	            <th>单次访问最大活动量</th>
    	            <th>停留时间(s)</th>
    	            <th>跳出次数</th>
    	            <!-- th>访问转化</th -->
    	        </tr>
    	    <?php foreach($lists as $key=>$item){ ?>
    	        <tr>
    	            <td><?= $item->label ?></td>
    	            <td><?= $item->nb_uniq_visitors ?></td>
    	            <td><?= $item->nb_visits ?></td>
    	            <td><?= $item->nb_actions ?></td>
    	            <!-- td><//?= $item->nb_users ?></td-->
    	            <td><?= $item->max_actions ?></td>
    	            <td><?= $item->sum_visit_length ?></td>
    	            <td><?= $item->bounce_count ?></td>
    	            <!--td><//?= $item->idsubdatatable ?></td -->
    	        </tr>
            
            <?php } ?>
    	    </table>
    	    <div><!-- ?= LinkPager::widget(['pagination' => $pages]); ? --></div>
	</div>
