<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Contact extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'default';

    public function index()
    {

        $model = new \app\admin\model\Contact();
        $lists = $model->find()->toArray();
        dd($lists);
        if(empty($lists['files'])){
            $lists['files']=[];
        }else $lists['files']=explode(',',$lists['files']);

        $this->assign('data', $lists);
        return $this->view->fetch();
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

    public function detail()
    {

    }
}
