<?php
namespace project\home;
use core\Template;
use core\Db;
use core\tpcl\ComFun\ComFun;
class Index{
    public function index(){
        $temp = new Template();
        //读取数据库
        $netname = Db::query("SELECT id, name FROM k_netname ORDER BY id DESC LIMIT 0, 24");
        $headpic = Db::query("SELECT id, headpic FROM k_headpic ORDER BY id DESC LIMIT 0, 8");
        //$cover = Db::query("SELECT id, cover FROM k_cover ORDER BY id DESC LIMIT 0, 10");
        $sign = Db::query("SELECT id, sign FROM k_sign ORDER BY id DESC LIMIT 0, 8");
        $temp->assign('netname', $netname);
        $temp->assign('headpic', $headpic);
        //$temp->assign('cover', $cover);
        $temp->assign('sign', $sign);
        $temp->display('index');
    }	   
}
/*
使用文档
图片命名
use core\tpcl\ComFun\ComFun;
$s = ComFun::createRandomStr(4);
        
$s = ComFun::createRandomStr(4);
echo date('YmdHis').rand(1000,9999).'.kite_'."$s".".400_400"."<br/>";
$s = ComFun::createRandomStr(4);
echo date('YmdHis').rand(1000,9999).'.kite_'."$s".".400_400"."<br/>";
$s = ComFun::createRandomStr(4);
echo date('YmdHis').rand(1000,9999).'.kite_'."$s".".400_400"."<br/>";
$s = ComFun::createRandomStr(4);
echo date('YmdHis').rand(1000,9999).'.kite_'."$s".".400_400"."<br/>";
//if
{if ($list)}
    {if(count($list)==1)}
    {$list[0]['name']}
    {else}
    {$list[1]['name']}
    {/if}
{/if}   
//循环语句
{foreach($list as $k=>$r)}
{$r['id']}
{/foreach}
*/
?>

