<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Index extends Controller
{
    public function index()
    {            
       return $this->fetch();
    }
    
    public function info()
    {
        return $this->fetch();
    }
    function logout(){
        session(null);
        $this->redirect("Denglu/login");
    }

}
