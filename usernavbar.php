<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="myprofile.php">
    <div class="sidebar-brand-text mx-3">PICSS</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!--General Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="?page=dashboard">
      <i class="fas fa-solid fa-house"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Staff Navbar -->
  <?php if (role("staff")) : ?>
    <!-- <hr class="sidebar-divider my-0"> -->
    <li class="nav-item">
      <a class="nav-link" href="?page=newDevice">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Register Devices</span></a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item">
      <a class="nav-link" href="?page=report">
        <i class="fa-solid fa-square-arrow-up-right"></i>
        <span>Report Problem</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item">
      <a class="nav-link" href="?page=request">
        <i class="fa-solid fa-rug"></i>
        <span>Request Device</span></a>
    </li>
  <?php endif; ?>


  <?php if (role("Estate Officer")) : ?>

    <li class="nav-item">
      <a class="nav-link" href="?page=regdevice">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Registered Devices</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item">
      <a class="nav-link" href="?page=reqmade">
        <i class="fa-solid fa-square-arrow-up-right"></i>
        <span>Problems Reported</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item">
      <a class="nav-link" href="?page=reqdevice">
        <i class="fa-solid fa-rug"></i>
        <span>Requested Devices</span></a>
    </li>
  <?php endif; ?>

  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link" href="includes/user.php?fn=logout">
      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
      <span>logout</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
</ul>