<?php

require_once __DIR__.'/../vendor/autoload.php';

use ThenLabs\ComposedAdminLte\Layout;

$page = new Layout;
$page->setBasePath('/assets/');
$page->setTitle('My Title');

$page->navbar->leftMenu->addItem('Home', 'javascript:;');

$page->menu->addItem('Item 1', 'tachometer-alt');
$page->menu->addSubMenu('My SubMenu 1', 'tachometer-alt')
    ->addItem('SubItem 1', 'tachometer-alt', '#', true)
;

$page->main->setContentTitle('My Content Title');

$page->footer->setLeftContent('My <strong>Footer Left Content</strong>');
$page->footer->setRightContent('My Footer Right Content');

echo $page;
