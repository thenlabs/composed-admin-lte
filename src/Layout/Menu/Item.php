<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout\Menu;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Item extends AbstractView
{
    /**
     * @Data
     */
    protected $text;

    /**
     * @Data
     */
    protected $url;

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../../templates/layout/menu/item.tpl.php';
        return ob_get_clean();
    }
}
