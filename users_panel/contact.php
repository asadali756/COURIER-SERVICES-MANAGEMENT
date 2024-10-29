<?php

include("header.php");
include("connection.php");

?>

<!-- Include Google Fonts in the <head> section -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    body {
    }
    .appointment-form h1 {
        font-family: 'Playfair Display', serif;
        font-weight: 700; /* Bold */
        color: white;
    }
</style>
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/contact.png" class="d-block w-100" alt="..." style="height: 70vh; object-fit: cover;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="bottom: 20%;">
                <h3 class="main-heading animated-heading display-4 text-capitalize text-white mb-4" style="font-family: 'Playfair Display', serif; color: #fff; text-align: center; letter-spacing: 2px; line-height: 1.5;">Elevating Delivery Standards Every Day</h3>
                <p style="font-family: 'Playfair Display', serif; color: #f0f0f0; font-size: 1.2em; text-align: center;">Experience the difference with our dedicated service.</p>
                <button class="btn rounded-pill mt-3 " style="width: 200px; height: 50px; background-color:#008080; color:white; font-family:'Playfair Display', serif;" >Track Shipment</button>
                <div class="social-media mt-3">
                    <a href="#" class="mx-2"><i class="fab fa-facebook fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-twitter fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-instagram fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-whatsapp fa-2x" style="color: #008080;"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="container-fluid appointment py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0" style="color: #008080;">Our Commitment to You</h4>
            </div>
            <h1 class="display-3 mb-4">International Shipping</h1>
            <p class="mb-0" style="font-family:'Playfair Display', serif;">Reliable international courier services to send your packages across borders with ease and confidence.</p>
        </div>
    <div class="container py-5">
        <div class="row g-5 align-items-stretch">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                <div class="map-container h-100">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345090455!2d144.95373531531787!3d-37.81720997975134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f1a0c49%3A0x5045675218ced30!2sYour%20Location!5e0!3m2!1sen!2sus!4v1618201313300!5m2!1sen!2sus"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="appointment-form rounded p-5 h-100">
                    <p class="fs-4 text-uppercase " style="font-family:'Playfair Display', serif;"> Get In Touch</p>
                    <h1 class="display-5 mb-4">Contact Us</h1>
                    <form method="POST">
                        <div class="row gy-3 gx-4">
                            <div class="col-12">
                                <input type="text" name="firstname" class="form-control py-3 border-primary  text-dark" placeholder="Name" required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="lastname" class="form-control py-3 border-primary  text-dark" placeholder="Lastname" required>
                            </div>
                            <div class="col-12">
                                <input type="email" name="email" class="form-control py-3 border-primary text-dark" placeholder="Email" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-primary  text-dark" name="feedback" id="feedback" cols="30" rows="5" placeholder="Do you have any questions?" required></textarea>
                            </div>
                          
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn  text-white w-100 py-3 px-5" style="background-color: #20a4a4;">SUBMIT NOW</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Book Appointment End -->



<?php
if(isset($_POST['submit'])){
    // Escaping special characters for security
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    // Inserting the data into the database
    $sql = "INSERT INTO feedback (firstname, lastname, email, feedback) VALUES ('$firstname', '$lastname', '$email', '$feedback')";
    $result = mysqli_query($conn, $sql);

    // Check if insertion was successful
    if($result){
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Good job!',
            text: 'Feedback added successfully!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php';
            }
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
        });
        </script>";
    }
}
include("footer.php");

?>