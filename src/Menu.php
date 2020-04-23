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
}
