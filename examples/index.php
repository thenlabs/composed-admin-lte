<?php

require_once __DIR__.'/../vendor/autoload.php';

use ThenLabs\ComposedAdminLte\Layout\Layout;

$page = new Layout;
$page->setBasePath('/assets/');
$page->setTitle('My Title');
$page->setContentTitle('My Content Title');

$page->footer->setLeftContent('<strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.');
$page->footer->setRightContent('Anything you want');

echo $page;
