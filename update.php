<?php
include 'database.php';
// $id = $_GET['updateid'];
// if(isset($_POST['update'])){
//     $fullname = $_POST['full-name'];
//     $username = $_POST['user-name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $sql = "UPDATE `user` SET `id`= $id,`full-name`= '$fullname',`user-name`=' $username',`email`= '$email',`password`= '$password'";
//     $resultt = mysqli_query($mysqli, $sql);
//     if($resultt){
//         echo "updated successfully";
//     } else {
//         die(mysqli_error($mysqli));
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <title>PHP Update</title>
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
                                    Update account
                                </h2>
                                <!-- form tag -->
                                <form action="" method="post" name="fromUser">
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" name="full-name" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">User Name</label>
                                        <input type="text" class="form-control form-control-lg" name="user-name" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control form-control-lg" name="email"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-lg" name="password"/>
                                    </div>

                                    <!-- button -->
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-primary text-white btn-block btn-lg gradient-custom-4" name="update">
                                            update
                                        </button>
                                    </div>
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