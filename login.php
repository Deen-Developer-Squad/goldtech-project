<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//     include 'database.php';

//     $username = $_POST['user-name'];
//     $password = $_POST['password'];

//     $sql = "SELECT * FROM `user` WHERE `user-name` = '$username' and `password` = '$password'"
// }

session_start();
include_once 'database.php';

if (isset($_POST['login'])) {
    $password = $_POST['password'];
    // $mainPass = $user_passcode;
    $username = $_POST['user-name'];

    $user_log = mysqli_query(
        $mysqli,
        "SELECT `id`, `full-name`, `user-name`, `email`, `password` FROM `user` WHERE `user-name`='$username' and `password` ='$password'"
    );
    $log = mysqli_fetch_array($user_log);

    if ($log > 0) {
        $_SESSION['id'] = $log['id'];
        $_SESSION['full-name'] = $log['email'];
        header('location: dashboard.php');
        // echo "log in successful";
    } else {
        echo "<script>alert ('invalid email address or password');</script>";
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <title>PHP SignUp</title>
</head>

<body>
    <section class="vh-100 bg-image" style="
        background-image: url('https://www.desktopbackground.org/download/2880x1800/2015/12/30/1065557_images-backgrounds_5360x5352_h.jpg');
      ">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px">
                            <div class="card-body p-5">
                                <!-- form heading -->
                                <h1 class="text-center mb-5 text-danger">
                                    Gold Tech Project
                                </h1>
                                <h2 class="text-uppercase text-center mb-5">
                                    Log into account
                                </h2>
                                <!-- form tag -->
                                <form action="login.php" method="post" novalidate>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">User Name</label>
                                        <input type="text" class="form-control form-control-lg" name="user-name" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-lg" name="password" />
                                    </div>

                                    <!-- button -->
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-primary text-white btn-block btn-lg gradient-custom-4" name="login">
                                            Login
                                        </button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">
                                        Don't have an account?
                                        <a href="signup.html" class="fw-bold text-body"><u>SignUp here</u></a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>