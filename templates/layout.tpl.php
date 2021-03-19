<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->title ?></title>

  <?= $this->renderStyles() ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?= $this->renderProperty('header') ?>

  <?= $this->renderProperty('main') ?>

  <?= $this->renderProperty('controlSidebar') ?>

  <?= $this->renderProperty('footer') ?>
</div>
<!-- ./wrapper -->

<?= $this->renderScripts() ?>
</body>
</html>
