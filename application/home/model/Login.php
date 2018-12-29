<?php

/**
 * Created by PhpStorm.
 * User: ok
 * Date: 2018/6/7
 * Time: 9:29
 */
namespace app\admin\model;
use think\Model;
use think\Db;
class Users extends Model
{
    function checkNamePwd($name,$pwd){
        $info= Db::name('users')->where("userName='$name'")->find();
        if($info){
            if($info['Pwd']==$pwd){
                return $info;
            }
        }
        return null;
    }
//    function logout(){
//        session(null);
//        $this->redirect("Users/login");
//    }

}