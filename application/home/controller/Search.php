<?php
/**
 * Created by PhpStorm.
 * User: qndzzg
 * Date: 2018/9/1
 * Time: 16:02
 */

namespace app\home\controller;
use think\Db;
use think\Controller;

class Search extends Controller
{
    function searchlist(){
    //    1. 接收表单提交的数据
          $keywords= input('post.keywords');
//           dump($keywords);
        //2. 对商品表进行模糊查询
        $shop = Db::name("shop")
                ->where("GoodsName like '%$keywords%'")
                ->select();
        //3.计算商品数量
        $count=count($shop);
//        dump($count);
        $this->assign("count",$count);
//       dump($shop);
        $this->assign("shop",$shop);
        return $this->fetch();
    }

}