<?php

include("../Admin/connection.php");
include("headings.php");
$sql = "SELECT * FROM status";
$result = mysqli_query($conn, $sql);


?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">STATUS-RECORD<i class="bi bi-file-text"></i></h4>

                <div class="table-responsive">
                    <table class="table table-hover text-center table-bordered ">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Status Name</th>
                                <th>UPDATED</th>
                                <th>DELETED</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <td><?php echo $rows['id'] ?></td>
                                    <td><?php echo $rows['status_name'] ?></td>


                                    <td><a href="statusadminupdate.php?id=<?php echo $rows['id'] ?>" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i> UPDATED</a></td>
                                    <td><a href="statusadmindelete.php?id=<?php echo $rows['id'] ?>" class="btn btn-outline-danger"><i class="bi bi-trash3"></i> DELETED</a></td>




                            </tr>
                        <?php } ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>






<?php





?>