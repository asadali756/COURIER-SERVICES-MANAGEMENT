<?php

include("../Admin/connection.php");


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="/user panel/style.css">
    <title>Document</title>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    color: #fff;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #25252b;
}

.container {
    position: relative;
    width: 750px;
    height: 450px;
    border: 2px solid #A87233;
    box-shadow: 0 0 25px #A87233;
    overflow: hidden;
}

.container .form-box {
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.form-box.Login {
    left: 0;
    padding: 0 40px;
}

.form-box.Login .animation {
    transform: translateX(0%);
    transition: .7s;
    opacity: 1;
    transition-delay: calc(.1s * var(--S));
}

.container.active .form-box.Login .animation {
    transform: translateX(-120%);
    opacity: 0;
    transition-delay: calc(.1s * var(--D));
}

.form-box.Register {
    right: 0;
    padding: 0 60px;
}

.form-box.Register .animation {
    transform: translateX(120%);
    transition: .7s ease;
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--S));
}

.container.active .form-box.Register .animation {
    transform: translateX(0%);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--li));
}

.form-box h2 {
    font-size: 32px;
    text-align: center;
}

.form-box .input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin-top: 25px;
}

.input-box input {
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    background: transparent;
    font-size: 16px;
    color: #fff;
    border-bottom: 2px solid #fff;
    font-weight: 600;
    padding-right: 23px;
    transition: .5s;
}

.input-box input:focus,
.input-box input:valid {
    border-bottom: 2px solid #A87233;
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    color: #fff;
    transition: .5s;
}

.input-box input:focus ~ label,
.input-box input:valid ~ label {
    top: -5px;
    color: #A87233;
}

.input-box i {
    position: absolute;
    top: 50%;
    right: 0;
    font-size: 18px;
    transform: translateY(-50%);
    transition: .5s;
}

.input-box input:focus ~ i,
.input-box input:valid ~ i {
    color: #A87233;
}

.btn {
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    border: 2px solid #A87233;
    overflow: hidden;
    z-index: 1;
}

.btn::before {
    content: "";
    position: absolute;
    height: 300%;
    width: 100%;
    background: linear-gradient(#25252b, #A87233, #25252b, #A87233);
    top: -100%;
    left: 0;
    z-index: -1;
    transition: .5s;
}

.btn:hover::before {
    top: 0;
}

.regi-link {
    font-size: 14px;
    text-align: center;
    margin: 20px 0 10px;
}

.regi-link a {
    text-decoration: none;
    color: #A87233;
    font-weight: 600;
}

.regi-link a:hover {
    text-decoration: underline;
}

.info-content {
    position: absolute;
    top: 0;
    height: 100%;
    width: 50%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.info-content.Login {
    right: 0;
    text-align: right;
    padding: 0 40px 60px 150px;
}

.info-content.Login .animation {
    transform: translateX(0);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--S));
    opacity: 1;
    filter: blur(0);
}

.container.active .info-content.Login .animation {
    transform: translateX(120%);
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--D));
}

.info-content.Register {
    left: 0;
    text-align: left;
    padding: 0 150px 60px 40px;
    pointer-events: none;
}

.info-content.Register .animation {
    transform: translateX(-120%);
    transition: .7s ease;
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--S));
}

.container.active .info-content.Register .animation {
    transform: translateX(0%);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--li));
}

.info-content h2 {
    text-transform: uppercase;
    font-size: 36px;
    line-height: 1.3;
}

.info-content p {
    font-size: 16px;
}

.container .curved-shape {
    position: absolute;
    top: -5px;
    right: 0;
    height: 600px;
    width: 850px;
    background: linear-gradient(45deg, #25252b, #A87233);
    transform: rotate(10deg) skewY(40deg);
    transform-origin: bottom right;
    transition: 1.5s ease;
    transition-delay: 1.6s;
}

.container.active .curved-shape {
    transform: rotate(0deg) skewY(0deg);
    transition-delay: .5s;
}

.container .curved-shape2 {
    position: absolute;
    top: 100%;
    left: 250px;
    height: 700px;
    width: 850px;
    background: #A87233;
    border-top: 3px solid #A87233;
    transform: rotate(0deg) skewY(0deg);
    transform-origin: bottom left;
    transition: 1.5s ease;
    transition-delay: .5s;
}

.container.active .curved-shape2 {
    transform: rotate(-11deg) skewY(-41deg);
    transition-delay: 1.2s;
}

</style>
<body>
    <!-- login form -->
    <div class="container">
        <div class="curved-shape"></div>
        <div class="curved-shape2"></div>
        <div class="form-box Login">
            <h2 class="animation " style="--D:0; --S:21;">USER REGISTERED</h2>
            <form action="#" method="POST">
                <div class="input-box animation" style="--D:1; --S:22;">
                    <input type="text" name="name" required>
                    <label>User Name</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--D:1; --S:22;">
                    <input type="text" name="email" required>
                    <label>Email</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--D:2; --S:23;">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box animation" style="--D:3; --S:24;">
                    <button class="btn" name="submit" type="submit">Regitered</button>
                </div>
                <div class="regi-link animation" style="--D:4; --S:25;">
                    <p>Don't have an account? <a href="#" class="SignUpLink">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="info-content Login">
            <h4 class="animation" style="--D:0; --S:20;">Registerd</h4>
            <p class="animation" style="--D:1; --S:21;">Speed, safety, reliability - our courier service delivers it all</p>
        </div>
        <div class="form-box Register">
            <h2 class="animation" style="--li:17; --S:0;">Register</h2>
            <form action="#">
                <div class="input-box animation" style="--li:18; --S:1;">
                    <input type="text" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--li:19; --S:2;">
                    <input type="email" required>
                    <label>Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box animation" style="--li:20; --S:3;">
                    <input type="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box animation" style="--li:21; --S:4;">
                    <button class="btn" type="submit">Register</button>
                </div>
                <div class="regi-link animation" style="--li:22; --S:5;">
                    <p>Already have an account? <a href="#" class="SignInLink">Sign In</a></p>
                </div>
            </form>
        </div>
        <div class="info-content Register">
            <h2 class="animation" style="--li:17; --S:0;">WELCOME BACK!</h2>
            <p class="animation" style="--li:18; --S:1;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, aspernatur.</p>
        </div>
    </div>
</body>
</html>


<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $password = $_POST['password'];
  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO registered (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
  $result = mysqli_query($conn, $sql);
   
        echo "<script>
        swal('Good job!', 'User Registered successfully!', 'success')
        setTimeout(function(){
            window.location.href = 'index.php'
        }, 2000)
        </script>";
    }




?>