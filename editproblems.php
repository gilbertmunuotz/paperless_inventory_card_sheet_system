<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Report Problem Sheet</title>

    <!-- Custom fonts for this template-->
    <link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!--  css link for Registration Form -->
    <!-- <link rel="stylesheet2" href="css/style2.css">  -->

</head>

<body id="page-top">
    <?php

    use Rahisi\RahisiDb\DB;

    require_once './vendor/autoload.php';
    include "includes/functions.php";
    session_start();

    $user = DB::table("tblreportproblem")->find($_GET['id'])->get()[0];

    //var_dump($user)
    ?>

    <!-- page wrapper -->
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

                <?php include_once('includes/functions.php')  ?>

                <form class="user" method="post" action="includes/user.php">
                    <input type="hidden" name="id" value="<?php echo $user['id']  ?>">
                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Name</div>
                        <div class="col-6 mb-3"> <input type="text" class="form-control form-control-user" value="<?php echo $user['name'] ?>" name="name" placeholder="John Laizer" required></div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Department</div>
                        <div class="col-6 mb-3"> <input type="text" class="form-control form-control-user" value="<?php echo $user['department'] ?>" name="department" placeholder="Electrical" required></div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Date Of Report</div>
                        <div class="col-6 mb-3">
                            <input type="date" class="form-control form-control-user" value="<?php echo $user['dateofreport'] ?>" name="DOR">
                        </div>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Problem Description</div>
                        <div class="col-6 mb-3"> <input type="text" class="form-control form-control-user" value="<?php echo $user['problem_description'] ?>" name="description" required></div>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Status</div>
                        <div class="col-6 mb-3">
                            <select style="width: 100%;   
                                           padding: 12px 20px;
                                           margin: 8px 0;
                                           display: inline-block;
                                           border: 1px solid #ccc;
                                           border-radius: 20px;
                                           box-sizing: border-box;" name="status" value="<?php echo $user['status'] ?>">
                                <option <?php if ($user['status'] == "1") {
                                            echo "selected";
                                        } ?> value="1">Pending</option>
                                <option <?php if ($user['status'] == "2") {
                                            echo "selected";
                                        } ?> value="2">Attended</option>
                                <option <?php if ($user['status'] == "3") {
                                            echo "selected";
                                        } ?> value="3">Not Attended</option>
                            </select>
                        </div>
                    </div>


                    <div class="row" style="margin-top:4%">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <input type="submit" name="submit" value="Update" class="btn btn-primary btn-user btn-block">
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