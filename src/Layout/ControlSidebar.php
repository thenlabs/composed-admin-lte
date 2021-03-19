<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout;

use ThenLabs\ComposedViews\AbstractCompositeView;
use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class ControlSidebar extends AbstractCompositeView
{
    public function getView(): string
    {
        ob_start();
        require __DIR__.'/../../templates/layout/control-sidebar.tpl.php';
        return ob_get_clean();
    }
}
