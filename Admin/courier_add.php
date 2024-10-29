<?php

include("connection.php");
include("headings.php");



?>

<style> 
/* #forms{
    background: transparent;
}
#cards{
    background: transparent;
    max-width: 1000px;
    color: white;
    
    padding: 20px;
} */
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container" id="forms">
<div class="col-md-12">
    <div class="card" id="cards">
        <div class="card-body">
        <h4 class="card-title text-center text-white">
    <i class="fas fa-truck text-white"></i> ADD COURIER
</h4>

    
            <form method="POST">
                <div class="form-group row ">
                    <label  class="col-sm-3 col-form-label">Customer Name</label>
                    <div class="col-md-12">
                        <input type="text" name="name" class="form-control"  placeholder="Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Courier Name</label>
                    <div class="col-md-12">
                        <input type="text" name="courier_name" class="form-control" id="" placeholder="Courier Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Deliver Date</label>
                    <div class="col-md-12">
                        <input type="date" name="date" class="form-control" id="" placeholder="Date">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Contact</label>
                    <div class="col-md-12">
                        <input type="number" name="contact" class="form-control"  placeholder="Contact">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Vehicle Type</label>
                    <div class="col-md-12">
                        <input type="text" name="vehicle_type" class="form-control" placeholder="Vehicle type">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Parcel Name</label>
                    <div class="col-md-12">
                        <input type="text" name="parcel" class="form-control" id="" placeholder="parcel">
                    </div>
                </div>
    
                <!-- <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Tracking iD</label>
                    <div class="col-md-12">
                        
                    </div>
                </div>
               -->
              
                <button type="submit" name="submit" class="btn  " style="background-color: #008080; color:white">Courier Add</button>
                
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>






<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'asadaliabcd67@gmail.com';                     
    $mail->Password   = 'mqsxffvghejvhgvj';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;               

    $mail->setFrom('asadaliabcd67@gmail.com', 'Courier Service Team');

    $id = $_SESSION['id'];
    $email = $_SESSION['email'];

    $mail->addAddress($email);

    $name = $_POST['name'];
    $parcel_name = $_POST['parcel'];
  
    $contact = $_POST['contact'];
    $vehicle_type = $_POST['vehicle_type'];
    $courier_name = $_POST['courier_name'];
    $date = $_POST['date'];


    // $license_number = $_POST['license_number'];

    $tracking_id = random_int(100000,999999);
    $mail->isHTML(true);                                  
    $mail->Subject = 'Your Courier Tracking ID'; // Custom subject
    $mail->Body = '
        <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    color: #333;
                    padding: 20px;
                }
                .container {
                    background-color: #ffffff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                h2 {
                    color: #008080;
                }
                p {
                    font-size: 16px;
                }
                .tracking-id {
                    font-weight: bold;
                    font-size: 18px;
                    color: #008080;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h2>Hello ' . htmlspecialchars($name) . ',</h2>
                <p>Thank you for choosing our courier service. Your package has been successfully added to our system.</p>
                <p>Your Tracking ID is: <span class="tracking-id">' . htmlspecialchars($tracking_id) . '</span></p>
                <p>You can use this ID to track your parcel on our website.</p>
                <p>Best regards,<br>Your Courier Service Team</p>
            </div>
        </body>
        </html>
    ';
    
  


    $sql = "insert into  couriers (Customer_Name,Parcel, contact , vehicle_type,Tracking_Id,customer_id,courier_name,date)values('$name' ,'$parcel_name' ,'$contact' , '$vehicle_type' , '$tracking_id','$id','$courier_name','$date')";
    $result = mysqli_query($conn , $sql);

    $_SESSION['tracking_id'] = $tracking_id;
    $mail->send();
    echo "<script>
    swal('Good job!', 'You clicked the button!', 'success')

    </script>";
}

include("footer.php");
?>