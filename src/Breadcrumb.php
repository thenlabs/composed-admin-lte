<?php
declare(strict_types=1);

namespace ThenFriends\ComposedAdminLte;

use ThenLabs\ComposedViews\HtmlElement;
use ThenLabs\ComposedViews\TextView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Breadcrumb extends HtmlElement
{
    public function __construct()
    {
        parent::__construct('ol', ['class' => 'breadcrumb']);
    }

    public function addItem(string $text, string $link, string $icon, bool $active = false): void
    {
        $li_class = $active ? 'class="active"' : '';

        $item = new TextView('
            <li '.$li_class.'><a href="'.$link.'"><i class="fa fa-'.$icon.'"></i>'.$text.'</a></li>
        ');

        $this->addChild($item);
    }
}
