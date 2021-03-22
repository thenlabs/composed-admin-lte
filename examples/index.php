<?php

require_once __DIR__.'/../vendor/autoload.php';

use ThenLabs\ComposedAdminLte\Layout;
use ThenLabs\ComposedAdminLte\Grid;
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

$box2 = clone $box1;
$box2->setBackgroundColor('success');

$box3 = clone $box1;
$box3->setBackgroundColor('warning');

$box4 = clone $box1;
$box4->setBackgroundColor('danger');

$grid = (new Grid)
    ->row()
        ->col('col-lg-3 col-6')->addChild($box1)->end()
        ->col('col-lg-3 col-6')->addChild($box2)->end()
        ->col('col-lg-3 col-6')->addChild($box3)->end()
        ->col('col-lg-3 col-6')->addChild($box4)->end()
    ->end()
;

$page->main->addChild($grid);

$page->footer->setLeftContent('My <strong>Footer Left Content</strong>');
$page->footer->setRightContent('My Footer Right Content');

echo $page;
