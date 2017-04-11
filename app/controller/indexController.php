<?php
namespace app\controller;

class indexController extends \core\imooc
{
	public function index(){
		p('This is index action');
		$model = new \core\lib\model();
		$sql = "select * from student";
		$res = $model->query($sql);
		p($res->fetchAll());

        $temp = \core\lib\conf::get('controller', 'route');
        p($temp);
        $temp = \core\lib\conf::get('action', 'route');

        $data = 'Hello Word!';
        $title = '视图文件';
		$this->assign('data', $data);
		$this->assign('title', $title);
		$this->display('index/index.html');
	}
}