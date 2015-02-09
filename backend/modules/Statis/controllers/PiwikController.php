<?php
/**
* Piwik data statis
* [Piwik statistics API]
* 
* @source  /srv/site/piwik
*
* @date  2015-01-22 
*
* @author liuh
*/

namespace app\modules\Statis\controllers;

use yii\web\Controller;
use linslin\yii2\curl;

class PiwikController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    
    /** 返回参数说明 return explain */
    public function actionParams()
    {
        $url = \Yii::$app->params['param_explain'];

        $curl = new curl\Curl();

        $return = $curl->get($url);

        $data = json_decode($return);
       //print_r($data); 
        return $this->render('explain',['lists'=>$data[0]]);
    }



    /**
     * 获取指定页面情况
     *  
     * @param STRING    URL
     * @return JSON     []
    */
    public function actionGeturl($_url=NULL,$format=0)
    {

        if(empty($_url)){
             $_url = "http://www.paimanyi.com/";
        }

        $url = \Yii::$app->params['getUrl'];

        $curl_url = sprintf("%s&pageUrl=%s&idSite=2&period=day&date=%s&format=json",$url,$_url,date('Y-m-d'));
        
        $curl = new curl\Curl();

        $return = $curl->get($curl_url);

        $data = json_decode($return);

        if(empty($data)){
            return;
        }
        
        $params = \Yii::$app->params['piwik_params'];
        $arr = []; 
        foreach($data[0] as $key=>$value){
            if(array_key_exists($key,$params)){
                $arr[$params[$key]] = $value;
            }
        }

        if($format == 1){

             print_r($arr);
        }else{
             //$this->layout = false;
             return $this->render('geturl',['model'=>$arr]);
        }
    }


    /*
     * 获取指定时间搜索词API
     *
     * @param STRING  date
     * @return JOSN  {}
     */
    //public function actionGetKeywords()
    public function actionKeywords()
    {
        $url = \Yii::$app->params['getKeywords'];

        $params = [
                'idSite' => 2,
                'period' => 'day',
                'date' => date("Y-m-d"),
                'format' => 'json'
        ];

        $curl_url = sprintf("%s&idSite=2&period=day&date=%s&format=json&translateColumnNames=1",$url,date('Y-m-d'));
        
        $curl = new curl\Curl();

        $return = $curl->get($curl_url);

        $data = json_decode($return);

        $count = count($data);
        return $this->render('keywords',['lists'=>$data,'count'=>$count]);
    }

}
