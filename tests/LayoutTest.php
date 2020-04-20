<?php

namespace ThenFriends\ComposedAdminLte\Tests;

use ThenFriends\ComposedAdminLte\Layout;
use ThenFriends\ComposedAdminLte\Tests\TestCase;
use Wa72\HtmlPageDom\HtmlPageCrawler;
use Wa72\HtmlPageDom\HtmlPage;
use Closure;

setTestCaseNamespace(__NAMESPACE__);
setTestCaseClass(TestCase::class);

testCase('LayoutTest.php', function () {
    testCase('a layout is created', function () {
        setUp(function () {
            $this->layout = new Layout;
        });

        createMacro('the view of the layout', function (Closure $tests) {
            testCase('the view of the layout', function () use ($tests) {
                setUp(function () {
                    $this->layoutView = new HtmlPageCrawler($this->layout->render());
                });

                $tests();
            });
        });

        test('has the title data', function () {
            $this->assertViewHasData('title', $this->layout);
        });

        useMacro('the view of the layout', function () {
            testCase(function () {
                test('has the expected styles', function () {
                    $expected = [
                        'bower_components/bootstrap/dist/css/bootstrap.min.css',
                        'bower_components/font-awesome/css/font-awesome.min.css',
                        'bower_components/Ionicons/css/ionicons.min.css',
                        'thenfriends/composed-admin-lte/css/AdminLTE.min.css',
                        'thenfriends/composed-admin-lte/css/skins/skin-blue.min.css',
                    ];

                    foreach ($expected as $uri) {
                        $this->assertCount(1, $this->layoutView->filter("link[href$=\"{$uri}\"]"));
                    }
                });
            });

            testCase(function () {
                test('has the expected scripts', function () {
                    $expected = [
                        'bower_components/jquery/dist/jquery.min.js',
                        'bower_components/bootstrap/dist/js/bootstrap.min.js',
                        'thenfriends/composed-admin-lte/js/adminlte.min.js',
                    ];

                    foreach ($expected as $uri) {
                        $this->assertCount(1, $this->layoutView->filter("script[src$=\"{$uri}\"]"));
                    }
                });
            });
        });

        testCase('sets a title to the layout', function () {
            setUp(function () {
                $this->title = uniqid();
                $this->layout->setTitle($this->title);
            });

            useMacro('the view of the layout', function () {
                test('has the expected title', function () {
                    $page = new HtmlPage($this->layoutView->saveHTML());
                    $this->assertEquals($this->title, $page->getTitle());
                });
            });
        });
    });
});
