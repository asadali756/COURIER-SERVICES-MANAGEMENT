<?php
include("../Admin/connection.php");
session_start(); // Ensure session is started

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    echo "You must be logged in to download details.";
    exit;
}

// Check if tracking_id is provided
if (isset($_GET['tracking_id'])) {
    $tracking_id = mysqli_real_escape_string($conn, $_GET['tracking_id']);
    
    // Fetch shipment details from the database
    $sql = "SELECT image_path FROM couriers WHERE Tracking_Id = '$tracking_id'";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) === 1) {
        $shipment = mysqli_fetch_assoc($result);
        
        // Get the image path
        $imagePath = htmlspecialchars($shipment['image_path']); // Make sure this is the correct column name
        
        if (file_exists($imagePath)) {
            // Set headers to download the image
            header('Content-Type: image/jpeg'); // Change to the correct MIME type if necessary
            header('Content-Disposition: attachment; filename="' . basename($imagePath) . '"');
            readfile($imagePath); // Output the image file
            exit; // Stop further execution
        } else {
            echo "Image not found.";
            exit;
        }
    } else {
        echo "Shipment not found.";
        exit;
    }
} else {
    echo "No tracking ID provided.";
    exit;
}
?>
