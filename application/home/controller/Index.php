<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    function index(){
        $data =Db::table('shop')->where('Pid',0)->select();
//       dump($data);
        $this->assign("data",$data);
        $ds = count($data);
        for($i=0;$i<$ds;$i++){
            $is = array('Id'=>$data[$i]['Id']);
            $goods = Db::name("shop")->where("Pid",$is['Id'])->select();
            $goos[$i] = $goods;
       }
//   dump($goos);
        $this->assign("goos",$goos);
//        $info =Db::table('information')->where('Id',1)->select();
//   dump($info);
//        $this->assign("info",$info);

        return $this->fetch();
    }
    function showlist($id){
        $data =Db::table('shop')->where('Pid',0)->select();
//       dump($data);
        $this->assign("data",$data);
     if($id == 0){
         return false;
     }
        $dataId = Db::name("shop")->find($id);
//        dump($data);
        $this->assign("dataId",$dataId);
        $ds = count($data);
        for($i=0;$i<$ds;$i++){
            $is = array('Id'=>$data[$i]['Id']);
            $goods = Db::name("shop")->where("Pid",$is['Id'])->select();
            $goos[$i] = $goods;
        }
//dump($goos);
        $this->assign("goos",$goos);

        return $this->fetch();
    }
    function detail($id){
//        echo $id;
        $data =Db::table('shop')->where('Pid',0)->select();
//        dump($data);die;
        $this->assign("data",$data);
        if($id == 0){
            return false;
        }
        $dataId = Db::name("shop")->find($id);
//       dump($dataId);die;
        $this->assign("dataId",$dataId);
        $pid = db('shop')->where('Id',$dataId['Pid'])->find();
//       dump($pid);die;
        $this->assign('pid',$pid);
        $ds = count($data);
        for($i=0;$i<$ds;$i++){
            $is = array('Id'=>$data[$i]['Id']);
            $goods = Db::name("shop")->where("Pid",$is['Id'])->select();
            $goos[$i] = $goods;
        }
        $arr = array(
            'Uid'=>session('Id'),
            'Sid'=>$id
        );
        $or = db('order')->where($arr)->find();
        dump($or);
        $this->assign('order',$or);
//        dump($goos);
        $this->assign("goos",$goos);
        return $this->fetch();
    }
  function addshop($id){
      //添加购物车
      $cartId = Db::name("shop")->find($id);
//       dump($cartId);
      $this->assign("cartId",$cartId);
//      $pid = db('shop')->where('Pid',$cartId['Id'])->find();
//      dump($pid);
      //获取session中的用户名
      $id=session('UserName');
//      dump($id);
      $Uid = Db::name("users")->where("UserName='$id'")->find();
//      dump($Uid);
      $arr=array(
          'Sid'=>$cartId['Id'],
          'Uid'=>$Uid['Id'],
      );
//      dump($arr);
      $z= Db::name("order")->insert($arr);
      if($z){
          $this->success("添加成功",'cart/cart');
      }
  }
//        $d= input('id');
//        dump($d);



}