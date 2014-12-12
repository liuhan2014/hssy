<?php

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
