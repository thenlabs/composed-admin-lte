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

    testCase(function () {
        setUp(function () {
            $this->text1 = uniqid();
            $this->link1 = uniqid();
            $this->icon1 = uniqid();

            $this->menu->addItem($this->text1, $this->link1, $this->icon1);
        });

        test(function () {
            $expected = '
                <ul class="sidebar-menu" data-widget="tree">
                    <li><a href="'.$this->link1.'"><i class="fa fa-'.$this->icon1.'"></i> <span>'.$this->text1.'</span></a></li>
                </ul>
            ';

            $this->assertXmlStringEqualsXmlString($expected, $this->menu->render());
        });
    });

    testCase(function () {
        setUp(function () {
            $this->text1 = uniqid();
            $this->link1 = uniqid();
            $this->icon1 = uniqid();

            $this->menu->addItem($this->text1, $this->link1, $this->icon1, true);
        });

        test(function () {
            $expected = '
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="active"><a href="'.$this->link1.'"><i class="fa fa-'.$this->icon1.'"></i> <span>'.$this->text1.'</span></a></li>
                </ul>
            ';

            $this->assertXmlStringEqualsXmlString($expected, $this->menu->render());
        });
    });

    testCase(function () {
        setUp(function () {
            $this->text1 = uniqid();
            $this->link1 = uniqid();
            $this->icon1 = uniqid();

            $this->text2 = uniqid();
            $this->link2 = uniqid();

            $this->text3 = uniqid();
            $this->link3 = uniqid();

            $this->submenu = $this->menu->addSubMenu($this->text1, $this->link1, $this->icon1);
            $this->submenu->addItem($this->text2, $this->link2);
            $this->submenu->addItem($this->text3, $this->link3);
        });

        test(function () {
            $this->assertSame($this->menu, $this->submenu->end());
        });

        test(function () {
            $expected = '
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                      <a href="#"><i class="fa fa-'.$this->icon1.'"></i> <span>'.$this->text1.'</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="'.$this->link2.'">'.$this->text2.'</a></li>
                        <li><a href="'.$this->link3.'">'.$this->text3.'</a></li>
                      </ul>
                    </li>
                </ul>
            ';

            $this->assertXmlStringEqualsXmlString($expected, $this->menu->render());
        });
    });
});
