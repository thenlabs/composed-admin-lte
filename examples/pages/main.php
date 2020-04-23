<?php

use ThenFriends\ComposedAdminLte\Layout;

$page = new Layout;
$page->setBasePath('/assets/');
$page->setTitle('The Title');
$page->setContentTitle('The Content Title');
$page->setContentDescription('The Content Description');
$page->setLeftFooterContent('The Left Footer Content');
$page->setRightFooterContent('The Right Footer Content');

$page->breadcrumb->addItem('Home', '#', 'dashboard');
$page->breadcrumb->addItem('Current', '#', 'star', true);

$page->menu->addHeader('MAIN MENU');
$page->menu->addItem('Dashboard', '#', 'dashboard', true);
$page->menu->addItem('User', '#', 'user');
$page->menu->addSubmenu('More', 'link', true, true)
    ->addItem('Item 1', '#', true)
    ->addItem('Item 1', '#')
    ->end()
;

echo $page;
