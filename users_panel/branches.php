<?php
include("header.php");
include("connection.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.css">


<style>


body {
            font-family: 'Playfair Display', serif;
        }

.animated-heading, .animated-paragraph {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.5s ease-out, transform 0.5s ease-out;
}

.carousel-item.active .animated-heading,
.carousel-item.active .animated-paragraph {
    opacity: 1;
    transform: translateY(0);
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/transaction1.png" class="d-block w-100" alt="..." style="height: 70vh; object-fit: cover;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="bottom: 20%;">
                <h3 class="main-heading animated-heading display-4 text-capitalize text-white mb-4">Precision in Every Package</h3>
                <p class="animated-paragraph" style="font-family: 'Playfair Display', serif; color: #f0f0f0; font-size: 1.2em; text-align: center;">Where accuracy meets efficiency in logistics</p>
                <button class="btn rounded-pill mt-3" style="width: 200px; height: 50px; background-color:#008080; color:white; font-family:'Playfair Display', serif;">Track Shipment</button>
                <div class="social-media mt-3">
                    <a href="#" class="mx-2"><i class="fab fa-facebook fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-twitter fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-instagram fa-2x" style="color: #008080;"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-whatsapp fa-2x" style="color: #008080;"></i></a>
                </div>
            </div>
        </div>
        <!-- Add more carousel items here -->
    </div>
</div>






<div class="container">
    <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
        <h1 class="mb-4 mt-5">Our Courier Branches</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S.NO</th>
                            <th scope="col">BRANCH NAME</th>
                            <th scope="col">BRANCH LOCATION</th>
                            <th scope="col">BRANCH STATUS</th>
                            <th scope="col">BRANCH IMG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td><i class="icon fas fa-ship"></i> Leopards Courier Service</td>
                            <td># A، Shadman Town BUFFERZONE KDA، 7 ST 20/1, Karachi</td>
                            <td>Mon to Sat 9am-7pm, Sun Closed</td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFlPlXdtCnWMBXAooc7LehSQZrVwaywCqIsO_bgd2xbjmyKljP2HsSPAJYiDTOJrQMOM&usqp=CAU" alt="Leopards Courier Service" height="100px" width="100px"></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td><i class="icon fas fa-plane"></i> DHL Express Service Point</td>
                            <td>Lucky Star Signal, Shop #5, Ground Floor, Rafiq Plaza, Karachi</td>
                            <td>Mon to Sat 10am-6:30pm, Sun Closed</td>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/DHL-Fahrzeug.jpg/1200px-DHL-Fahrzeug.jpg" alt="DHL Express Service Point" height="100px" width="100px"></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td><i class="icon fas fa-truck"></i> Express Courier Link</td>
                            <td>84-K Ghazali Rd, Block 2 PECHS, Karachi</td>
                            <td>Mon to Sat 8am-6pm, Sun Closed</td>
                            <td><img src="https://s.rozee.pk/company_logos/28/55336858713220.jpg" alt="Express Courier Link" height="100px" width="100px"></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td><i class="icon fas fa-bicycle"></i> Rocket Courier Services</td>
                            <td>105-G Khi, P.E.C.H.S Block 2, Karachi</td>
                            <td>Mon to Sat 10am-7pm, Sun Closed</td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIu2xrwcHMcdE0sHWCrMSzJoTv4EpaCOKBVnjtrtGg5b2gGj-gFlTqa45_bqQbP20BB58&usqp=CAU" alt="Rocket Courier Services" height="100px" width="100px"></td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td><i class="icon fas fa-envelope"></i> TCS</td>
                            <td>W3H9+RPH, Federal B Area, Karachi</td>
                            <td>Mon to Fri 9am-7:30pm, Sat & Sun Closed</td>
                            <td><img src="https://trackhub.pk/wp-content/uploads/2023/02/KARACHI.webp" alt="TCS" height="100px" width="100px"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Service Start -->
<!-- Service Start -->
<div class="container-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/teams.png'); background-size: cover; background-position: center; padding-top: 5rem; padding-bottom: 5rem;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Vision & Mission</div>
                <h1 class="mb-4" style="color: #fff;">Our Vision: Transforming Delivery Services</h1>
                <p class="mb-4" style="color: #fff; font-family:'Playfair Display', serif;">We envision a world where delivery services are not just about logistics but about creating connections...</p>
                <h1 class="mb-4" style="color: #fff;">Our Mission: Excellence in Every Delivery</h1>
                <p class="mb-4" style="color: #fff; font-family:'Playfair Display', serif;">We are committed to providing exceptional courier services that meet and exceed customer expectations...</p>
                <a class="btn btn-outline-light rounded-pill px-4" href="" style="font-family:'Playfair Display', serif;">Read More</a>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded" style="background-color: #008080; height: 250px; padding: 20px;">
                                    <div class="service-icon" style="font-size: 40px; margin: auto;">
                                        <i class="fa fa-truck text-white"></i>
                                    </div>
                                    <h5 class="mb-3" style="color: #fff;">Local Delivery</h5>
                                    <p style="color: #fff; font-family:'Playfair Display', serif;">Prompt and reliable local delivery services to get your packages to their destination quickly and safely.</p>
                                    <a class="btn btn-outline-light rounded-pill px-3 mt-auto mx-auto" href="" style="font-family:'Playfair Display', serif;">Read More</a>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded" style="background-color: #008080; height: 250px; padding: 20px;">
                                    <div class="service-icon" style="font-size: 40px; margin: auto;">
                                        <i class="fa fa-globe text-white" ></i>
                                    </div>
                                    <h5 class="mb-3" style="color: #fff;">International Shipping</h5>
                                    <p style="color: #fff; font-family:'Playfair Display', serif;">Our international shipping services ensure your packages reach their global destinations efficiently and securely.</p>
                                    <a class="btn btn-outline-light rounded-pill px-3 mt-auto mx-auto" href="" style="font-family:'Playfair Display', serif;">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pt-md-4">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded" style="background-color: #008080; height: 250px; padding: 20px;">
                                    <div class="service-icon" style="font-size: 40px; margin: auto;">
                                        <i class="fa fa-shipping-fast text-white"></i>
                                    </div>
                                    <h5 class="mb-3" style="color: #fff;">Express Delivery</h5>
                                    <p style="color: #fff; font-family:'Playfair Display', serif;">For urgent deliveries, our express service guarantees your packages arrive as quickly as possible.</p>
                                    <a class="btn btn-outline-light rounded-pill  px-3 mt-auto mx-auto" href="" style="font-family:'Playfair Display', serif;">Read More</a>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded" style="background-color: #008080; height: 300px; padding: 20px;">
                                    <div class="service-icon" style="font-size: 40px; margin: auto;">
                                        <i class="fa fa-boxes text-white"></i>
                                    </div>
                                    <h5 class="mb-3" style="color: #fff;">Package Tracking</h5>
                                    <p style="color: #fff; font-family:'Playfair Display', serif;">Stay informed with our comprehensive package tracking system, ensuring you know the status of your delivery at all times.</p>
                                    <a class="btn btn-outline-light rounded-pill px-3 mt-auto mx-auto" href="" style="font-family:'Playfair Display', serif;">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Service End -->






<!-- FAQs Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="btn btn-sm border rounded-pill  px-3 mb-3" style="font-family:'Playfair Display', serif; color:#008080">Couriers FAQs</div>
            <h1 class="mb-4">Frequently Asked Questions</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ1">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color: bla;">
                                How fast are your courier services?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Our courier services typically deliver within 1-3 business days, depending on the destination.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do you offer international shipping?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, we provide international shipping services to many countries worldwide.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What are your delivery hours?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Our delivery hours are from 9:00 AM to 6:00 PM, Monday to Friday.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Can I track my package?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, we provide package tracking services for all shipments. You will receive a tracking number upon shipment.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What payment methods do you accept?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                We accept various payment methods, including credit/debit cards, PayPal, and bank transfers.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                What if my package is lost or damaged?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                In the rare event that your package is lost or damaged, we will work with you to file a claim and provide compensation or replacement.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                How can I schedule a pickup?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                You can schedule a pickup by contacting our customer service team or using our online booking system.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Do you offer express delivery services?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we offer express delivery services for urgent shipments. Additional charges may apply.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<?php
include("footer.php");
?>
