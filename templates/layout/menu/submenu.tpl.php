          <li class="nav-item <?php if (true === $this->open) echo 'menu-open'; ?>">
            <a href="#" class="nav-link <?php if (true === $this->active) echo 'active'; ?>">
              <?= $this->text ?>
            </a>
            <ul class="nav nav-treeview">
              <?= $this->renderChildren() ?>
            </ul>
          </li>
