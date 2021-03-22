<li class="nav-item">
  <a href="<?= $this->url ?>" class="nav-link <?php if (true === $this->active) echo 'active'; ?>">
    <?php if ($this->icon) : ?>
      <i class="nav-icon fas fa-<?= $this->icon ?>"></i>
    <?php endif ?>
    <?= $this->text ?>
  </a>
</li>
