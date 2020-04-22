<?php
declare(strict_types=1);

namespace ThenFriends\ComposedAdminLte\Tests;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Sidebar;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class TestCase extends PHPUnitTestCase
{
    public function assertViewHasData(string $dataName, AbstractView $view): void
    {
        $model = $view->getModel();

        $this->assertArrayHasKey($dataName, $model['data'], "The view has not the data '{$dataName}'.");
    }

    public function assertViewHasSidebar(string $sidebarName, AbstractView $view): void
    {
        $model = $view->getModel();

        $this->assertArrayHasKey($sidebarName, $model['sidebars'], "The view has not the sidebar '{$sidebarName}'.");
        $this->assertInstanceOf(Sidebar::class, $view->{$sidebarName});
    }
}
