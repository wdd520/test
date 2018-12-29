<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/29
 * Time: 19:16
 */

namespace app\home\controller;
use think\Db;
use think\Response;
use think\Request;
use think\Controller;

class Cart extends Controller
{
   function cart(){
      //获取session中的Id
        $Id=session('Id');
        $this->assign("Id",$Id);
       //根据获取到的session中id查询登录用户的购物车商品
            $order = Db::name("order")->where("Uid='$Id'")->select();
//           dump($order);
            foreach($order as $s=>$value){
//           dump($value);
                $this->assign("g",$value);
            }
            $goods=Db::table('order')
                ->alias('o')
                ->join('shop s','o.Sid=s.Id')
                ->select();
//           dump($goods);
            $this->assign("goods",$goods);
//            $Id= $cartId['Id'];
////        dump($Id);
//        }
//        //获取用户在用户表的ID
        return $this->fetch();
   }
    function addcart($id){
//         dump($id);
        $shop = Db::name("shop")->find($id);
//        dump($shop);
        $id=session('UserName');
//        dump($id);
        $Uid = Db::name("users")->where("UserName='$id'")->find();
//        dump($Uid);
        //订单表的数据添加，订单号，随机生成
        $order_sn = "school" . time() . mt_rand(10000, 99999);
//        dump($order_sn);exit;
        $arr=array(
            'Sid'=>$shop['Id'],
            'Uid'=>$Uid['Id'],
            'orderNum'=>$order_sn
        );
//      dump($arr);exit;
        $z= Db::name("order")->insert($arr);
        if($z){
            $this->success("添加成功",'cart');
        }
    }
    function delcart($id){
        if($id==0){return false;}
//        echo $id;
        if(Db::name("order")->delete($id)){
         $this->success('已从购物车移除','cart');
        }
    }



}