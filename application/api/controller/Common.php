<?php
/**
 * 统一参数过滤，安全控制的类
 */

namespace app\api\controller;
use think\Controller;
use think\Request;
use think\Validate;
class Common extends Controller
{
    protected  $request;
    protected  $validater;
    protected  $params;
    protected $rules=[
        'Users' =>array(
            'login'=>array(
                'UserName' => 'require',
                'Pwd' => 'require'
            ),
            ),
        'Shop'=>array(
                'showlist'=>array(
        ),
        ),
        'Classfly'=>array(
            'showp'=>array(
            ),
        ),
        'Son'=>array(
            'showson'=>array(
                'id' => 'require'
            ),
        ),
        'Detail'=>array(
            'showdetail'=>array(
                'id' => 'require',
                'Uid'=>'require'
            ),
        ),
        'Cart'=>array(
            'addcart'=>array(
                'Sid'=>'require',
                'Uid'=>'require'
            ),
            'showcart'=>array(
                'Uid'=>'require'
            ),
            'delcart'=>array(
                'Id'=>'require'
            ),
        ),

    ];
    function _initialize(){
        parent::_initialize();//调用父类初始化方法，避免功能缺失
        $this->request = Request::instance();
        //检测时间戳
//        $this->check_time($this->request->only(['time']));
        //检测token
//        $this->check_token($this->request->param());
        //每个接口所需参数检测
       $this->params = $this->check_params($this->request->param());


    }
    function check_time($arr){
        if(!isset($arr['time'])||intval($arr['time'])<=1){
            $this->return_msg(400,"时间戳不正确");
        }
        if(time()-intval($arr['time']) > 60){
            $this->return_msg(400,'请求超时');
        }
    }
    function check_token($arr){
        if(!isset($arr['token']) || intval($arr['token'])){
            $this->return_msg(400,"token不能为空");
        }
        $app_token = $arr['token'];//app传送过来的token
        unset($arr['token']);
        //后台生成token
        $server_token = "";
        foreach($arr as $k=>$v){
            $server_token .=md5($v);
        }
        $server_token = md5("sun_".$server_token."_flower");
        echo $server_token;
        if($app_token != $server_token){
            $this->return_msg(400,"token值不正确");
        }
    }
    function check_params($arr){
      //dump($arr);
       // dump($this->request->action());
        $rules = $this->rules[$this->request->controller()][$this->request->action()];
        $this->validater = new Validate($rules);
            //检测不成功，返回错误信息
    //dump($this->validater->check($arr));
        if(!($this->validater->check($arr))){
            $this->return_msg(400,$this->validater->getError());
        }
        //检测成功返回数组
        return $arr;

    }
    function return_msg($code,$msg="",$data=[]){
        $return_data['code'] = $code;
        $return_data['msg'] = $msg;
        $return_data['data'] = $data;
        echo json_encode($return_data);
        die;
    }

    /**
     * 验证参数 参数过滤
     * @param  [array] $arr [除time和token外的所有参数]
     * @return [return]      [合格的参数数组]
     */

    public function upload_file($file, $type = '')
    {
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if ($info) {
            $path = '/uploads/' . $info->getSaveName();
            /*********** 裁剪图片  ***********/
            if (!empty($type)) {
                $this->image_edit($path, $type);
            }
            return str_replace('\\', '/', $path);
        } else {
            $this->return_msg(400, $file->getError());
        }
        return $info;
    }

    public function image_edit($path, $type)
    {
        $image = Image::open(ROOT_PATH . 'public' . $path);
        switch ($type) {
            case 'head_img':
                $image->thumb(150, 150, Image::THUMB_CENTER)->save(ROOT_PATH . 'public' . $path);
                break;
            case 'chat_img':
                $image->save(ROOT_PATH . 'public' . $path);
                break;
        }
    }

}