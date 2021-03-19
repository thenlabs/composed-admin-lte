<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout;

use ThenLabs\ComposedViews\AbstractCompositeView;
use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Main extends AbstractCompositeView
{
    /**
     * @Data
     */
    protected $contentTitle;

    public function getView(): string
    {
        ob_start();
        require __DIR__.'/../../templates/layout/main.php';
        return ob_get_clean();
    }
}
