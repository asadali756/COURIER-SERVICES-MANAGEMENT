<?php
include("connection.php");
include("headings.php");
$sql = "SELECT * FROM send_from";
$result = mysqli_query($conn, $sql);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">SEND FROM - TO <i class="bi bi-file-text"></i></h4>
                <div class="table-responsive">
                    <table class=" table table-hover text-center table-bordered ">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Number of parcel</th>
                                <th>Weight</th>
                                <th>length</th>
                                <th class=" text-success">Updated</th>
                                <th class="text-danger">Deleted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['from']; ?></td>
                                <td><?php echo $rows['to']; ?></td>
                                <td><?php echo $rows['nop']; ?></td>
                                <td><?php echo $rows['weight']; ?></td> 
                                <td><?php echo $rows['length']; ?></td> 

                                <td><a href="send_fromupdate.php?id=<?php echo$rows['id']?>"  class="btn btn-outline-success" >EDIT <i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="send_fromdelete.php?id=<?php echo $rows['id'] ?>" class="btn btn-outline-danger">DELETED <i class="bi bi-trash3"></i></a></td>
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
include("footer.php"); // Include footer if needed
?>
