<?php
namespace project\qianming;
use core\Template;
use core\Db;
class index{
    public function index(){
        $temp = new Template();
        //读取数据库
        $sign = Db::query("SELECT id, sign FROM k_sign LIMIT 0, 50");
        $temp->assign('sign', $sign);
        $temp->display('index');   
    }	   
}
/*
图片命名

{if ($list)}
    {if(count($list)==1)}
    {$list[0]['name']}
    {else}
    {$list[1]['name']}
    {/if}
{/if}   
{foreach($list as $k=>$r)}
{$r['id']}
{/foreach}
*/
?>