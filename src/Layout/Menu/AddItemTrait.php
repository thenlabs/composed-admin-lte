<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout\Menu;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
trait AddItemTrait
{
    public function addItem(string $text, string $url, bool $active = false): self
    {
        $item = new Item($text, $url, $active);

        $this->addChild($item);

        return $this;
    }
}
