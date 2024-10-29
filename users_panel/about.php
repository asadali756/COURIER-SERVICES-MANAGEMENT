<?php

include("connection.php");
include("header.php");

?>
<style>
.carousel-caption h2, 
.carousel-caption p {
    font-family: 'Arial', sans-serif; 
    text-align: center;
    opacity: 0; /* Hide initially */
    animation: fadeIn 1.5s ease-in-out forwards; 
}

.carousel-caption h2 {
    animation-delay: 0.5s; /* Delay for h2 */
}

.carousel-caption p {
    animation-delay: 0.7s; /* Delay for p */
}

.button-group .btn {
    font-size: 1em; /* Adjust size as needed */
}

.carousel-caption .btn {
    width: 200px;  /* Set width */
    height: 50px;  /* Set height */
    font-size: 1em; /* Adjust font size as needed */
}

.social-media i {
    transition: transform 0.3s;
}

.social-media i:hover {
    transform: scale(1.1); /* Add hover effect */
}

.animated-heading {
    animation: fadeIn 1.5s ease-in-out forwards;
    opacity: 0; /* Hide initially */
}

@keyframes fadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/transport-02.png" class="d-block w-100" alt="..." style="height: 70vh; object-fit: cover;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="bottom: 20%;">
                <h3 class="main-heading animated-heading display-4 text-capitalize text-white mb-4" style="font-family: 'Playfair Display', serif; color: #fff; text-align: center; letter-spacing: 2px; line-height: 1.5;">Innovative Solutions in Delivery</h3>
                <p style="font-family: 'Playfair Display', serif; color: #f0f0f0; font-size: 1.2em; text-align: center;">Harnessing technology to enhance your delivery experience.</p>
                <button class="btn rounded-pill mt-3 " style="width: 200px; height: 50px; background-color:#008080; color:white; font-family:'Playfair Display', serif;"  >Track Shipment</button>
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
        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img pb-5 ps-5">
                    <img src="img/teams.png" class="img-fluid rounded" style="width: 400px; height: 300px; object-fit: cover;" alt="Image">
                    <div class="about-img-inner">
                        <img src="img/fromto.png" class="img-fluid rounded-circle" style="width: 150px; height: 150px;" alt="Image">
                    </div>
                    <!-- <div class="about-experience">15 years experience</div> -->
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h4 class="sub-title pe-3 mb-0" style="color: #008080;">About Us</h4>
                    <h1 class="display-3 mb-4" style="font-family:'Playfair Display', serif;">Delivering Excellence in Courier Services</h1>
                    <p class="mb-4" style="font-family:'Playfair Display', serif;">Our mission is to provide top-notch courier services that ensure your packages are delivered safely, quickly, and reliably. We are dedicated to offering personalized solutions tailored to meet the unique needs of each customer.</p>
                    <div class="mb-4">
                        <p class=""  style="color: #008080; font-family:'Playfair Display', serif;" ><i class="fa fa-check  me-2" style="color: #008080;"></i>Reliable Delivery</p>
                        <p class=""  style="color: #008080; font-family:'Playfair Display', serif;"><i class="fa fa-check  me-2" style="color: #008080;"></i>Professional Team</p>
                        <p class=""  style="color: #008080; font-family:'Playfair Display', serif;"><i class="fa fa-check  me-2" style="color: #008080;"></i>24/7 Customer Support</p>
                    </div>
                    <a href="./branches.php" class="btn  rounded-pill py-3 px-5" style="background-color: #008080; color:white; font-family:'Playfair Display', serif;">Our Branches</a>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- About End -->

        
        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0" style="color: #008080;">Why Choose Us</h4>
            </div>
            <h1 class="display-3 mb-4">Why Choose Us? Your Trusted Courier Partner</h1>
            <p class="mb-0" style="font-family:'Playfair Display', serif;">At Courier Services, we prioritize your needs with reliable and fast delivery options. Experience seamless logistics and customer satisfaction every step of the way!</p>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Existing Cards -->
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-truck fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Fast Delivery</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;">We ensure your packages reach their destination on time, every time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-shield-alt fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Secure Handling</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;">Your packages are handled with care, ensuring safety and security throughout the process.</p>
                    </div>
                </div>
            </div>
            <!-- New Cards -->
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-clock fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Real-Time Tracking</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;">Track your shipment in real time with our user-friendly tracking system.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-user-friends fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Customer Support</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;">Our dedicated support team is available 24/7 to assist you with any inquiries.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-tags fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Competitive Pricing</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;">Enjoy affordable shipping rates without compromising on service quality.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-check-circle fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Satisfaction Guaranteed</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;" style="font-family:'Playfair Display', serif;">We stand by our service with a satisfaction guarantee for all our customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-comments fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Feedback Welcome</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;" style="font-family:'Playfair Display', serif;">Your feedback helps us improve. We're always here to listen!</p>
                    </div>
                </div>
            </div>
            <!-- Additional Cards -->
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-truck-loading fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Reliable Logistics</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;" style="font-family:'Playfair Display', serif;">Our logistics network ensures that your deliveries are always reliable.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-paper-plane fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Global Reach</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;" style="font-family:'Playfair Display', serif;">We operate globally, ensuring your packages reach every corner of the world.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-satellite-dish fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Advanced Technology</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;">Utilizing cutting-edge technology to streamline our services and improve efficiency.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="feature-item p-4 d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded-circle">
                            <i class="fas fa-globe fa-4x " style="color: #008080;"></i>
                        </div>
                    </div>
                    <div class="feature-content flex-grow-1 d-flex flex-column">
                        <h5 class="mb-4">Eco-Friendly Options</h5>
                        <p class="mb-0" style="font-family:'Playfair Display', serif;">We offer eco-friendly shipping options to minimize our carbon footprint.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
            </div> -->
        </div>
    </div>
</div>

<style>
.feature-item {
    background-color: #f8f9fa; /* Light background for cards */
    border: 1px solid #dee2e6; /* Border for cards */
    border-radius: 10px; /* Rounded corners */
    transition: transform 0.3s; /* Scale on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    display: flex;
    flex-direction: column;
    height: 100%; /* Ensures all cards are the same height */
}

.feature-item:hover {
    transform: translateY(-5px); /* Lift effect on hover */
}

.feature-icon {
    display: flex;
    justify-content: center; /* Center icon */
    align-items: center; /* Center icon vertically */
    width: 80px; /* Fixed width for icon container */
    height: 80px; /* Fixed height for icon container */
    margin: 0 auto; /* Center the icon container */
}

.feature-content {
    flex-grow: 1; /* Allows the content to take up remaining space */
    text-align: center; /* Center content text */
}

@media (max-width: 768px) {
    .feature-item {
        margin-bottom: 20px; /* Space between cards on smaller screens */
    }
}
</style>

        <!-- Feature End -->

<?php


include("footer.php");

?>