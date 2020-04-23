<li class="treeview">
  <a href="#"><i class="fa fa-<?= $this->icon ?>"></i> <span><?= $this->text ?></span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
  </a>
  <ul class="treeview-menu">
    <?= $this->renderChildren() ?>
  </ul>
</li>