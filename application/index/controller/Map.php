<?php

namespace app\index\controller;

use app\admin\model\Article;
use app\common\controller\Frontend;
use think\Db;

class Map extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'default';

    public function index()
    {
        $area=$this->request->request("area","");
        $where=[];
        if($area){
            $where=["area"=>$area];
        }


        $model = new \app\admin\model\Map();
        $lists = $model->where($where)->select();

        foreach ($lists as $key=>$value){
            $lists[$key]["name"]=$value["title"];
            $lists[$key]["regionName"]=$value["title"];
            $lists[$key]["lat"]=$value["jingdu"];
            $lists[$key]["lng"]=$value["weidu"];
            $lists[$key]["link"]=$value["url"];
            $lists[$key]["url"]=$value["url"];
            $lists[$key]["cover"]=$value["image"];
            $lists[$key]["describe"]=$value["description"];
            $lists[$key]["value"]=[$value['jingdu'],$value['weidu']];
        }
        $this->assign('dataList', \GuzzleHttp\json_encode($lists,JSON_UNESCAPED_UNICODE));
        return $this->view->fetch("index");
    }

    public function count(){

        $model = new \app\admin\model\Map();

        $data=[];
        $array=["顺庆区","高坪区","嘉陵区","南部县","蓬安县","营山县","仪陇县","阆中市","西充县"];

        foreach ($array as $value){
            $count=$model->where(["area"=>$value])->count();
            array_push($data,["name"=>$value,"value"=>$count]);
        }

        echo \GuzzleHttp\json_encode($data,JSON_UNESCAPED_UNICODE);
    }
}
