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
                    $this->layoutView = new HtmlPage($this->layout->render());
                });

                $tests();
            });
        });

        test('has the title data', function () {
            $this->assertViewHasData('title', $this->layout);
        });

        testCase('sets a title to the layout', function () {
            setUp(function () {
                $this->title = uniqid();
                $this->layout->setTitle($this->title);
            });

            useMacro('the view of the layout', function () {
                test('has the expected title', function () {
                    $this->assertEquals($this->title, $this->layoutView->getTitle());
                });
            });
        });
    });
});
