<?php

/**
 * 
 * Файл настроек
 * 
 */

//Константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

// пути к файлами шаблонов (*.tpl)
define('TemplatePrefix', "../views/");
define('TemplatePostfix', '.tpl');

// Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/samrty/cache');
$smarty->setConfigDir('../library/smarty/configs');


