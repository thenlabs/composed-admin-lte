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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <?= $this->renderProperty('footer') ?>
</div>
<!-- ./wrapper -->

<?= $this->renderScripts() ?>
</body>
</html>
