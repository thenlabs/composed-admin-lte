<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Navbar extends AbstractView
{
    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../templates/layout/navbar.tpl.php';
        return ob_get_clean();
    }
}
