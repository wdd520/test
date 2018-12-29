<?php
namespace app\admin\controller;
use think\captcha\Captcha;
use app\admin\model\Users;
use think\Controller;
use think\response;
use think\Db;


class Denglu extends Controller{
    function login(){
        //接受数据
        if(request()->isPost()){
            //实例化验证码类
            $captcha=new Captcha();
            //判断验证码是否输入正确
            if($captcha->check($_POST['code'])){
                //判断用户名和密码，调用users模型
                $users=new Users();
                $info=$users->checkNamePwd($_POST['UserName'],$_POST['Pwd']);
//                dump($info);
                if($info){
                    session("Id",$info['Id']);
                    session("UserName",$info['UserName']);
                    $this->success("正确",'index/index');
                }else{
                    $this->error("用户名或密码错误");
                }

            }else{
                $this->error("验证码错误");
            }

        }
        return  $this->fetch();
}









}
