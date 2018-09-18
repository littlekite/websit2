<?php
namespace project\wangming;
use core\Template;
use core\Db;
class index{
    public function index(){
        $temp = new Template();
        //读取数据库
        $netname = Db::query("SELECT id, name FROM k_netname LIMIT 0, 50");
        $temp->assign('netname', $netname);
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