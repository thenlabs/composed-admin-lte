<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Layout;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Logo extends AbstractView
{
    /**
     * @Data
     */
    protected $url = 'javascript:;';

    /**
     * @Data
     */
    protected $imageUrl;

    /**
     * @Data
     */
    protected $text = 'AdminLTE';

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../templates/layout/logo.tpl.php';
        return ob_get_clean();
    }
}
