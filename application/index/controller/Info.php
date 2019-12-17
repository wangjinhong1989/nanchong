<?php

namespace app\index\controller;

use app\admin\model\Article;
use app\common\controller\Frontend;

class Info extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'default';

    public function index()
    {
        $model=new Article();
        $page=$this->request->param("page",1);
        $page_size=$this->request->param("page_size",10);
        $offset=($page-1)*$page_size;
        $lists=$model->with(['articletype'])->where(['articletype.status'=>'显示'])->limit($offset,$page_size)->paginate($page_size,true);
        $this->assign('dataList',$lists);
        $this->assign('page',$lists->render());
        return $this->view->fetch();
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

}
