<?php

include("connection.php");
include("headings.php");

$ID = isset($_GET['id']) ? $_GET['id'] : '';

if ($ID) {
    $sql = "SELECT * FROM couriers WHERE id = $ID";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $parcel_name = $_POST['parcel'];
    $contact = $_POST['contact'];
    $vehicle_type = $_POST['vehicle_type'];

    if ($ID) {
        // Update the existing record
        $sql = "UPDATE couriers SET Customer_Name='$name', Parcel='$parcel_name', contact='$contact', vehicle_type='$vehicle_type' WHERE id='$ID'";
    } else {
        // Insert a new record
        $sql = "INSERT INTO couriers (Customer_Name, Parcel, contact, vehicle_type) VALUES ('$name', '$parcel_name', '$contact', '$vehicle_type')";
    }
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>swal('Success', 'Operation completed successfully!', 'success');</script>";
    } else {
        echo "<script>swal('Error', 'Operation failed!', 'error');</script>";
    }
}

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">NEW COURIERS</h4>
                <p class="card-description">
                    CMS <i class="fa-solid fa-truck-fast menu-icon"></i>
                </p>
                <form method="POST">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Courier Name</label>
                        <div class="col-md-12">
                            <input type="text" value="<?php echo isset($rows['Customer_Name']) ? $rows['Customer_Name'] : ''; ?>" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Contact</label>
                        <div class="col-md-12">
                            <input type="number" value="<?php echo isset($rows['contact']) ? $rows['contact'] : ''; ?>" name="contact" class="form-control" placeholder="Contact">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Vehicle Type</label>
                        <div class="col-md-12">
                            <input type="text" value="<?php echo isset($rows['vehicle_type']) ? $rows['vehicle_type'] : ''; ?>" name="vehicle_type" class="form-control" placeholder="Vehicle Type">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Parcel Name</label>
                        <div class="col-md-12">
                            <input type="text" value="<?php echo isset($rows['parcel_status']) ? $rows['parcel_status'] : ''; ?>" name="parcel" class="form-control" placeholder="Parcel">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Courier Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
