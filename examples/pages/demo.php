<?php

use ThenFriends\ComposedAdminLte\Layout;
use ThenFriends\ComposedAdminLte\SmallBox;
use ThenLabs\ComposedViews\TextView;

$page = new Layout;
$page->setBasePath('/assets/'); // required for demos
$page->setTitle('My Title');
$page->setContentTitle('My Content Title');
$page->setContentDescription('My Content Description');
$page->setLeftFooterContent('My Left Footer Content');
$page->setRightFooterContent('My Right Footer Content');

$page->breadcrumb->addItem('Home', '#', 'dashboard');
$page->breadcrumb->addItem('Current Page', '#', 'star', true);

$page->menu->addHeader('MAIN MENU');
$page->menu->addItem('Dashboard', '#', 'dashboard', true);
$page->menu->addItem('User', '#', 'user');
$page->menu->addSubmenu('More', 'link', true, true)
    ->addItem('Item 1', '#', true)
    ->addItem('Item 2', '#')
;

$box1 = new SmallBox('aqua', 'My Title', 'My Description', 'bag', '#', 'More');
$content = new TextView('
    <div class="row">
        <div class="col-lg-4">
        '.$box1.'
        </div>
    </div>
');

$page->content->addChild($content);

echo $page;
