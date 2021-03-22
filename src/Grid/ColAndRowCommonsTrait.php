<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Grid;

use ThenLabs\ComposedViews\AbstractCompositeView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
trait ColAndRowCommonsTrait
{
    public function end(): AbstractCompositeView
    {
        return $this->getParent();
    }
}
