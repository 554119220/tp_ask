<?php
namespace Home\Controller;
use Think\Controller;
class TagController extends Controller {
    public function index(){
        $this->assign('ctr',CONTROLLER_NAME);
        $this->display();
    }
}
?>
