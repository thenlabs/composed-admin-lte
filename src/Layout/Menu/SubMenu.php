<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout\Menu;

use ThenLabs\ComposedViews\AbstractCompositeView;
use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class SubMenu extends AbstractCompositeView
{
    use AddItemTrait;
    use AddSubMenuTrait;

    /**
     * @Data
     */
    protected $text;

    /**
     * @Data
     */
    protected $icon;

    /**
     * @Data
     */
    protected $active;

    /**
     * @Data
     */
    protected $open;

    public function __construct(string $text, string $icon, bool $active, bool $open)
    {
        $this->text = $text;
        $this->icon = $icon;
        $this->active = $active;
        $this->open = $open;
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../../templates/layout/menu/submenu.tpl.php';
        return ob_get_clean();
    }

    public function end(): AbstractCompositeView
    {
        return $this->getParent();
    }
}
