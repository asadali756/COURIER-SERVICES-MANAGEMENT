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
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Courier Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="exampleSelectGender" name="courier_id">
                                <?php
                                $sql = "SELECT * FROM couriers";
                                $result = mysqli_query($conn, $sql);
                                while($rows = mysqli_fetch_assoc($result)){
                                    ?>
                                    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['Customer_Name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Amount</label>
                        <div class="col-sm-9">
                            <input type="text" name="amount" class="form-control" placeholder="Amount" required>
                        </div>
                    </div>
                    
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Payment Method</label>
                        <div class="col-sm-9">
                            <input type="text" name="payment_method" class="form-control" placeholder="Payment Method" required>
                        </div>
                    </div>
                    
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Payment Status</label>
                        <div class="col-sm-9">
                            <input type="text" name="payment_status" class="form-control" placeholder="Payment Status" required>
                        </div>
                    </div>
                    
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Transaction Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="transaction_date" class="form-control" placeholder="Date" required>
                        </div>
                    </div>
                    
                    <div class="form-group row mt-3">
                        <div class="col-sm-12 text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['submit'])){
    $courier_id = $_POST['courier_id'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];
    $payment_status = $_POST['payment_status'];
    $transaction_date = $_POST['transaction_date'];

    $sql = "INSERT INTO bills (courierid_fk, amount, payment_method, payment_status, transaction_date) VALUES ('$courier_id', '$amount', '$payment_method', '$payment_status', '$transaction_date')";
    $result = mysqli_query($conn , $sql);

    if($result){
        echo "<script>
        swal('Good job!', 'Bills added successfully!', 'success')
        setTimeout(function(){
            window.location.href = 'billsshow.php'
        }, 2000)
        </script>";
    } else {
        echo "<script>
        swal('Error!', 'There was an issue adding the courier.', 'error');
        </script>";
    }
}

?>
