<?php

namespace ThenFriends\ComposedAdminLte\Tests;

use ThenFriends\ComposedAdminLte\SmallBox;

setTestCaseNamespace(__NAMESPACE__);
setTestCaseClass(TestCase::class);

testCase('SmallBoxTest.php', function () {
    testCase('create a new box', function () {
        setUp(function () {
            $this->bg = uniqid();
            $this->title = uniqid();
            $this->description = uniqid();
            $this->icon = uniqid();
            $this->link = uniqid();
            $this->linkText = uniqid();

            $this->box = new SmallBox(
                $this->bg,
                $this->title,
                $this->description,
                $this->icon,
                $this->link,
                $this->linkText
            );
        });

        test(function () {
            $expected = '
                <div class="small-box bg-'.$this->bg.'">
                    <div class="inner">
                        <h3>'.$this->title.'</h3>
                        <p>'.$this->description.'</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-'.$this->icon.'"></i>
                    </div>
                    <a href="'.$this->link.'" class="small-box-footer">'.$this->linkText.' <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            ';

            $this->assertXmlStringEqualsXmlString($expected, $this->box->render());
        });
    });
});
