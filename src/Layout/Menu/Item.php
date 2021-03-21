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

    /**
     * @Data
     */
    protected $icon;

    /**
     * @Data
     */
    protected $active;

    public function __construct(string $text, string $icon, string $url, bool $active)
    {
        $this->text = $text;
        $this->url = $url;
        $this->icon = $icon;
        $this->active = $active;
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../../templates/layout/menu/item.tpl.php';
        return ob_get_clean();
    }
}
