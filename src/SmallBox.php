<?php
declare(strict_types=1);

namespace ThenFriends\ComposedAdminLte;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class SmallBox extends AbstractView
{
    protected $background;
    protected $title;
    protected $description;
    protected $icon;
    protected $link;
    protected $linkText;

    public function __construct(string $background, string $title, string $description, string $icon, string $link, string $linkText)
    {
        $this->background  = $background;
        $this->title       = $title;
        $this->description = $description;
        $this->icon        = $icon;
        $this->link        = $link;
        $this->linkText    = $linkText;
    }

    public function getView(array $data = []): string
    {
        return '
            <div class="small-box bg-'.$this->background.'">
                <div class="inner">
                    <h3>'.$this->title.'</h3>
                    <p>'.$this->description.'</p>
                </div>
                <div class="icon">
                    <i class="ion ion-'.$this->icon.'"></i>
                </div>
                <a href="'.$this->link.'" class="small-box-footer">'.$this->linkText.' <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        ';
    }
}
