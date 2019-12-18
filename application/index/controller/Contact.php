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
        $this->detail();
        return $this->view->fetch('contact/detail');
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

    public function detail()
    {
        $model = new \app\admin\model\Contact();
        $lists = $model->find()->toArray();
        dd($lists);
        $this->assign('data', $lists);
        return $this->view->fetch();

    }
}
