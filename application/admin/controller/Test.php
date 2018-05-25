<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Test extends Controller {
    public function index() {
        $resData=Db::table('think_test')->insert(['username'=>"sdfasdfasd",'id'=>1]);
        dump($resData);

    }
}
?>