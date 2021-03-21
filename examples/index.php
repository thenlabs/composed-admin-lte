<?php

require_once __DIR__.'/../vendor/autoload.php';

use ThenLabs\ComposedAdminLte\Layout;
use ThenLabs\ComposedAdminLte\Dashboard\SmallBox;

$page = new Layout;
$page->setBasePath('/assets/');
$page->setTitle('My Title');

$page->navbar->leftMenu->addItem('Home', 'javascript:;');

$page->menu->addItem('Item 1', 'tachometer-alt');
$page->menu->addSubMenu('My SubMenu 1', 'tachometer-alt', true, true)
    ->addItem('SubItem 1', 'tachometer-alt', '#')
    ->addItem('SubItem 2', 'tachometer-alt', '#', true)
;

$page->main->breadcrumb->addItem('Item 1')->addItem('Item 2');
$page->main->setContentTitle('My Content Title');

$box1 = new SmallBox;
$box1->setMainText('100');
$box1->setSecondaryText('my secondary text');
$box1->setIcon('bag');

$page->main->addChild($box1);

$page->footer->setLeftContent('My <strong>Footer Left Content</strong>');
$page->footer->setRightContent('My Footer Right Content');

echo $page;
