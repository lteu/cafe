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
    return render('portal.html.php', 'layout/default2.html.php');
}



dispatch('/about', 'page_about');
function page_about() {
    return render('about.html.php', 'layout/default.html.php');
}

dispatch('/factory', 'page_fact');
function page_fact() {
    return render('factory.html.php', 'layout/default.html.php');
}

dispatch('/contact', 'page_contact');
function page_contact() {
    return render('contact.html.php', 'layout/default.html.php');
}

dispatch('/talk', 'page_talk');
function page_talk() {
    return render('talk.html.php', 'layout/default.html.php');
}

dispatch('/products', 'page_prod');
function page_prod() {
    return render('products.html.php', 'layout/default.html.php');
}


run();
?>

