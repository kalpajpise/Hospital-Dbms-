<?php include"include/recep_header.php" ?>     

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'include/recep_navigation.php';  ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome Receptionist
                            <small><?php echo $_SESSION['login_name'] ?></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include 'include/recep_footer.php'; ?>