<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/31
 * Time: 12:15
 */

namespace app\home\controller;
use think\Db;
use think\Controller;

class Order extends Controller
{
    function showorder(){
       $sid=input('id');
        $shop = Db::name("shop")->select($sid);
        $this->assign("shop",$shop);
        $total_amount = 0;
        foreach($shop as $k => $v){
            $total_amount += $v['GoodsPrice'];
          $this->assign("total_amount",$total_amount);
            //从session中得到用户id
            $user_id = session('Id');
            //收货人信息，前台提交的数据
            $Tel = Db::name("users")->find($user_id);
            $this->assign("Tel",$Tel);
            //查询订单编号
            $orderNum=Db::name("order")->field('orderNum')->where("Sid='$sid' && Uid='$user_id'")->find();
            foreach ($orderNum as $k => $v) {

            }
            $this->assign("orderNum",$v);

        }
       return $this->fetch();
    }
   function showsucc($id){
//       dump($id);
       $this->assign("total_amount",$id);
       //从session中得到用户id
       $user_id = session('Id');
       //收货人信息，前台提交的数据
       $Tel = Db::name("users")->find($user_id);
       $this->assign("Tel",$Tel);

     return $this->fetch();

   }

}