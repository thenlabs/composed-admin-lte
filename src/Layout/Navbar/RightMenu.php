<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout\Navbar;

use ThenLabs\ComposedViews\AbstractCompositeView;
use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class RightMenu extends AbstractCompositeView
{
    /**
     * @Data
     */
    protected $showFullScreenButton = true;

    /**
     * @Data
     */
    protected $showControlSidebarButton = true;

    public function addItem(AbstractView $item): void
    {
        $this->addChild($item);
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../../templates/layout/navbar/right-menu.tpl.php';
        return ob_get_clean();
    }
}
