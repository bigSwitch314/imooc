<?php
namespace app\controller;
use app\model\studentModel;

class indexController extends \core\imooc
{
	public function index(){
		$model = new studentModel();
		//$data = array('name'=>'IMOOC2');
		$model->delOne(3);
		$res = $model->lists();
		p($res);
		die;
		$data = array(
            'name'     => 'IMOOC',
            'age'      => '27',
            'hometown' => '北京'
	    );
	    $res = $model->insert('student', $data);
	    p($res);
		$res = $model->select("student", "*");
		p($res);die;
		$sql = "select * from student";
		$res = $model->query($sql);
		p($res->fetchAll());

        $temp = \core\lib\conf::get('controller', 'route');
        p($temp);
        $temp = \core\lib\conf::get('action', 'route');
        p($temp);
        $data = 'Hello Word!';
        $title = '视图文件';
		$this->assign('data', $data);
		$this->assign('title', $title);
		$this->display('index/index.html');
	}
}