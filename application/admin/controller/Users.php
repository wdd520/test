<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;

class Users extends Controller
{
    public function showusers(){
       $data = Db::name("users")->select();
     //dump($data);
       $this->assign("data",$data);
     //   $this->assign("count",count($data));
        return $this->fetch();
    }

    public function addusers(){
        //判断页面是否提交
        if(request()->isPost()){
            //接收数据
            dump(input('post.'));
            //添加数据
            if(Db('users') -> insert(input('post.'))){
                return $this->success('添加成功','showusers');
            }else{
                return $this->error('添加管理员失败');
            }
            return;
        }
        //显示视图
        return $this->fetch();

    }

    public function delusers($id){
        if($id==0){
            return false;
        }
        //echo $id;
        if(Db::name("users")->delete($id)){
            return $this->success('删除成功','showusers');
        }else{
            return $this->error('删除失败');
        }
        return;
    }

    public function saveusers($id){
        if ($id == 0) {
            return false;
        }
   //     echo $id;
        //查询点击的数据
        $data = Db::name("users")->find($id);
        dump($data);
        //将数据显示在修改页面
        $this->assign("data",$data);
        //判断接收数据是否为空
        if (!empty($_POST)) {
            dump($_POST);
            //修改内容
          $data = Db::name("users")->setField($_POST);
            if($data){
                return $this->success('修改成功','showusers');
            }else{
                return $this->error('修改失败');
            }
        } else {
            return $this->fetch();
        }

    }


    


}
