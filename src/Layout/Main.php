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

    /**
     * @Data
     */
    public $breadcrumb;

    public function __construct()
    {
        parent::__construct();

        $this->breadcrumb = new Main\Breadcrumb;
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../templates/layout/main.tpl.php';
        return ob_get_clean();
    }
}
