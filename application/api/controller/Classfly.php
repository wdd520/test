<?php
/**
 * Created by PhpStorm.
 * User: qndzzg
 * Date: 2018/9/6
 * Time: 14:44
 */

namespace app\api\controller;
use think\Db;

class Classfly extends Common
{
    public function showp(){
        $data=$this->params;
        $res=Db::table('shop')->field('id,GoodsName,Pid')->select();
//        dump($res);
        if(empty($res)){
            $this->return_msg(400,"查询失败");
        }else{
            $this->return_msg(200,"查询成功",$res);

        }

    }

}