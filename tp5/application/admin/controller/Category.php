<?php
namespace app\admin\controller;
use function MongoDB\BSON\toJSON;
use think\Controller;
use think\Request;

class Category extends Controller
{
    private  $obj;
    public function _initialize() {
        $this->obj = model("Category");
    }
    public function index()
    {
        return $this->fetch();
    }
    public function add()
    {

        return $this->fetch();
    }

    public function save()
    {
//        $res = Request::instance()->post();
//        var_dump($res);
        $this->obj->data([
            'name' => input('post.Name'),
            'parent_id' => input('post.category')
                         ]);
        $res = $this->obj->save();
        if($res){
            return  '添加成功';
        }else{
            return '失败';
        }
    }

    public function select()
    {
        $res = $this->obj->field('id,name')->where('parent_id','=',0)->select();
        return ($res);
//        $res = new \app\admin\model\Category();
//        $re = \app\admin\model\Category::select();

//        var_dump($res);
    }
}
