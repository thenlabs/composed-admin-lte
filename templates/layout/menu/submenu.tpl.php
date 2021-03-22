<li class="nav-item <?php if (true === $this->open) echo 'menu-open'; ?>">
  <a href="#" class="nav-link <?php if (true === $this->active) echo 'active'; ?>">
    <?php if ($this->icon) : ?>
      <i class="nav-icon fas fa-<?= $this->icon ?>"></i>
    <?php endif ?>
    <p>
      <?= $this->text ?>
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <?= $this->renderChildren() ?>
  </ul>
</li>
