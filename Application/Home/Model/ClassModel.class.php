<?php
namespace Home\Model;
use Think\Model;
class ClassModel extends Model{
    private $class_id;
    private $class_name;
    private $level;
    public $condition;
    public function __construct(){
        $this->condition = array('available'=>1,'parent_id'=>0);
    }
    public function getClassList($fields='*',$condition=array()){
        if (!empty($condition)) {
            $this->condition = array_merge($this->condition,$condition);
        }
        $res = M('class')->field($fields)->where($this->condition)->select();
        return $res;
    }

    //联级分类
    public function getLevlClassList(){
        $parent = $this->getClassList();
        if ($parent) {
            foreach ($parent as &$v) {
                $this->condition['parent_id'] = $v['class_id'];
                $r = M('class')->field('class_id,class_name')->where($this->condition)->select();
                $v['child'] = $r;
            }
            $res = $parent;
        }else{
            $res = 'error';
        }
        return $res;
    }
}
?>
