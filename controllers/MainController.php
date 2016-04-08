<?php

function indexAction($smarty){
 
    $smarty->assign('pageTitle', 'NoteHolder'); 
    
    loadTemplate($smarty, 'main');
}

