<?php
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
 * Форматирование запришваемой страницы
 * 
 * @param type $controllerName название контроллера
 * @param type $actionName название функции обработки страницы
 */
function loadPage($smarty, $controllerName, $actionName) {
 
    include_once PathPrefix . checkAuthStatus($controllerName) . PathPostfix;
    
    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 * 
 * @param type $smarty объект шаблонизатора
 * @param type $templateName название файла шаблона
 */

function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу программы, выводя значение 
 * value 
 * 
 * @param type $value переменная для вывода её на страницу
 * @param type $die
 */

function d($value = null, $die = 1) {
    echo 'Debug: <br/> <pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}

/**
 * Преобразование результата работы функции выборки в ассоциативный массив
 * 
 * @param type $rs набор строк - результат работы SELECT
 * @return boolean
 */

function createSmartyRsArray($rs){
    if(! $rs) return false;
    
    $smartyRs = array();
    while($row = mysql_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
   
    return $smartyRs;
    
}

function checkAuthStatus($controllerName){

    if($controllerName == 'Main'){
        
        if ($_SESSION['email']) {
            $controllerName = 'Main';
        } else {
           $controllerName = 'Index';
        }

    }

    return $controllerName;
}


