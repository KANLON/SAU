<?php
/**
 * Created by PhpStorm.
 * 用户登录
 * User: APone
 * Date: 2016/10/29
 * Time: 11:07
 */

if ($_POST) {//是否有post
    if (empty($_POST['userName']) || empty($_POST['password'])) {
        echo "用户或密码不能为空";
        die();
    }

    $userName = htmlspecialchars(trim($_POST['userName'], " "));//获得用户信息
    $password = htmlspecialchars(trim($_POST['password'], " "));


}