<?php
// Ambil URL saat ini
$current_page = $_SERVER['REQUEST_URI'];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<nav class="navbar navbar-expand-lg" style="background-color: var(--bs-body-bg);">
  <div class="container">
    <tr class="user-footer">
      <a href="https://m.youtube.com/channel/UCwp6vwQcR5DfCrdJIUHtMEA" target="_blank" class="btn btn-default btn-flat" onClick="javascript:alert('Bantu klik subscribe ya bro :) ');">
        <b>&copy; Arya Rizky Web</b>
      </a>
    </tr>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <!-- Tambahkan kelas 'active' jika URL cocok dengan home, about, atau contact -->
        <a class="nav-item nav-link <?php echo ($current_page == '/' || $current_page == '/index.php') ? 'active' : ''; ?>" href="/">Home</a>
        <a class="nav-item nav-link <?php echo ($current_page == '/pages/about') ? 'active' : ''; ?>" href="/pages/about">About</a>
        <a class="nav-item nav-link <?php echo ($current_page == '/pages/contact') ? 'active' : ''; ?>" href="/pages/contact">Contact</a>

        <!-- Contoh Muncul Icon Light / Dark Mode -->
        <div class="nabar-extra">
          <li class="nav-item dropdown">
            <button class="btn nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-sun-fill theme-icon-active" data-theme-icon-active="bi-sun-fill"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="light">
                  <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icon="bi-sun-fill"></i> Light
                </button>
              </li>
              <li>
                <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="dark">
                  <i class="bi bi-moon-stars-fill me-2 opacity-50" data-theme-icon="bi-moon-stars-fill"></i> Dark
                </button>
              </li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </div>
</nav>

<style>
  .nabar-extra {
    margin-left: 550px;
  }

  /* Style untuk link yang aktif */
  .nav-link.active {
    font-weight: bold;
    color: #007bff;
  }
</style>