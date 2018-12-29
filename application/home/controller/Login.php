<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/27
 * Time: 15:07
 */

namespace app\home\controller;
use think\Controller;
use think\response;
use think\Db;
class Login extends Controller
{
    function login(){
        if(request()->isPost()){
//            echo 1;
//            dump(request()->isPost());
//            dump($_POST);
            $info=$this->checkNamePwd($_POST['UserName'],$_POST['Pwd']);
//            dump($info);
            if($info){
                session("Id",$info['Id']);
                session("UserName",$info['UserName']);
                $this->success("登录成功",'index/index');
            }else{
                $this->error("用户名或密码错误");
//                dump($info);
            }
        }else{
            return  $this->fetch();
        }


    }
    function checkNamePwd($name,$pwd){
        $info= Db::name('users')->where("UserName='$name'")->find();
        if($info){
            if($info['Pwd']==$pwd){
                return $info;
            }
        }
        return null;
    }
    function register(){
        if(request()->isPost()){
//           dump(input('post.'));
//            dump($_POST['Pwd']);
            dump($_POST['UserName']);
            if($_POST['Pwd'] == $_POST['Ypwd']){
                unset($_POST['Ypwd']);
                $z= Db::name("users")->insert($_POST);
                if($z) {
                    $this->success("注册成功,请登录",'login/login');
                }
            }else{
                $this->error("两次密码不相同",'login/register');
            }
        }
        return  $this->fetch();
    }

}