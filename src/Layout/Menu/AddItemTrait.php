<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout\Menu;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
trait AddItemTrait
{
    public function addItem(string $text, string $icon = '', string $url = 'javascript:;', bool $active = false): self
    {
        $item = new Item($text, $icon, $url, $active);

        $this->addChild($item);

        return $this;
    }
}
