<?php

/*
    config.php
    Stores configuration data for our application

*/

//default page values
$title = THIS_PAGE;
$siteName = 'Yummy Cheese Shop';
$slogan = 'All the cheese you could ever want';
$pageHeader = '';


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case'index.php':
        $title = 'Index Page';
        $pageHeader = '';
        
        break;
 
    case'order.php':
        $title = 'Order Page';
        $pageHeader = '';
        
        break;        
        
    case'daily.php':
        $title = 'Daily Specials';
        $pageHeader = '';
        
        break;        
        
    case'contact.php':
        $title = 'Contact Us';
        $pageHeader = '';
        
        break;        
            
}
?>