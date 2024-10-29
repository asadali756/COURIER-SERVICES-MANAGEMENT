
<?php
include("connection.php");
include("headings.php");

$id = $_GET['id'];

// Prepared statement to select data to prefill the form
if ($stmt = $conn->prepare("SELECT * FROM admin WHERE id = ?")) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
} else {
    die("Failed to prepare statement.");
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">users</h4>
                <p class="card-description text-center">
                    CMS <i class="fa-solid fa-truck-fast menu-icon"></i>
                </p>
                <form method="POST">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo htmlspecialchars($row['name']); ?>" name="name" class="form-control" placeholder="Recipient Name" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">email</label>
                        <div class="col-sm-9">
                            <input type="email" value="<?php echo htmlspecialchars($row['email']); ?>" name="email" class="form-control" placeholder="Contact" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" value="<?php echo htmlspecialchars($row['password']); ?>" name="password" class="form-control" placeholder="Delivery Date" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12 text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Update Courier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepared statement to prevent SQL injection
    if ($stmt = $conn->prepare("UPDATE user SET name = ?, email = ?, password = ? WHERE id = ?")) {
        $stmt->bind_param("ssssi", $name, $email, $password, $id);

        if ($stmt->execute()) {
            echo "<script>
            swal('Good job!', 'Courier updated successfully!', 'success');
            setTimeout(function(){
                window.location.href = 'usershow.php';
            }, 2000);
            </script>";
        } else {
            echo "<script>
            swal('Error!', 'There was an issue updating the courier.', 'error');
            </script>";
        }
        $stmt->close();
    } else {
        die("Failed to prepare statement.");
    }
}

include("footer.php");
$conn->close();
?>
userupdate.php
Displaying userupdate.php.