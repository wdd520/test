<?php
/**
 * Created by PhpStorm.
 * User: qndzzg
 * Date: 2018/9/5
 * Time: 14:52
 */

namespace app\api\controller;
use think\Db;


class Users extends Common
{
     public  function login(){
         $data=$this->params;
//      dump($data);die;
         $res =  db('users')->where('UserName',$data['UserName'])->find();
//         dump($res);die;
         if($res['Pwd']!= $data['Pwd']){
             $this->return_msg(400,"用户名或密码错误");
         }else{
             unset($res['Pwd']);//密码永不返回
             $this->return_msg(200,"登录成功",$res);
         }
     }


}