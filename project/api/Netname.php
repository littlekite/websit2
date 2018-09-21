<?php
namespace project\api;
use core\Db;
class NetName{
    /**
     * Account::verifyAdminLogin()
     * 后台登录验证接口
     * @param userName 用户名  passWord 密码
     * @return array['status'返回结果代码info返回结果详情]
     */
    public function addNetName(){  
        $res = [];
        $input = input();
        if (!empty($input['name'])) {
            $res_add =  Db::execute("INSERT INTO `k_netname` (`name`) VALUES ('$input[name]')");
            if ($res_add) {
                $res['status'] = 1;//失败
                $res['info'] = "添加成功"; 
            } else {
                $res['status'] = 2;//失败
                $res['info'] = "添加失败"; 
            }
        } else {
            $res['status'] = 2;//失败
            $res['info'] = "参数不全"; 
        }
        return $res;  
    }
}
?>