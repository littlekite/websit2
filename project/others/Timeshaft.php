<?php
namespace project\others;
use core\Template;
class TimeShaft{
    public function timeShaft(){
        $temp = new Template();
        $temp->display('index');   
    }	   
}