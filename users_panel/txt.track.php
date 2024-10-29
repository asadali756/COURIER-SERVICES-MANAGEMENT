<?php
include("../Admin/connection.php");
include("header.php");

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Track Shipment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, rgba(0, 128, 128, 0.8), rgba(255, 255, 255, 0.8)), url("img/track-shipment.png") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1a202c;
            margin-bottom: 1rem;
        }
        
        .card-body p {
            font-size: 1rem;
            color: #4a5568;
            margin-bottom: 0.5rem;
        }
        
        .status-card {
            background-color: #edf2f7;
            border-left: 4px solid #3182ce;
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 0.375rem;
        }

        .shipment-card {
            background: url('img/shipment-background.jpg') no-repeat center center;
            background-size: cover;
            border-radius: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .shipment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 0.5rem;
        }

        .shipment-card .card-body {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/transport-02.png" class="d-block w-100" alt="..." style="height: 70vh; object-fit: cover;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="bottom: 20%;">
                <h3 class="main-heading animated-heading display-4 text-capitalize text-white mb-4" style="font-family: 'Playfair Display', serif; color: #fff; text-align: center; letter-spacing: 2px; line-height: 1.5;">Innovative Solutions in Delivery</h3>
                <p style="font-family: 'Playfair Display', serif; color: #f0f0f0; font-size: 1.2em; text-align: center;">Harnessing technology to enhance your delivery experience.</p>
                <button class="btn rounded-pill mt-3 " style="width: 200px; height: 50px; background-color:#008080; color:white" >Track Shipment</button>
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
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">TRACK SHIPMENT</h4>
                    <form method="POST">
                        <div class="form-group">
                            <label>Tracking ID</label>
                            <input type="text" name="tracking_id" class="form-control" placeholder="Enter Tracking ID" required>
                        </div>
                        <button type="submit" name="track" class="btn btn-primary mt-4">Track</button>
                    </form>
                </div>
            </div>

            <!-- Display Shipment Details -->
            <?php
            if (isset($_POST['track'])) {
                $tracking_id = mysqli_real_escape_string($conn, $_POST['tracking_id']);
                $sql = "SELECT * FROM couriers WHERE Tracking_Id = '$tracking_id'";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) === 1) {
                    $shipment = mysqli_fetch_assoc($result);
                    echo "
                    <div class='shipment-card shadow-lg mt-4'>
                        <div class='card-body'>
                            <h4 class='card-title'>Shipment Details</h4>
                            <p><i class='bi bi-person-fill'></i> <strong>Courier Name:</strong> " . htmlspecialchars($shipment['Customer_Name']) . "</p>
                            <p><i class='bi bi-box'></i> <strong>Parcel Name:</strong> " . htmlspecialchars($shipment['Parcel']) . "</p>
                            <p><i class='bi bi-telephone'></i> <strong>Contact:</strong> " . htmlspecialchars($shipment['contact']) . "</p>
                            <p><i class='bi bi-truck'></i> <strong>Vehicle Type:</strong> " . htmlspecialchars($shipment['vehicle_type']) . "</p>
                            <p><i class='bi bi-identifier'></i> <strong>Tracking ID:</strong> " . htmlspecialchars($shipment['Tracking_Id']) . "</p>
                            <p><i class='bi bi-calendar'></i> <strong>Deliver Date:</strong> " . htmlspecialchars($shipment['date']) . "</p>
                            <a href='download.php?tracking_id=" . urlencode($tracking_id) . "' class='btn btn-primary mt-3'>Download Details</a>
                        </div>
                    </div>";

                    // Display Parcel Status
                    $parcel_query = mysqli_query($conn, "SELECT status.status_name FROM couriers JOIN status ON status.id = couriers.parcel_status WHERE couriers.Tracking_Id = '$tracking_id'");
                    if ($parcel_query && mysqli_num_rows($parcel_query) > 0) {
                        $parcel_result = mysqli_fetch_assoc($parcel_query);
                        echo "
                        <div class='status-card mt-4'>
                            <h4 class='card-title'>Parcel Status</h4>
                            <p>" . htmlspecialchars($parcel_result['status_name']) . "</p>
                        </div>";
                    }
                } else {
                    echo "
                    <div class='container mt-4'>
                        <div class='card mt-4'>
                            <div class='card-body'>
                                <h4 class='card-title'>Shipment Not Found</h4>
                                <p>No shipment found with the provided tracking ID.</p>
                            </div>
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php include("footer.php"); ?>
