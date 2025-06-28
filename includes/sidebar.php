<?php require_once __DIR__.'/functions.php'; ?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start" id="sidenav-main">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item <?= is_active('index.php') ?>">
        <a class="nav-link" href="index.php">
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?= is_active('sales.php') ?>">
        <a class="nav-link" href="pages/sales.php">
          <span class="nav-link-text ms-1">Sales</span>
        </a>
      </li>
      <li class="nav-item <?= is_active('inventory.php') ?>">
        <a class="nav-link" href="pages/inventory.php">
          <span class="nav-link-text ms-1">Inventory</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

