<?php

function indexAction($smarty) {
    
   $smarty->assign('pageTitle', 'Welcome to NoteHolder');
  
   loadTemplate($smarty, 'index');

}
