<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout;

use ThenLabs\ComposedViews\AbstractCompositeView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class ControlSidebar extends AbstractCompositeView
{
    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../templates/layout/control-sidebar.tpl.php';
        return ob_get_clean();
    }
}
