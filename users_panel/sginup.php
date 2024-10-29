<?php

include("connection.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .container{
        max-width: 400px;
        margin-top: 10%;
   
    }
</style>
<body class="text-center">
    <div class="container">
    
    <main class="form-signin">
      <form method="POST">
        <img class="mb-4" src="https://letslearnenglish.com/wp-content/uploads/2017/06/learning-online.jpg" alt="" width="72" height="57" style="border-radius: 50px;">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    
        <div class="form-floating">
          <input type="text" class="form-control " name="name" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput"><i class="fa-solid fa-user"></i> User Name</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control mt-3" name="email" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput"><i class="fa-regular fa-envelope"></i> Email </label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control mt-3" name="password" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword"><i class="fa-solid fa-lock"></i> Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-3" name="submit" type="submit">Sign-up</button>
        <p class="mt-5 mb-3 text-muted">© 2024–2025</p>
      </form>
    </main>
    
    </div>
        
      
    
    </body>
</html>


<?php


include("connection.php");


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

   


    $stmt = $conn->prepare("INSERT INTO usertable (name, email, password) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $name, $email, $hashed_password);
        if ($stmt->execute()) {
            echo "<script>
                alert('Account Registered successfully!');
                setTimeout(function(){
                    window.location.href='index.php';
                }, 3000);
                </script>";
        } else {
            echo "<script>
                alert('Error: Could not register the account.');
                </script>";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}




?>