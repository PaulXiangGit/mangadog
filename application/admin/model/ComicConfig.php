<?php

namespace app\admin\model;

use think\Model;

class ComicConfig extends Model
{
    // 表名
    protected $name = 'comic_config';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    
    // 追加属性
    protected $append = [
        'status_text'
    ];
    

    
    public function getStatusList()
    {
        return ['1' => __('Status 1'),'0' => __('Status 0')];
    }     


    public function getStatusTextAttr($value, $data)
    {        
        $value = $value ? $value : $data['status'];
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }




    public function classification()
    {
        return $this->belongsTo('Classification', 'main_subject', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}
