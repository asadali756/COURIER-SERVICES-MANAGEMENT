<?php


include("header.php");
include("connection.php");


?>
<style>
.features {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/faqs-01.png');
    background-size: cover;
    background-position: center;
    color: #fff;
}

.feature-item {
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
    border-color: rgba(255, 255, 255, 0.5);
}
@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
}

.animate-title {
    animation: fadeIn 1s ease-in-out;
}

.delivery-box {
    clip-path: polygon(10% 0%, 90% 0%, 100% 10%, 100% 90%, 90% 100%, 10% 100%, 0% 90%, 0% 10%);
    object-fit: cover; /* Ensure the image covers the shape */
    border-radius: 10px; /* Slight rounding for a softer look */
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel ">
    <div class="header-carousel-item">
        <img src="img/trackshipments.png" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption ">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Courier Services </h5>
                <h1 class="display-1 text-capitalize text-white mb-4">Heavy Parcel Handling</h1>
               
                <div class="social-media mb-3">
                    <a href="#" class="mx-2"><i class="fab fa-facebook fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-twitter fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-instagram fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-whatsapp fa-2x" style="color: #008080;"></i></a>
                </div>
                <a class="btn  rounded-pill text-white py-3 px-5" href="#" style="background-color:#008080 ; font-family:'Playfair Display', serif;"">Track Shipment</a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="img/front-02.png" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Courier Services </h5>
                <h1 class="display-1 text-capitalize text-white mb-4">Express Delivery</h1>
                <!-- <p class="mb-5 fs-5 animated slideInDown">Fast and reliable courier service within 24 hours.</p> -->
                <div class="social-media mb-3">
                    <a href="#" class="mx-2"><i class="fab fa-facebook fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-twitter fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-instagram fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-whatsapp fa-2x" style="color: #008080;"></i></a>
                </div>
                <a class="btn  rounded-pill text-white py-3 px-5" href="#" style="background-color:#008080 ; font-family:'Playfair Display', serif;"">Track Shipment</a>
            </div>
        </div>
    </div>
</div>

            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-fluid about py-5" style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <img src="img/e-dis.png" class="img-fluid delivery-box wow fadeInLeft" alt="About Us" style="height: 350px; object-fit: cover; margin-top: 113px;">
            </div>
            <div class="col-lg-6">
                <div class="section-title mb-4 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0"  style="color: #008080; font-family:'Playfair Display', serif;"">ShipSmart</h4>
                    </div>
                    <h1 class="display-3 mb-4" >Innovative Delivery Solutions.</h1>
                    <p class="mb-0" style="font-family:'Playfair Display', serif;">Discover how we revolutionize the delivery experience with our innovative solutions.</p>
                </div>
                <div class="feature-list">
                    <div class="d-flex align-items-center mb-3 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fas fa-clock fa-2x  me-3" style="color: #008080;"></i>
                        <div>
                            <h5 class="mb-1 text-dark" style="font-family: 'YourChosenFont', sans-serif;">Timely Deliveries</h5>
                            <p class="mb-0 text-muted" style="font-family:'Playfair Display', serif;">We prioritize punctuality to ensure your packages arrive on time, every time.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3 wow fadeInUp" data-wow-delay="0.4s">
                        <i class="fas fa-user-friends fa-2x  me-3" style="color: #008080;"></i>
                        <div>
                            <h5 class="mb-1 text-dark" style="font-family: 'YourChosenFont', sans-serif;">24/7 Customer Support</h5>
                            <p class="mb-0 text-muted" style="font-family:'Playfair Display', serif;">Our team is here for you around the clock, ready to assist with your needs.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media Icons -->
                <div class="social-media mt-4 wow fadeInUp text-center" data-wow-delay="0.6s">
                    <h5 class="text-dark" style="font-family:'Playfair Display', serif;">Connect with Us:</h5>
                    <a href="#" class="text-primary me-3"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-info me-3"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-danger me-3"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-primary"><i class="fab fa-whatsapp fa-2x" style="color: green;"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->



 <!-- Features Start -->
<div class="container-fluid features py-5 wow zoomIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title mb-5 text-center">
            <h1 class="display-3 mb-4 text-white">Our Key Features</h1>
            <p class="text-white-50">Discover the advantages of choosing our courier services.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-clock fa-3x " style="color: #008080;"></i>
                    </div>
                    <h5 class="mb-3 text-white">Timely Deliveries</h5>
                    <p class="text-white-50">We ensure prompt delivery of your packages, no matter the distance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-shield-alt fa-3x " style="color: #008080;"></i>
                    </div>
                    <h5 class="mb-3 text-white">Secure Shipping</h5>
                    <p class="text-white-50">Your packages are safe with us, with top-notch security measures in place.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-dollar-sign fa-3x " style="color: #008080;"></i>
                    </div>
                    <h5 class="mb-3 text-white">Competitive Rates</h5>
                    <p class="text-white-50">We offer affordable pricing without compromising on quality.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-user-friends fa-3x " style="color: #008080;"></i>
                    </div>
                    <h5 class="mb-3 text-white">Customer Support</h5>
                    <p class="text-white-50">Our dedicated team is available 24/7 to assist you with any inquiries.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-truck fa-3x " style="color: #008080;"></i>
                    </div>
                    <h5 class="mb-3 text-white">Wide Coverage</h5>
                    <p class="text-white-50">We cover a vast network of locations for all your delivery needs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-clipboard-list fa-3x " style="color: #008080;"></i>
                    </div>
                    <h5 class="mb-3 text-white">Real-time Tracking</h5>
                    <p class="text-white-50">Track your shipments in real-time for peace of mind.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0" style="color: #008080;">Our Services</h4>
                    </div>
                    <h1 class="display-3 mb-4">Secure Storage Solutions.</h1>
                    <p class="mb-0" style="font-family:'Playfair Display', serif;">We offer secure storage facilities for packages awaiting pickup or delivery, ensuring the safety and integrity of your items.</p>
                </div>
                <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item rounded">
        <div class="service-img rounded-top">
            <img src="img/card6.png" class="img-fluid rounded-top w-100" alt="">
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner text-center">
                <h5 class="mb-4">Delivery Scheduling</h5>
                <p class="mb-4" style="font-family:'Playfair Display', serif;">Set preferred delivery times to suit customer convenience and operational efficiency.</p>
                <div class="social-icons mb-2">
                <a href="#" class="text-primary me-2"><i class="fab fa-facebook-f" style="color: #1877F2;"></i></a> <!-- Facebook original color -->
                    <a href="#" class="me-2"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a> <!-- Twitter original color -->

                    <a href="#" class="text-danger me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a> <!-- WhatsApp Icon -->
                </div>
            </div>
        </div>
    </div>
</div>

                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/transport-02.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner text-center">
                                    <h5 class="mb-4">Real-Time Tracking</h5>
                                    <p class="mb-4" style="font-family:'Playfair Display', serif;">Stay updated with live tracking of your shipments from pickup to delivery.</p>
                                    <div class="social-icons mb-2">
                <a href="#" class="text-primary me-2"><i class="fab fa-facebook-f" style="color: #1877F2;"></i></a> <!-- Facebook original color -->
                    <a href="#" class="me-2"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a> <!-- Twitter original color -->

                    <a href="#" class="text-danger me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a> <!-- WhatsApp Icon -->
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/transport-03.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner text-center">
                                    <h5 class="mb-4">Order Management</h5>
                                    <p class="mb-4" style="font-family:'Playfair Display', serif;">Streamline your order processing with easy input and management of shipment details.</p>
                                    <div class="social-icons mb-2">
                <a href="#" class="text-primary me-2"><i class="fab fa-facebook-f" style="color: #1877F2;"></i></a> <!-- Facebook original color -->
                    <a href="#" class="me-2"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a> <!-- Twitter original color -->

                    <a href="#" class="text-danger me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a> <!-- WhatsApp Icon -->
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/e-dis.png " class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner text-center">
                                    <h5 class="mb-4"> Automated Notifications</h5>
                                    <p class="mb-4" style="font-family:'Playfair Display', serif;">Receive automatic updates  email for each stage of the delivery process.</p>
                                    <div class="social-icons mb-2">
                <a href="#" class="text-primary me-2"><i class="fab fa-facebook-f" style="color: #1877F2;"></i></a> <!-- Facebook original color -->
                    <a href="#" class="me-2"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a> <!-- Twitter original color -->

                    <a href="#" class="text-danger me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a> <!-- WhatsApp Icon -->
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/warehousing01.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner text-center">
                                    <h5 class="mb-4">Inventory Management</h5>
                                    <p class="mb-4" style="font-family:'Playfair Display', serif;">Keep track of your shipping supplies and stock levels in real-time.</p>
                                    <div class="social-icons mb-2">
                <a href="#" class="text-primary me-2"><i class="fab fa-facebook-f" style="color: #1877F2;"></i></a> <!-- Facebook original color -->
                    <a href="#" class="me-2"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a> <!-- Twitter original color -->

                    <a href="#" class="text-danger me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a> <!-- WhatsApp Icon -->
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/overnight.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner text-center">
                                    <h5 class="mb-4">Multi-Carrier Support</h5>
                                    <p class="mb-4" style="font-family:'Playfair Display', serif;">Access multiple courier services in one platform for better shipping options.</p>
                                    <div class="social-icons mb-2">
                <a href="#" class="text-primary me-2"><i class="fab fa-facebook-f" style="color: #1877F2;"></i></a> <!-- Facebook original color -->
                    <a href="#" class="me-2"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a> <!-- Twitter original color -->

                    <a href="#" class="text-danger me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a> <!-- WhatsApp Icon -->
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/card4.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner text-center">
                                    <h5 class="mb-4">Cost Calculation</h5>
                                    <p class="mb-4" style="font-family:'Playfair Display', serif;">Instantly calculate shipping costs based on weight, distance, and service type.</p>
                                    <div class="social-icons mb-2">
                <a href="#" class="text-primary me-2"><i class="fab fa-facebook-f" style="color: #1877F2;"></i></a> <!-- Facebook original color -->
                    <a href="#" class="me-2"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a> <!-- Twitter original color -->

                    <a href="#" class="text-danger me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a> <!-- WhatsApp Icon -->
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/card5.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner text-center">
                                    <h5 class="mb-4">Customer Portal</h5>
                                    <p class="mb-4" style="font-family:'Playfair Display', serif;">Provide customers with access to track their shipments and manage orders.</p>
                                    <div class="social-icons mb-2 ">
                <a href="#" class="text-primary me-2"><i class="fab fa-facebook-f" style="color: #1877F2;"></i></a> <!-- Facebook original color -->
                    <a href="#" class="me-2"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a> <!-- Twitter original color -->

                    <a href="#" class="text-danger me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a> <!-- WhatsApp Icon -->
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Services More</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Services End -->


        <?php

include("footer.php");


?>