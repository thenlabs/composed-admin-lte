<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Grid;

use ThenLabs\ComposedViews\AbstractCompositeView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
trait GridTrait
{
    public function row(): Row
    {
        $row = new Row;

        $this->addChild($row);

        return $row;
    }

    public function col(string $class): Col
    {
        $col = new Col($class);

        $this->addChild($col);

        return $col;
    }

    public function end(): AbstractCompositeView
    {
        return $this->getParent();
    }
}
