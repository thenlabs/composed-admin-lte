<?php
/**
 * This file has only demostration purpouses.
 *
 * You should remove or edit it.
 */

use ThenLabs\ComposedViews\AbstractView;
use ThenLabs\ComposedViews\Annotation\Data;

$page = new class extends AbstractView {
    /**
     * @Data
     */
    protected $title;

    /**
     * @Data
     */
    protected $content;

    protected function getView(array $data = []): string
    {
        return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$data['title']}</title>
</head>
<body>
    <h1>{$data['content']}</h1>
</body>
</html>
HTML;
    }
};

$page->setTitle('Homepage');
$page->setContent('Hello World');

echo $page;
