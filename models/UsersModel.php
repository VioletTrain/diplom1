<?php

/**
 * Модель для таблицы пользователей(users)
 * 
 */

/**
 * Регистрация нового пользователя
 * 
 * @param type $email   почта
 * @param type $pwdMD5  пароль в МД5
 * @param type $name    имя пользователя
 */
function registerNewUser($email, $pwdMD5, $name){
    $email  = htmlspecialchars(mysql_real_escape_string($email));
    $name   = htmlspecialchars(mysql_real_escape_string($name));
    
    $sql = "INSERT INTO
            users (`email`, `pwd`, `name`)
            VALUES ('{$email}', '{$pwdMD5}', '{$name}')";
    
    $rs = mysql_query($sql);
        
    if($rs){
        $sql = "SELECT * FROM users
                WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}')
                LIMIT 1";
                
        $rs = mysql_query($sql);
        $rs = createSmartyRsArray($rs);
        
        if(isset($rs[0])){
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }
    } else {
        $rs['success'] = 0;
    }
    
    return $rs;
}

function checkIncData($chData, $res){

    if(! $chData){
        $res['success'] = false;
        $res['message'] = 'Fill in all the fields';
    } 

    return $res;
}

function checkPwd_1_2($pwd1, $pwd2, $res){
 
    if($pwd1 != $pwd2){
        $res['success'] = false;
        $res['message'] = 'Passwords don`t match';
    }

    return $res;
}


/**
 * Проверка параметров регистрации пользователя
 * 
 * @param type $email 
 * @param type $pwd1
 * @param type $pwd2 повтор пароля
 * @return string результат
 */
function checkRegisterParams($email, $pwd1, $pwd2){
    $res = null;
    $res = checkPwd_1_2($pwd1, $pwd2, $res);
    $res = checkIncData($pwd2, $res);
    $res = checkIncData($pwd1, $res);
    $res = checkIncData($email, $res);
    
    return $res;
}

/**
 * Проверка почты(есть ли email в БД)
 * 
 * @param type $email
 */
function checkUserEmail($email){
    $email = mysql_real_escape_string($email);
    $sql = "SELECT `id` FROM users WHERE `email` = '{$email}'";
          
    $rs = mysql_query($sql);
    $rs = createSmartyRsArray($rs);
    
    return $rs;
}

/**
 * Проверка введенных данных при авторизации
 * 
 * @param type $email  
 * @param type $pwd1    
 * @return type
 */
function checkAuthoriseParams($email, $pwd1){
    $email  = htmlspecialchars(mysql_real_escape_string($email));
    $pwd1   = htmlspecialchars(mysql_real_escape_string($pwd1));
    
    $sql = "SELECT `id` FROM users WHERE `email` = '{$email}' and `pwd` = '{$pwd1}'";
    
    $rs = mysql_query($sql);
    $rs = createSmartyRsArray($rs);
    
    return $rs;
}
