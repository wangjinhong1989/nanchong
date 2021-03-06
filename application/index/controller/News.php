<?php

namespace app\index\controller;

use app\admin\model\Article;
use app\common\controller\Frontend;
use think\Db;

class News extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'default';

    public function index()
    {
        $model = new Article();
        $page = $this->request->param("page", 1);
        $page_size = $this->request->param("page_size", 1);
        $offset = ($page - 1) * $page_size;

        $lists = $model->with(['articletype'])->where(['articletype.status' => '显示','articletype.name'=>'新闻列表'])->limit($offset, $page_size)->paginate($page_size, true);
        $this->assign('dataList', $lists);
        $this->assign('page', $lists->render());
        return $this->view->fetch();
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

    public function detail()
    {
        $model = new Article();
        $id = $this->request->param("id", 0);

        $lists = $model->with(['articletype'])->where(['articletype.status' => '显示', 'article.id' => $id])->find()->toArray();
        dd($lists);
        $this->assign('data', $lists);
        //  更新
        if($lists){
            $info=$model->where(['id'=>$id])->find();
            $info->read_count=$info->read_count+1;
            $info->save();
        }
        return $this->view->fetch();

    }
}
