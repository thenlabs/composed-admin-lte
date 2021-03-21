<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout\Main;

use ThenLabs\ComposedViews\AbstractView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Breadcrumb extends AbstractView
{
    protected $items = [];

    public function addItem(string $text, string $url = 'javascript:;'): self
    {
        $this->items[] = compact('text', 'url');

        return $this;
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../../templates/layout/main/breadcrumb.tpl.php';
        return ob_get_clean();
    }
}
