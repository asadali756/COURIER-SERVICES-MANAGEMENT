<?php
include("connection.php");
include("headings.php");
$sql = "SELECT * FROM  usertable";
$result = mysqli_query($conn, $sql);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Admin <i class="bi bi-file-text"></i></h4>
                <div class="table-responsive">
                    <table class="table table-hover text-center table-bordered ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th class=" text-success">Updated</th>
                                <th class="text-danger">Deleted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['name']; ?></td>
                                <td><?php echo $rows['email']; ?></td>
                                <td><?php echo $rows['password']; ?></td>

                               

                                <td><a href="Adminupdate.php?id=<?php echo$rows['id']?>"  class="btn btn-outline-success" >EDIT <i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="Admindelete.php?id=<?php echo $rows['id'] ?>" class="btn btn-outline-danger">DELETED <i class="bi bi-trash3"></i></a></td>
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