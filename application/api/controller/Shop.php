<?php
/**
 * Created by PhpStorm.
 * User: qndzzg
 * Date: 2018/9/5
 * Time: 16:15
 */

namespace app\api\controller;
use think\Db;
class Shop extends Common
{
    public function showlist(){
        $data=$this->params;
//        dump($data);
        $res=Db::table('shop')->field('id,GoodsName,GoodsPrice,Img')->select();
//        dump($res);
        foreach($res as $key => $v){
            $v['Img'] = str_replace('\\','/',$v['Img']);
//            dump($v);
            $info[] = $v;
        }
        if(empty($info)){
            $this->return_msg(400,"查询失败");
        }else{
            $this->return_msg(200,"查询成功",$info);

        }

    }

}