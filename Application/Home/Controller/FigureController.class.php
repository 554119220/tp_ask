<?php
namespace Home\Controller;
use Think\Controller;
class FigureController extends Controller {
    public function index(){
        $M_Class = D('Class');
        $M_Class->condition['paretn_id'] =0;
        $classlist = $M_Class->getLevlClassList();
        $this->assign('classlist',$classlist);
        $this->assign('ctr',CONTROLLER_NAME);
        $this->display();
    }
}
?>
