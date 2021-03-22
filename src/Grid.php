<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte;

use ThenLabs\ComposedViews\AbstractCompositeView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Grid extends AbstractCompositeView
{
    use Grid\GridTrait;

    public function getView(array $data = []): string
    {
        return $this->renderChildren();
    }
}
