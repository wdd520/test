<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 20:26
 */

namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;

class Information extends Controller{
    public function showinfo(){
        $data =Db::table('information')->select();
//        dump($data);
        $this->assign("data",$data);
        return $this->fetch();
    }
    public function addinfo(){
        //判断页面是否提交
        if(request()->isPost()){
            //接收数据
            dump(input('post.'));
            //添加数据
            if(Db('information') -> insert(input('post.'))){
                return $this->success('添加成功','showinfo');
            }else{
                return $this->error('添加失败');
            }
            return;
        }
        //显示视图
        return $this->fetch();

    }
    public function delinfo(){

    }

}