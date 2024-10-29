<?php
include("connection.php");
include("headings.php");

// Fetch all courier details from the database
$sql = "SELECT * FROM couriers";
$result = mysqli_query($conn, $sql);
?>

<!-- Including Bootstrap and Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container mt-4">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">View All Courier Details <i class="bi bi-file-text"></i></h4>
                <div class="table-responsive">
                    <table class="table table-hover text-center table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Courier Name</th>
                                <th>Parcel Name</th>
                                <th>Contact</th>
                                <th>Vehicle Type</th>
                                <th>Tracking ID</th>
                                <th class="text-success">Update</th>
                                <th class="text-danger">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($rows['id']); ?></td>
                                <td><?php echo htmlspecialchars($rows['Customer_Name']); ?></td>
                                <td><?php echo htmlspecialchars($rows['Parcel']); ?></td>
                                <td><?php echo htmlspecialchars($rows['contact']); ?></td>
                                <td><?php echo htmlspecialchars($rows['vehicle_type']); ?></td>
                                <td><?php echo htmlspecialchars($rows['Tracking_Id']); ?></td>
                                <td><a href="courier_update.php?id=<?php echo $rows['id']; ?>" class="btn btn-outline-success">Edit <i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="courier_delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-outline-danger">Delete <i class="bi bi-trash3"></i></a></td>
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
