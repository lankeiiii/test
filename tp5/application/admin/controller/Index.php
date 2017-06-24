<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function map()
    {
        print_r( \Map::getLngLat('北京市'));
    }
    public function welcome()
    {
        return $this->fetch();
    }

}
