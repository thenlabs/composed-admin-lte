    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <?= $this->renderChildren() ?>

      <?php if (true === $this->showFullScreenButton) : ?>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      <?php endif ?>

      <?php if (true === $this->showControlSidebarButton) : ?>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      <?php endif ?>
    </ul>
