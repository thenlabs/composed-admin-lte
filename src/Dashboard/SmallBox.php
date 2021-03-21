<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Dashboard;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class SmallBox extends AbstractView
{
    /**
     * @Data
     */
    protected $mainText;

    /**
     * @Data
     */
    protected $secondaryText;

    /**
     * @Data
     */
    protected $icon;

    /**
     * @Data
     */
    protected $url = '#';

    /**
     * @Data
     */
    protected $linkText = 'More info';

    /**
     * @Data(values={"info", "success", "warning", "danger"})
     */
    protected $backgroundColor = 'info';

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../../templates/dashboard/small-box.tpl.php';
        return ob_get_clean();
    }
}
