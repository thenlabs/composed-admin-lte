<?php

use ThenFriends\ComposedAdminLte\Layout;
use ThenFriends\ComposedAdminLte\SmallBox;
use ThenLabs\ComposedViews\TextView;

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
    ->addItem('Item 2', '#')
    ->end()
;

$grid = new TextView('
    <div class="row">
        <div class="col-lg-3 col-xs-6"></div>
        <div class="col-lg-3 col-xs-6"></div>
        <div class="col-lg-3 col-xs-6"></div>
        <div class="col-lg-3 col-xs-6"></div>
    </div>
');

$box = new SmallBox('aqua', '150', 'my description', 'bag', '#', 'More');
$grid->filter('.col-lg-3.col-xs-6')->first()->append($box->render());

$page->content->addChild($grid);

echo $page;
