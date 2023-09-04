<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registration Device Sheet</title>

  <!-- Custom fonts for this template-->
  <link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include_once('usernavbar.php') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include_once('userheader.php') ?>
        <!-- End of Topbar -->

        <p style="color:red;"><?php Errormessage() ?></p>
        <form class="user" method="post" action='includes/user.php'>
          <div class="row">
            <div class="col-3 mb-3" style="margin-left: 20px;">Item Name</div>
            <div class="col-6 mb-3">
              <input type="text" class="form-control form-control-user" id="Item Name" name="Item Name" placeholder="Photocopy Machine" required>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-3 mb-3" style="margin-left: 20px;">Code No </div>
            <div class="col-6 mb-3">
              <input type="text" class="form-control form-control-user" id="Code No" name="Code No" placeholder="TRM548034" required>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-3 mb-3" style="margin-left: 20px;">Office</div>
            <div class="col-6 mb-3">
              <input type="text" class="form-control form-control-user" id="Office" name="Office" placeholder="Acountant" required>
            </div>
          </div>
          <br>


          <div class="row">
            <div class="col-3 mb-3" style="margin-left: 20px;">Date Of Registration</div>
            <div class="col-6 mb-3">
              <input type="date" class="form-control form-control-user" id="DOR" name="DOR">
            </div>
          </div>
          <br>


          <div class="row" style="margin-top:4%">
            <div class="col-4"></div>
            <div class="col-4">
              <input type="submit" name="update" value="Update" class="btn btn-primary btn-user btn-block">
            </div>
          </div>

        </form>
        <br>
        <!-- Footer -->
        <?php include_once('userfooter.php'); ?>
        <!-- End of Footer -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


</body>

</html>