<?php
/**
 * Index php page
 * 
 * Developer: Liu Tong
 * Email: granwit@gmail.com
 * all rights reserved
*/

require_once 'lib/limonade.php';


/* -----------------------------------
      USER  CLIENT
*  ----------------------------------- */

//show portal page
dispatch('/', 'page_portal');
function page_portal() {
    return render('portal.html.php', 'layout/default.html.php');
}



run();
?>

