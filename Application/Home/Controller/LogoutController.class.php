<?php
namespace Home\Controller;
use Think\Controller;
class LogoutController extends Controller {
    public function index(){
		cookie('ask_user',null);
		$url = U("login/index");
		header("Location: {$url}");
		exit(0);
    }
}

?>
