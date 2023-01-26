<?php
include_once 'layout/header.php';
include_once __DIR__ . '/../controller/baker_controller.php';

$bakerController = new BakerController();
$bakers = $bakerController->getAllBakers();

//var_dump($bakers);

?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Customer</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div> -->

            <div class="row">
                <div class="col-md-6">
                    <a href="create_baker.php" class="btn btn-primary mb-3">Add new baker</a>
                </div>
            </div>


            <!-- Content Row -->
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <?php
                    for ($row = 0; $row < count($bakers); $row++) {
                        echo "<tr>";
                        echo "<td>" . $bakers[$row]["name"] . "</td>";
                        echo "<td>" . $bakers[$row]["position"] . "</td>";
                        echo "<td>" . $bakers[$row]["note"] . "</td>";
                        echo "<td> <a class = 'btn btn-warning mr-3'> Edit </a> <a class = 'btn btn-danger'> Delete </a>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php
    include_once 'layout/footer.php';
    ?>