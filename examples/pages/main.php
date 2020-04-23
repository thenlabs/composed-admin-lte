<?php

use ThenFriends\ComposedAdminLte\Layout;

$page = new Layout;
$page->setBasePath('/assets/');
$page->setTitle('The Title');
$page->setContentTitle('The Content Title');
$page->setContentDescription('The Content Description');
$page->setLeftFooterText('The Left Footer Content');
$page->setRightFooterText('The Right Footer Content');

$page->breadcrumb->addItem('Home', '#', 'dashboard');
$page->breadcrumb->addItem('Current', '#', 'star', true);

$page->menu->addHeader('MAIN MENU');
$page->menu->addItem('Dashboard', '#', 'dashboard', true);
$page->menu->addItem('User', '#', 'user');

echo $page;
