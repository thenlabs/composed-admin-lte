<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Grid;

use ThenLabs\ComposedViews\AbstractCompositeView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
trait AddRowTrait
{
    public function row(): Row
    {
        $row = new Row;

        $this->addChild($row);

        return $row;
    }
}
