<?php
namespace app\controller;
use app\model\studentModel;

class indexController extends \core\imooc
{
	public function index(){
		$model = new studentModel();

		/*$res = $model->select("student", "*");
		$sql = "select * from student";
		$res = $model->query($sql);
		p($res->fetchAll());

        $temp = \core\lib\conf::get('controller', 'route');
        p($temp);
        $temp = \core\lib\conf::get('action', 'route');
        p($temp);*/
        $data = 'Hello Word!';
        //$title = '视图文件';
		$this->assign('data', $data);
		//$this->assign('title', $title);
		$this->display('index/index.html');
	}

	public function test(){
		$data = 'Test!';
		$this->assign('data', $data);
		$this->display('index/test.html');
	}
}