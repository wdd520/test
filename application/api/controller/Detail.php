<?php
/**
 * Created by PhpStorm.
 * User: qndzzg
 * Date: 2018/9/6
 * Time: 17:27
 */

namespace app\api\controller;
use think\Db;

class Detail extends Common
{
    public function showdetail(){
        $data=$this->params;
//        dump($data);
        $res =  db('shop')->where('id',$data['id'])->find();
        $res['Img'] = str_replace('\\','/',$res['Img']);
        if(!empty($res)){
            $result = db('order')
                ->where('Sid',$res['Id'])
                ->where('Uid',$data['Uid'])
                ->find();
            if(!empty($result)){
                $res['cart'] = true;
                $this->return_msg(200,"查询成功",$res);
            }else{
                $res['cart'] = false;
                $this->return_msg(200,"查询成功",$res);
            }
        }else{
            $this->return_msg(200,"查询成功",$res);
        }




    }

}