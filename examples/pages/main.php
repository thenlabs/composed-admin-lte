<?php

use ThenFriends\ComposedAdminLte\Layout;

$page = new Layout;
$page->setBasePath('/assets/');
$page->setTitle('My Title');
$page->setContentTitle('My Content Title');
$page->setContentDescription('My Content Description');
$page->setLeftFooterText('My Left Footer Text');
$page->setRightFooterText('My Right Footer Text');

echo $page;
