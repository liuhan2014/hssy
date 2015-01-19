<?php
/**
 * 来源渠道管理
 * 
 * @description  商家推广来源渠道管理 记录渠道 分析渠道效益
 *
*/
namespace app\modules\Source;

use app\modules\Source\models\SourceSearch;

class Source extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\Source\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
   

    /**
     * get source message
     * 
     * @param	INT 	Id
     * @param	String 	Name
     * 
     * @return  array['id'=> 'name' , ....]
    **/
    public function getSource(){

	$model = new SourceSearch();

	return $model->getAll(1);
    }

}
