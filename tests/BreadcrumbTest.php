<?php

namespace ThenFriends\ComposedAdminLte\Tests;

use ThenFriends\ComposedAdminLte\Breadcrumb;
use ThenFriends\ComposedAdminLte\Tests\TestCase;

setTestCaseNamespace(__NAMESPACE__);
setTestCaseClass(TestCase::class);

testCase('BreadcrumbTest.php', function () {
    setUp(function () {
        $this->breadcrumb = new Breadcrumb;
    });

    test(function () {
        $this->assertXmlStringEqualsXmlString('<ol class="breadcrumb"></ol>', $this->breadcrumb->render());
    });

    testCase(function () {
        setUp(function () {
            $this->text1 = uniqid();
            $this->link1 = uniqid();
            $this->icon1 = uniqid();

            $this->breadcrumb->addItem($this->text1, $this->link1, $this->icon1);
        });

        test(function () {
            $expected = '
                <ol class="breadcrumb">
                    <li><a href="'.$this->link1.'"><i class="fa fa-'.$this->icon1.'"></i>'.$this->text1.'</a></li>
                </ol>
            ';
            $this->assertXmlStringEqualsXmlString($expected, $this->breadcrumb->render());
        });

        testCase(function () {
            setUp(function () {
                $this->text2 = uniqid();
                $this->link2 = uniqid();
                $this->icon2 = uniqid();

                $this->breadcrumb->addItem($this->text2, $this->link2, $this->icon2, true);
            });

            test(function () {
                $expected = '
                    <ol class="breadcrumb">
                        <li><a href="'.$this->link1.'"><i class="fa fa-'.$this->icon1.'"></i>'.$this->text1.'</a></li>
                        <li class="active"><a href="'.$this->link2.'"><i class="fa fa-'.$this->icon2.'"></i>'.$this->text2.'</a></li>
                    </ol>
                ';
                $this->assertXmlStringEqualsXmlString($expected, $this->breadcrumb->render());
            });
        });
    });
});
