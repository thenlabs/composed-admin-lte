<?php

namespace ThenFriends\ComposedAdminLte\Tests;

use ThenFriends\ComposedAdminLte\Menu;
use ThenFriends\ComposedAdminLte\Tests\TestCase;

setTestCaseNamespace(__NAMESPACE__);
setTestCaseClass(TestCase::class);

testCase('MenuTest.php', function () {
    setUp(function () {
        $this->menu = new Menu;
    });

    test(function () {
        $expected = '<ul class="sidebar-menu" data-widget="tree"></ul>';

        $this->assertXmlStringEqualsXmlString($expected, $this->menu->render());
    });

    testCase(function () {
        setUp(function () {
            $this->text = uniqid('text');
            $this->menu->addHeader($this->text);
        });

        test(function () {
            $expected = '
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">'.$this->text.'</li>
                </ul>
            ';

            $this->assertXmlStringEqualsXmlString($expected, $this->menu->render());
        });
    });
});
