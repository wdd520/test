<?php
/**
 * Created by PhpStorm.
 * User: qndzzg
 * Date: 2018/9/6
 * Time: 15:54
 */

namespace app\api\controller;
use think\Db;

class Son extends Common
{
    public function showson(){
        $data=$this->params;
        $res =  db('shop')->where('Pid',$data['id'])->select();
//        dump($res);
        foreach($res as $key => $v){
//            $res=Db::table('shop')->where('')->select();
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