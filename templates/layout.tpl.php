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
  <?= $this->renderProperty('navbar') ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?= $this->renderProperty('logo') ?>

    <!-- Sidebar -->
    <div class="sidebar">
      <?= $this->renderProperty('sidebar') ?>
      <?= $this->renderProperty('menu') ?>
    </div>
    <!-- /.sidebar -->
  </aside>

  <?= $this->renderProperty('main') ?>
  <?= $this->renderProperty('controlSidebar') ?>
  <?= $this->renderProperty('footer') ?>
</div>
<!-- ./wrapper -->

<?= $this->renderScripts() ?>
</body>
</html>
