<?php
namespace project\home;
use core\Template;
use core\Db;
use core\tpcl\UserInfo\UserInfo;
class index{
    public function index(){
        $temp = new Template();
        //读取数据库
        $netname = Db::query("SELECT id, name FROM k_netname LIMIT 0, 12");
        $headpic = Db::query("SELECT id, headpic FROM k_headpic LIMIT 0, 4");
        $cover = Db::query("SELECT id, cover FROM k_cover LIMIT 0, 10");
        $sign = Db::query("SELECT id, sign FROM k_sign LIMIT 0, 10");
        $temp->assign('netname', $netname);
        $temp->assign('headpic', $headpic);
        $temp->assign('cover', $cover);
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

