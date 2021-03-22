<div class="card card-<?= $this->style ?>">
  <div class="card-header">
    <?php if ($this->title) : ?>
        <h3 class="card-title"><?= $this->title ?></h3>
    <?php else : ?>
        <?= $this->renderProperty('header') ?>
    <?php endif ?>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <div class="card-body">
    <?= $this->renderProperty('body') ?>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <?= $this->renderProperty('footer') ?>
  </div>
</div>
<!-- /.card -->
