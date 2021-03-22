<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Grid;

use ThenLabs\ComposedViews\AbstractCompositeView;
use ThenLabs\Components\ComponentInterface;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Col extends AbstractCompositeView
{
    use ColAndRowCommonsTrait;
    use AddColTrait;
    use AddRowTrait;

    protected $class;

    public function __construct(string $class)
    {
        $this->class = $class;
    }

    public function getView(array $data = []): string
    {
        return '<div class="'.$this->class.'">'.$this->renderChildren().'</div>';
    }

    public function addChild(ComponentInterface $child, $setParentInChild = true, bool $dispatchEvents = true)
    {
        parent::addChild($child, $setParentInChild, $dispatchEvents);

        return $this;
    }
}
