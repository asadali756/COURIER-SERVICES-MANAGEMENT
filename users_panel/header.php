<?php
// Start the session only if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<style>
    body {
        font-family: 'Playfair Display', serif;
    }
    .navbar-nav .nav-link {
        font-weight: 400; /* Change to 700 for bold */
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Courier Management System</title>
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid  px-5 d-none d-lg-block" style="background-color: #008080;">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                    
                    <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+92-3212933678</a>
                    <a href="#" class="text-light me-0" ><i class="fas fa-envelope text-primary me-2"></i>asadaliabcd67@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f" style="color: #008080;"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter" style="color: #008080;"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram" style="color: #008080;"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-whatsapp" style="color: #008080;"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->



    <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0" style="color: #008080;">Courier Management System</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" style="color: #008080; font-family:'Playfair Display', serif;" >
                    <i class="fas fa-home me-1" style="color: #008080;"></i> Home
                </a>
                <a href="about.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>" style="color: #008080; font-family:'Playfair Display', serif;" >
                    <i class="fas fa-info-circle me-1" style="color: #008080;" ></i> About Us
                </a>
                <a href="branches.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'branches.php') ? 'active' : ''; ?>" style="color: #008080; font-family:'Playfair Display', serif;" >
                    <i class="fas fa-store me-1" style="color: #008080;" ></i> Branches
                </a>
                <a href="contact.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>" style="color: #008080; font-family:'Playfair Display', serif;" >
                    <i class="fas fa-phone me-1" style="color: #008080;" ></i> Contact Us
                </a>
                <a href="trackshipment.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'trackshipment.php') ? 'active' : ''; ?>" style="color: #008080; font-family:'Playfair Display', serif;" > 
                    <i class="fas fa-shipping-fast me-1" style="color: #008080;" ></i> Track Shipment
                </a>
            </div>
            <div class="dropdown">
    <?php if (isset($_SESSION['name'])): ?>
        <button class="btn btn-dark dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo htmlspecialchars($_SESSION['name']); ?>
        </button>
        <ul class="dropdown-menu" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
        </ul>
    <?php else: ?>
        <div class="d-flex">
            <a href="./signup.php" class="btn rounded-pill text-white py-2 px-4" style="background-color: #008080; font-family:'Playfair Display', serif;">
                <i class="fas fa-user me-1"></i> Signup
            </a>
            <div class="dropdown ms-2">
                <a class="btn rounded-pill text-white py-2 px-4" style="background-color: #008080; font-family:'Playfair Display', serif;" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-right-to-bracket"></i> Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                    <li><a class="dropdown-item" href="./login.php" style="font-family:'Playfair Display', serif;"">User Login</a></li>
                    <li><a class="dropdown-item" href="./adminlogin.php" style="font-family:'Playfair Display', serif;"">Agent Login</a></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>

        </div>
    </nav>
</div>

    <!-- Navbar End -->

    <!-- Additional content can go here -->

</body>
</html>
