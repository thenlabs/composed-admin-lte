<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout\Menu;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
trait AddSubMenuTrait
{
    public function addSubMenu(string $text, bool $active = false, bool $open = false): SubMenu
    {
        $subMenu = new SubMenu($text, $active, $open);

        $this->addChild($subMenu);

        return $subMenu;
    }
}
