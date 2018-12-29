<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 19:20
 */

namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;


class Admin extends Controller{
    public function showadmin(){
        $data =Db::table('admin')->select();
//        dump($data);
        $this->assign("data",$data);
        return $this->fetch();
    }
    public function addadmin(){
//判断页面是否提交
        //判断页面是否提交
        if (request()->isPost()) {
            dump(input('post.')); //打印接收到的参数
            $file = request()->file('Img');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    echo $info->getSaveName();
                }else{
                    echo $file->getError();
                }
            }
            $filename =  $info->getSaveName();
            $_POST['Img']=$filename;

            $z= Db::name("admin")->insert($_POST);

            if ($z) {
                return $this->success('添加成功', 'showadmin');
            } else {
                return $this->error('添加管理员失败');
            }
            return;
        }
        return $this->fetch();
    }
    public function deladmin($id){
        if($id==0){return false;}
        //echo $id;
        if(Db::name("admin")->delete($id)){
            return $this->success('删除成功','showadmin');
        }else{
            return $this->error('删除失败');
        }
        return;
    }
    public function upadmin($id)
    {
        if ($id == 0) {
            return false;
        }
        //     echo $id;
        //查出要修改的一条数据
        $data = Db::name("admin")->find($id);
        dump($data);
        $this->assign("data", $data);
        if (!empty($_POST)) {
            //  dump($_POST);
            $file = request()->file('Img');
            if(($file->getError()==0)) {
                //图片上传
                $filename = $data['Img'];
                // 移动到框架应用根目录/public/uploads/ 目录下
                if (!file_exists($filename)) {
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                    if ($info) {
                        echo $info->getSaveName();
                    } else {
                        echo $file->getError();
                    }
                    $filenames = $info->getSaveName();
                    $_POST['Img'] = $filenames;
                    dump($filenames);

                } else {
                    unlink($filename);
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                    if ($info) {
                        echo $info->getSaveName();
                    } else {
                        echo $file->getError();
                    }
                    $filename = $info->getSaveName();
                    $_POST['Img'] = $filename;
                    dump($filename);
                }
            }
            $z =   Db::name("admin")->update($_POST);
            if($z){
                return $this->success('修改成功','showadmin');
            }else{
                return $this->error('修改失败');
            }
        } else {
            return $this->fetch();
        }

    }
}