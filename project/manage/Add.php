<?php
namespace project\manage;
use core\Template;
use core\Db;
use core\tpcl\ComFun\ComFun;
class Add{
    public function add(){
        $temp = new Template();
        //读取数据库
        $temp->display('index');
    }	   
}