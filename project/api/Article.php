<?php
namespace project\api;
use core\Db;
class Article{
    /**
     * Account::verifyAdminLogin()
     * 后台登录验证接口
     * @param userName 用户名  passWord 密码
     * @return array['status'返回结果代码info返回结果详情]
     */
    public function addArticle(){  
        $res = [];
        $input = input();
        if (!empty($input['newsName']) && !empty($input['abstract']) && !empty($input['content'])  && !empty($input['classify']) && isset($input['newsStatus']) && !empty($input['newsTime'])) {
            $res_add =  Db::execute("INSERT INTO `k_article` (`title`, `add_date`, `content`, `author`, `abstract`, `classify`, `newsStatus`) VALUES ('$input[newsName]', '$input[newsTime]', '$input[content]', '$input[classify]', 'admin', '$input[newsStatus]', '$input[newsStatus]')");
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
        echo json_encode($res);  
    }
}
?>