<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/29
 * Time: 20:02
 */

namespace app\admin\controller;
use think\Db;
use think\Controller;

class Order extends Controller
{
    function showorder(){
        $data = Db::name("order")->select();
//        dump($data);
        foreach($data as $key =>$values){
           $Uid=Db::table('order')
             ->alias('o')
             ->join('users u','o.Uid=u.Id')
             ->field('UserName')
             ->select();
//            dump($Uid);
            foreach($Uid as $u){
//              dump($u);
            }
       $this->assign("u",$u);
//         dump($Uid);exit;
            $Sid=Db::table('order')
                ->alias('o')
                ->join('shop s','o.Sid=s.Id')
//                ->field()
                ->select();
//           dump($Sid);
            $this->assign("Sid",$Sid);
        }
        $this->assign("data",$data);
        return $this->fetch();
    }
    function delorder($id){
        if($id==0){return false;}
        //echo $id;
        if(Db::name("order")->delete($id)){
            return $this->success('删除成功','showorder');
        }else{
            return $this->error('删除失败');
        }
        return;
    }

}