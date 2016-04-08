<?php

include_once '../models/UsersModel.php';

/**
 * Получение входных данных
 * 
 * @return type массив входных данных
 */
function requestParams(){
    $reqData = null;
    
    $reqData['email'] = isset($_REQUEST['email']) ? trim($_REQUEST['email']) : null;
    $reqData['pwd1'] = isset($_REQUEST['pwd1']) ? trim($_REQUEST['pwd1']) : null;
    $reqData['pwd2'] = isset($_REQUEST['pwd2']) ? trim($_REQUEST['pwd2']) : null;
    $reqData['name'] = $reqData['email'];

    return $reqData;
}

/**
 * AJAX регистрация пользователя
 * Инициализация сессионной переменной ($_SESSION['user'])
 * 
 */

function registerAction(){
    $requestData = requestParams();
    
    $resData = null;
    $resData = checkRegisterParams($requestData['email'], $requestData['pwd1'], $requestData['pwd2']);
    
    // если введены все данные, 
    // проверяется наличие введенного email в БД
    if(! $resData && checkUserEmail($requestData['email'])){
        $resData['success'] = false;
        $resData['message'] = "User with email '{$requestData['email']}' is already registered.";
    }
    if(! $resData){
        $pwdMD5 = md5($requestData['pwd1']);
        
        $resData = registerNewUser($requestData['email'], $pwdMD5, $requestData['name']);
        if($resData['success']){
            $resData['message'] = 'Register successful';
        } else{
            $resData['success'] = false;
            $resData['message'] = 'Register error';
        }
    } 
    
    echo json_encode($resData);
}
/**
 * AJAX авторизация пользователя
 * 
 */
function authoriseAction(){
    $requestData = requestParams();
    
    $pwdMD5 = md5($requestData['pwd1']);
    
    $resData = null;
    $resData = checkPwd($requestData['pwd1'], $resData);
    $resData = checkEmail($requestData['email'], $resData);
    if(! $resData){
        $resData = null;
        $resData = checkAuthoriseParams($requestData['email'], $pwdMD5);
        if($resData){
            $resData['success'] = true;
            $resData['message'] = 'Success';
            $_SESSION['email'] = $requestData['email'];
        } else{
            $resData['success'] = false;
            $resData['message'] = 'Authorisation failed';
        }
    }
    
    echo json_encode($resData);
}

function logoutAction(){
    unset($_SESSION['email']);
    $j_data = true;

    echo json_encode($j_data);
}