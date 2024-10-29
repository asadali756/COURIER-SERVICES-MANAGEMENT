<?php
include("connection.php");
include("headings.php");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">NEW COURIERS</h4>
                <p class="card-description text-center">
                    CMS <i class="fa-solid fa-truck-fast menu-icon"></i>
                </p>
                <form method="POST">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">FROM</label>
                        <div class="col-sm-9">
                            <input type="text" name="from" class="form-control" placeholder="From" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">TO</label>
                        <div class="col-sm-9">
                            <input type="text" name="to" class="form-control" placeholder="To" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Number Of Parcel</label>
                        <div class="col-sm-9">
                            <input type="number" name="nop" class="form-control" placeholder="Number of Parcel" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Weight</label>
                        <div class="col-sm-9">
                            <input type="text" name="weight" class="form-control" placeholder="kg" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Length</label>
                        <div class="col-sm-9">
                            <input type="text" name="length" class="form-control" placeholder="cm" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12 text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Add Courier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $nop = $_POST['nop'];
    $weight = $_POST['weight'];
    $length = $_POST['length'];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO send_from (`from`, `to`, `nop`, `weight`, `length`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $from, $to, $nop, $weight, $length);

    if ($stmt->execute()) {
        echo "<script>
        swal('Good job!', 'Courier added successfully!', 'success');
        setTimeout(function(){
            window.location.href = 'send_fromshow.php';
        }, 2000);
        </script>";
    } else {
        echo "<script>
        swal('Error!', 'There was an issue adding the courier.', 'error');
        </script>";
    }
    $stmt->close();
}

include("footer.php");
?>
