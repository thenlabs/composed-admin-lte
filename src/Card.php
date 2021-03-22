<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;
use ThenLabs\ComposedViews\Annotation\Sidebar;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Card extends AbstractView
{
    use Traits\StyleTrait;

    /**
     * @Data
     */
    public $title;

    /**
     * @Sidebar
     */
    public $header;

    /**
     * @Sidebar
     */
    public $body;

    /**
     * @Sidebar
     */
    public $footer;

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../templates/card.tpl.php';
        return ob_get_clean();
    }
}
