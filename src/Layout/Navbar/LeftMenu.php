<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout\Navbar;

use ThenLabs\ComposedViews\AbstractCompositeView;
use ThenLabs\ComposedViews\TextView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class LeftMenu extends AbstractCompositeView
{
    public function __construct()
    {
        parent::__construct();

        $firstItem = new TextView('<li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a></li>');

        $this->addChild($firstItem);
    }

    public function addItem(string $text, string $url): void
    {
        $item = new TextView("<li class=\"nav-item d-none d-sm-inline-block\"><a href=\"{$url}\" class=\"nav-link\">{$text}</a></li>");

        $this->addChild($item);
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../../templates/layout/navbar/left-menu.tpl.php';
        return ob_get_clean();
    }
}
