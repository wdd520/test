<?php
/**
 * Created by PhpStorm.
 * User: qndzzg
 * Date: 2018/9/7
 * Time: 10:23
 */

namespace app\api\controller;
use think\Db;

class Cart extends Common
{
    public function addcart(){
        $data=$this->params;
            $info = db('order')->insert($data);
            if($info){
                $this->return_msg(200,'添加成功',$info);
            }else{
                $this->return_msg(400,"添加失败");
            }
        }
    public function showcart(){
        $data=$this->params;
//        $res = Db::table('order')
//            ->alias('o')
//            ->join('shop s','o.Sid  = s.Id ')
//            ->select();
        $info = db('order')->where('Uid',$data['Uid'])->select();
        $shops = db('shop')->field('Id,GoodsName,GoodsPrice,Img')->select();
        foreach ($info as $key => $value) {
            // dump($value);
            foreach ($shops as $k => $v) {
                if($value['Sid']==$v['Id']){
                    $v['Img']	= str_replace("\\","/",$v['Img']);
                    $v['selected'] = false;
                    $shopinfo = array_merge($v,$value);
                }
            }
            $res[] = $shopinfo;
        }
//        dump($info);
        if($info){
            $this->return_msg(200,'查询成功',$res);
        }else{
            $this->return_msg(400,"查询失败");
        }
    }
    public function delcart(){
        $data=$this->params;
        $info = db('order')->delete($data);
        if($info){
            $this->return_msg(200,'删除成功');
        }else{
            $this->return_msg(405,'删除失败');
        }
    }

}