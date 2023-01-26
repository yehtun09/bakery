<?php
ob_start();
include_once 'layout/header.php';
include_once __DIR__ . '/../controller/baker_controller.php';


?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Baker</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <a href="bakers.php" class="btn btn-primary mb-3">Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <form action="" method="post">


                </div>
                </form>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include_once 'layout/footer.php';
?>