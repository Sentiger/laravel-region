<?php

namespace Yiche\Region;

class Region
{
    public function getAll()
    {
        //todo 可以加入缓存
        return \Yiche\Region\Models\Region::get();
    }

    public function getAllFormatTree()
    {
        return self::tree($this->getAll()->toArray(), 'children', '', 'parent_code', 'code');
    }

    public function getOneByCode($code)
    {
        return \Yiche\Region\Models\Region::where('code', $code)->first();
    }

    public function tree($list, $name = 'children', $pid = 0, $pidField = 'pid', $selfId = 'id')
    {
        $arr = [];
        foreach ($list as $k => $v) {
            if ($v[$pidField] == $pid) {
                $v[$name] = self::tree($list, $name, $v[$selfId], $pidField, $selfId);
                $arr[]    = $v;
            }
        }
        return $arr;
    }

}