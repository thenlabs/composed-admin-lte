<?php
declare(strict_types=1);

namespace ThenFriends\ComposedAdminLte;

use ThenLabs\ComposedViews\HtmlElement;
use ThenLabs\ComposedViews\TextView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Menu extends HtmlElement
{
    public function __construct()
    {
        parent::__construct('ul', ['class' => 'sidebar-menu', 'data-widget' => 'tree']);
    }

    public function addHeader(string $text): void
    {
        $this->addChild(new HtmlElement('li', ['class' => 'header'], $text));
    }

    public function addItem(string $text, string $link, string $icon, bool $active = false): void
    {
        $li_class = $active ? 'class="active"' : '';

        $item = new TextView('
            <li '.$li_class.'><a href="'.$link.'"><i class="fa fa-'.$icon.'"></i> <span>'.$text.'</span></a></li>
        ');

        $this->addChild($item);
    }

    public function addSubmenu(string $text, string $link, string $icon, bool $active = false, bool $open = false): Submenu
    {
        $submenu = new Submenu($text, $link, $icon, $active, $open);

        $this->addChild($submenu);

        return $submenu;
    }
}
