<?php

include_once('../admin/model.php');

class control extends model
{
    function __construct()
    {
        model::__construct();

        date_default_timezone_set("asia/calcutta");

        $url=$_SERVER['PATH_INFO'];
        switch($url)
        {
            case'/index':
            include_once('index.php');
            break;

            case'/login':
            include_once('login.php');
            break;

            case'/signup':
            include_once('signup.php');
            break;

            case'/product':
            include_once('product.php');
            break;

            case'/contact':
            include_once('contact.php');
            break;

            case'/blog':
            include_once('blog.php');
            break;

            case'/blog_detail':
            include_once('blog_detail.php');
            break;

            case'/about':
            include_once('about.php');
            break;

            case'/checkout':
            include_once('checkout.php');
            break;

            case'/cart':
            include_once('cart.php');
            break;

            case'/detail':
            include_once('detail.php');
            break;
        }
    }
}
$obj=new control;
?>