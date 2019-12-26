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
        $area=$this->request->input("area","");
        $where=[];
        if(!$area){
            $where["area"]=$area;
        }
        $model = new \app\admin\model\Map();
        $lists = $model->where($where)->select();
        $this->assign('dataList', $lists);
        return $this->view->fetch("index_lz");
    }

    public function count(){

        $model = new Map();

        $data=[];
        $array=["顺庆区","高坪区","嘉陵区","南部县","蓬安县","营山县","仪陇县","阆中市","西充县"];

        foreach ($array as $value){
            $count=$model->where(["area"=>$value])->count();
            array_push($data,["name"=>$value,"value"=>$count]);
        }

        echo \GuzzleHttp\json_encode($data);
    }
}
