<?php
declare(strict_types=1);

namespace ThenFriends\ComposedAdminLte;

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\HtmlElement;
use ThenLabs\ComposedViews\Asset\Stylesheet;
use ThenLabs\ComposedViews\Asset\Script;
use ThenLabs\ComposedViews\Annotation\Data;
use ThenLabs\ComposedViews\Annotation\Sidebar;
use ThenLabs\ComposedViews\Annotation\View;

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
     * @Data(values={"blue", "black", "purple", "yellow", "red", "green"})
     */
    protected $skin = 'blue';

    /**
     * @Data(values={"fixed", "layout-boxed", "layout-top-nav", "sidebar-collapse", "sidebar-mini"})
     */
    protected $layoutType = 'sidebar-mini';

    /**
     * @Data
     */
    protected $contentTitle;

    /**
     * @Data
     */
    protected $contentDescription;

    /**
     * @Data
     */
    protected $logoLink = 'javascript:;';

    /**
     * @Data
     */
    protected $logo = '
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    ';

    /**
     * @Data
     */
    protected $leftFooterContent;

    /**
     * @Data
     */
    protected $rightFooterContent;

    /**
     * @Sidebar
     */
    protected $mainSidebar;

    /**
     * @Sidebar
     */
    protected $content;

    /**
     * @View
     */
    protected $breadcrumb;

    /**
     * @View
     */
    protected $menu;

    public function __construct()
    {
        parent::__construct();

        $this->breadcrumb = new Breadcrumb;
        $this->menu = new Menu;
    }

    public function getOwnDependencies(): array
    {
        return [
            // styles
            new Stylesheet('bootstrap-css', null, 'bower_components/bootstrap/dist/css/bootstrap.min.css'),
            new Stylesheet('fontAwesome-css', null, 'bower_components/font-awesome/css/font-awesome.min.css'),
            new Stylesheet('ionicons-css', null, 'bower_components/Ionicons/css/ionicons.min.css'),
            new Stylesheet('adminlte-css', null, 'thenfriends/composed-admin-lte/css/AdminLTE.min.css'),
            new Stylesheet('adminlte-skin-css', null, 'thenfriends/composed-admin-lte/css/skins/skin-blue.min.css'),

            // scripts
            new Script('jquery', null, 'bower_components/jquery/dist/jquery.min.js'),
            new Script('bootstrap-js', null, 'bower_components/bootstrap/dist/js/bootstrap.min.js'),
            new Script('adminlte-js', null, 'thenfriends/composed-admin-lte/js/adminlte.min.js'),
        ];
    }

    public function getView(array $data = []): string
    {
        ob_start();
        require 'templates/layout.php';
        return ob_get_clean();
    }
}
