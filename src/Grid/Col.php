<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Grid;

use ThenLabs\ComposedViews\AbstractCompositeView;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Col extends AbstractCompositeView
{
    use GridTrait;
    use AddChildTrait;

    protected $class;

    public function __construct(string $class)
    {
        $this->class = $class;
    }

    public function getView(array $data = []): string
    {
        return '<div class="'.$this->class.'">'.$this->renderChildren().'</div>';
    }
}
