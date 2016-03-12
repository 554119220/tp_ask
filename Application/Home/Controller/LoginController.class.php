<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $user=cookie('ask_user');
        if(!empty($user['uid'])) $this -> error('您已经登录,正在跳转到主页',U("index/index"));
        $this -> display();
    }

    public function login(){
		$username = isset($_POST['user'])?trim($_POST['user']):'';
		$password = isset($_POST['password'])?password(trim($_POST['password'])):'';
		$remember = isset($_POST['remember'])?$_POST['remember']:0;
		if ($username=='') {
			$this -> error('用户名不能为空！',U("login/index"));
		} elseif ($password=='') {
			$this -> error('密码必须！',U("login/index"));
		}

		$model = M("Users");
		$user = $model ->field('user_id,user_name')-> where(array('user_name'=>$username,'password'=>$password)) -> find();
		if($user) {
			if($remember){
				cookie('ask_user',$user,3600*24*365);//记住我
			}else{
				cookie('ask_user',$user);
			}
			if($user){
                addlog('登录成功。');
                $url=U('index/index');
				header("Location: $url");
				exit(0);
			}
		}else{
			addlog('登录失败。',$username);
			$this -> error('登录失败，请重试！',U("login/index"));
		}
    }
}

?>
