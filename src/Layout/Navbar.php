<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\View;
use ThenLabs\ComposedViews\Annotation\Sidebar;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Navbar extends AbstractView
{
    /**
     * @View
     */
    public $leftMenu;

    /**
     * @Sidebar
     */
    public $sidebar;

    /**
     * @View
     */
    public $rightMenu;

    public function __construct()
    {
        parent::__construct();

        $this->leftMenu = new Navbar\LeftMenu;
        $this->rightMenu = new Navbar\RightMenu;
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../templates/layout/navbar.tpl.php';
        return ob_get_clean();
    }
}
