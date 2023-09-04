  <?php
  require_once 'vendor/autoload.php';
  include "includes/functions.php";
  session_start();

  if (isset($_GET['page'])) {
    $page = $_GET['page'];

    // To open login page
    if ($page == 'login') {
      if (auth()) {
        redirect("?page=dashboard");
      }
      include 'loginpage.php';
    }

    //  To register
    elseif ($page == 'register') {
      if (auth()) {
        redirect("?page=dashboard");
      }
      include 'Registrationpage.php';
    } elseif ($page == 'home') {
      include 'home.php';
    } elseif ($page == 'dashboard') {
      login();
      include 'userpage.php';
    } elseif ($page == 'newDevice') {
      login();
      include 'registerdevicesheet.php';
    } elseif ($page == 'report') {
      login();
      include 'reportproblem.php';
    } elseif ($page == 'request') {
      login();
      include 'requestdevice.php';
    } elseif ($page == 'reqmade') {
      login();
      include 'reqmade.php';
    } elseif ($page == 'regdevice') {
      login();
      include 'regdevice.php';
    } elseif ($page == 'reqdevice') {
      login();
      include 'reqdevice.php';
    } elseif ($page == 'editproblems') {
      login();
      include 'editproblems.php';
    } else {
      echo 'page not found';
    }
  } else {
    include 'home.php';
  }
