<?php
include("connection.php");
include("headings.php");

$sql = "SELECT bills.*, couriers.Customer_Name FROM bills JOIN couriers ON bills.courierid_fk = couriers.id";
$result = mysqli_query($conn, $sql);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">TRANSACTIONS</h4>
                    <p class="card-description text-center">
                        Add class <code>TRANSACTIONS</code>
                    </p>
                    <div class="table-responsive">
                        <table class=" table table-striped text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>COURIER NAME</th>
                                    <th>AMOUNT</th>
                                    <th>PAYMENT METHOD</th>
                                    <th>PAYMENT STATUS</th>
                                    <th>TRANSACTION DATE</th>
                                    <th class="text-success">Update</th>
                                <th class="text-danger">Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['Customer_Name']; ?></td>
                                    <td><?php echo $rows['amount']; ?></td>
                                    <td><?php echo $rows['payment_method']; ?></td>
                                    <td><?php echo $rows['payment_status']; ?></td>
                                    <td><?php echo $rows['transaction_date']; ?></td>
                                    <td><a href="billsupdate.php?id=<?php echo$rows['id']?>"  class="btn btn-outline-success" >EDIT <i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="billsdelete.php?id=<?php echo $rows['id'] ?>" class="btn btn-outline-danger">DELETED <i class="bi bi-trash3"></i></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
