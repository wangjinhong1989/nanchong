<?php

namespace app\admin\model;

use think\Model;


class Map extends Model
{

    

    

    // 表名
    protected $name = 'map';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'create_time_text',
        'area_text'
    ];
    

    
    public function getAreaList()
    {
        return ['顺庆区' => __('顺庆区'), '高坪区' => __('高坪区'), '嘉陵区' => __('嘉陵区'), '南部县' => __('南部县'), '蓬安县' => __('蓬安县'), '营山县' => __('营山县'), '仪陇县' => __('仪陇县'), '阆中市' => __('阆中市'), '西充县' => __('西充县')];
    }


    public function getCreateTimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['create_time']) ? $data['create_time'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }


    public function getAreaTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['area']) ? $data['area'] : '');
        $list = $this->getAreaList();
        return isset($list[$value]) ? $list[$value] : '';
    }

    protected function setCreateTimeAttr($value)
    {
        return $value === '' ? null : ($value && !is_numeric($value) ? strtotime($value) : $value);
    }


}
