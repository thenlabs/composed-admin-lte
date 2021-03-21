<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout;

use ThenLabs\ComposedViews\AbstractCompositeView;
use ThenLabs\ComposedViews\Annotation\View;
use ThenLabs\ComposedViews\Annotation\Sidebar;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Menu extends AbstractCompositeView
{
    public function addItem(string $text, string $url, bool $active = false): self
    {
        $item = new Menu\Item;
        $item->setText($text);
        $item->setUrl($url);
        $item->setActive($active);

        $this->addChild($item);

        return $this;
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../templates/layout/menu.tpl.php';
        return ob_get_clean();
    }
}
