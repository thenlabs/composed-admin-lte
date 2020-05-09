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

$box1 = new SmallBox('aqua', '150', 'my description', 'bag', '#', 'More');
$box2 = new SmallBox('green', '150', 'my description', 'bag', '#', 'More');
$box3 = new SmallBox('yellow', '150', 'my description', 'bag', '#', 'More');
$box4 = new SmallBox('red', '150', 'my description', 'bag', '#', 'More');

$page->content->addChild(new TextView('
    <div class="row">
        <div class="col-lg-3 col-xs-6">'.$box1.'</div>
        <div class="col-lg-3 col-xs-6">'.$box2.'</div>
        <div class="col-lg-3 col-xs-6">'.$box3.'</div>
        <div class="col-lg-3 col-xs-6">'.$box4.'</div>
    </div>
    <div class="row">
        <div class="col-sm-12"></div>
    </div>
'));

echo $page;
