<?php

include("../Admin/connection.php");
include("headings.php");


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!-- Basic Layout -->
 <div class="container">
 <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 text-center">Status<i class="fa-solid fa-user menu-icon"></i></h5>
                      
                    </div>
                    <div class="card-body">
                      <form method="POST">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Status Name</label>
                          <input type="text" name="status_name" class="form-control" id="basic-default-fullname" placeholder="User Name" />
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
                    <!-- Core JS -->


<?php
if(isset($_POST['submit'])){
    $status_name = $_POST['status_name'];



    $sql = "INSERT INTO status (status_name ) VALUES ('$status_name')";
    $result = mysqli_query($conn , $sql);


    echo "<script>
    swal('STATUS Has Been Added', 'You clicked the button!', 'success')
    setTimeout(function(){
      window.location.href='statusshow.php'
    }, 3000)
    </script>";
}





?>