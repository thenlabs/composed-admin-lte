<?php
declare(strict_types=1);

namespace ThenLabs\ComposedAdminLte;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;
use ThenLabs\ComposedViews\Annotation\View;
use ThenLabs\ComposedViews\Asset\Stylesheet;
use ThenLabs\ComposedViews\Asset\Script;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class Layout extends AbstractView
{
    /**
     * @Data
     */
    protected $title;

    /**
     * @View
     */
    public $logo;

    /**
     * @View
     */
    public $navbar;

    /**
     * @View
     */
    public $main;

    /**
     * @View
     */
    public $controlSidebar;

    /**
     * @View
     */
    public $footer;

    public function __construct()
    {
        parent::__construct();

        $this->logo = new Layout\Logo;
        $this->navbar = new Layout\Navbar;
        $this->main = new Layout\Main;
        $this->controlSidebar = new Layout\ControlSidebar;
        $this->footer = new Layout\Footer;
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require __DIR__.'/../templates/layout.tpl.php';
        return ob_get_clean();
    }

    public function getOwnDependencies(): array
    {
        return [
            // stylesheets
            new Stylesheet('google-font-source-sans-pro', null, 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'),
            new Stylesheet('fontawesome-css', null, 'plugins/fontawesome-free/css/all.min.css'),
            new Stylesheet('adminlte-css', null, 'dist/css/adminlte.min.css'),

            // scripts
            new Script('jquery', null, 'plugins/jquery/jquery.min.js'),
            new Script('bootstrap-js', null, 'plugins/bootstrap/js/bootstrap.bundle.min.js'),
            new Script('adminlte-js', null, 'dist/js/adminlte.min.js'),
        ];
    }
}
