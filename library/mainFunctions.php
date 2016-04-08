<?php
/**
 * Форматирование запришваемой страницы
 * 
 * @param type $controllerName название контроллера
 * @param type $actionName название функции обработки страницы
 */
function loadPage($smarty, $controllerName, $actionName = 'index') {
 
    include_once PathPrefix . checkAuthorisationStatus($controllerName) . PathPostfix;
    
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

function checkAuthorisationStatus($controllerName){
    $check = $_SESSION['email'];

    if($controllerName == 'Main'){
        
        if ($check) {
            $controllerName = 'Main';
        } else {
           $controllerName = 'Index';
        }

    }

    return $controllerName;
}


