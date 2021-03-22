<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;
use ThenLabs\ComposedViews\Annotation\Sidebar;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Button extends AbstractView
{
    use Traits\StyleTrait;

    /**
     * @Data
     */
    protected $text;

    /**
     * @Data
     */
    protected $block = false;

    /**
     * @Data(values={"button", "submit"})
     */
    protected $type = 'button';

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../templates/button.tpl.php';
        return ob_get_clean();
    }
}
