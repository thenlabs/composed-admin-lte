<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Grid;

use ThenLabs\Components\ComponentInterface;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
trait AddChildTrait
{
    public function addChild(ComponentInterface $child, $setParentInChild = true, bool $dispatchEvents = true)
    {
        parent::addChild($child, $setParentInChild, $dispatchEvents);

        return $this;
    }
}
