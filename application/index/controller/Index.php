<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'default';

    public function index()
    {
        $this->assign("dataList",$this->get_count());
        return $this->view->fetch();
    }

    public function test()
    {

        return $this->view->fetch();
    }

    public function get_count(){

        $model = new \app\admin\model\Map();

        $data=$model->where([])->select();

        return \GuzzleHttp\json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    public function count(){

        $model = new \app\admin\model\Map();

        $data=[];
        $array=["顺庆区","高坪区","嘉陵区","南部县","蓬安县","营山县","仪陇县","阆中市","西充县"];

        foreach ($array as $value){
            $count=$model->where(["area"=>$value])->count();
            array_push($data,["name"=>$value,"value"=>$count]);
        }

        return \GuzzleHttp\json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

}
