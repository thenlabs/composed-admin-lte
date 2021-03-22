<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Grid;

use ThenLabs\ComposedViews\AbstractCompositeView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Row extends AbstractCompositeView
{
    use ColAndRowCommonsTrait;
    use AddColTrait;

    public function getView(array $data = []): string
    {
        return '<div class="row">'.$this->renderChildren().'</div>';
    }
}
