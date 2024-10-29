<?php

include("connection.php");
include("headings.php");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">SEND DELIVERY</h4>
                <p class="card-description">
                    CMS <i class="fa-solid fa-truck-fast menu-icon"></i>
                </p>
                <form method="POST">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Recipient Name</label>
                        <div class="col-md-12">
                            <input type="text" name="recipient_name" class="form-control" placeholder="Recipient Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Contact Person</label>
                        <div class="col-md-12">
                            <input type="number" name="contact" class="form-control" placeholder="Contact">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Deliver Date</label>
                        <div class="col-md-12">
                            <input type="date" name="deliver_date" class="form-control" placeholder="Delivery Date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Deliver Time</label>
                        <div class="col-md-12">
                            <input type="time" name="deliver_time" class="form-control" placeholder="Delivery Date">
                        </div>
                    </div>
               
          
                    <button type="submit" name="submit" class="btn btn-primary">Add Courier</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit'])){
  $recipient_name = $_POST['recipient_name'];
  $contact = $_POST['contact'];
  $deliver_date = $_POST['deliver_date'];
  $deliver_time = $_POST['deliver_time'];


    
    
    $sql = "INSERT INTO delivery (recipient_name , contact , deliver_date , deliver_time) VALUES ('$recipient_name', '$contact', '$deliver_date', '$deliver_time')";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        echo "<script>
        swal('Good job!', 'Courier added successfully!', 'success')
        setTimeout(function(){
            window.location.href = 'send_deliveryshow.php'
        }, 2000)
        </script>";
    } else {
        echo "<script>
        swal('Error!', 'There was an issue adding the courier.', 'error');
        </script>";
    }
}

include("footer.php");
?>
