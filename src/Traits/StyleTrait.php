<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte\Traits;

use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
trait StyleTrait
{
    /**
     * @Data(values={
     *     "info", "success", "warning", "danger", "primary", "secondary",
     *     "black", "gray-dark", "gray", "light",
     *     "indigo", "lightblue", "navy", "purple", "fuchsia", "pink",
     *     "maroon", "orange", "lime", "teal", "olive",
     * })
     */
    protected $style;
}
