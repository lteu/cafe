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

	$titlePortal = "卡奇诺咖啡 | Kaccino Caffè";
	$desPortal = "欢迎光临卡奇诺咖啡官方网站。";
	$keyPortal = "咖啡,卡奇诺,Kaccino,酒吧,咖啡店";
    set('title', $titlePortal);
    set('description', $desPortal);
    set('keywords', $keyPortal);

    return render('portal.html.php', 'layout/default.html.php');
}


dispatch('/about', 'page_about');
function page_about() {

	$titlePortal = "关于卡奇诺咖啡 |卡奇诺咖啡官方网站 | Kaccino Caffè";
	$desPortal = "";
	$keyPortal = "";
    set('title', $titlePortal);
    set('description', $desPortal);
    set('keywords', $keyPortal);


    return render('about.html.php', 'layout/default.html.php');
}

dispatch('/factory', 'page_fact');
function page_fact() {

	$titlePortal = "卡奇诺的工厂 ｜ 卡奇诺咖啡方网站 | Kaccino Caffè";
	$desPortal = "";
	$keyPortal = "";
    set('title', $titlePortal);
    set('description', $desPortal);
    set('keywords', $keyPortal);


    return render('factory.html.php', 'layout/default.html.php');
}

dispatch('/contact', 'page_contact');
function page_contact() {

	$titlePortal = "联系卡奇诺 | 卡奇诺咖啡官方网站 |Official Kaccino Caffè";
	$desPortal = "";
	$keyPortal = "";
    set('title', $titlePortal);
    set('description', $desPortal);
    set('keywords', $keyPortal);


    return render('contact.html.php', 'layout/default.html.php');
}

dispatch('/talk', 'page_talk');
function page_talk() {

	$titlePortal = "咖啡咨询 | 卡奇诺咖啡 |Official Kaccino Caffè";
	$desPortal = "";
	$keyPortal = "";
    set('title', $titlePortal);
    set('description', $desPortal);
    set('keywords', $keyPortal);


    return render('talk.html.php', 'layout/default.html.php');
}

dispatch('/products', 'page_prod');
function page_prod() {

	$titlePortal = "卡奇诺的产品｜卡奇诺咖啡 |Official Kaccino Caffè";
	$desPortal = "";
	$keyPortal = "";
    set('title', $titlePortal);
    set('description', $desPortal);
    set('keywords', $keyPortal);


    return render('products.html.php', 'layout/default.html.php');
}


run();
?>

