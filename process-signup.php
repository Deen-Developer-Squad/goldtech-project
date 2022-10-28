<?php

//full name
if (empty($_POST["full-name"])) {
    die("Full name is required");
}

//username
if (empty($_POST["user-name"])) {
    die("Full name is required");
}

//email
if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("enter a valid email address");
}

//PASSWORD
if (strlen($_POST["password"]) < 8) {
    die("password must be at least 8 characters");
}

if (! preg_match("/[a-z]/i", $_POST["password"])) {
    die("password must contain at least one letter");
}

if (! preg_match("/[0-9]/", $_POST["password"])) {
    die("password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password-confirm"]) {
    die("password do not match");
}


// //from database
// $mysqli = require __DIR__ . "/database.php";

// //insert into database
// $sql = "INSERT INTO `user` (`full-name`, `user-name`, `email`, `password`) VALUES (?, ?, ?, ?)";

// // $sql = "INSERT INTO `user`(`full-name`, `user-name`, `email`, `password`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]')";

// $stmt = $mysqli -> stmt_init();

// if (! $stmt -> prepare($sql)) {
//     die("SQL error: " . $mysqli -> error);
// }

// $stmt -> bind_param("ssss",
// $_POST["full-name"],
// $_POST["user-name"],
// $_POST["email"],
// $_POST["password"],
// );


// if ($stmt -> execute()) {
//     header("Location: dashboard.html");
//     exit;
// } else {
//     die ($mysqli -> error);
// }





// print_r($_POST);




//METHOD TWO!!!!


// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     include 'database.php';
// }



// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     include 'database.php';
//     $fullname = $_POST['full-name'];
//     $username = $_POST['user-name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $sql = "INSERT INTO `user` (`full-name`, `user-name`, `email`, `password`)
//     values('$fullname', '$username', ' $email', '$password')";
//     $result = mysqli_query($mysqli, $sql);

//     if ($result){
//         echo "data inserted successfully";
//     }else {
//         die(mysqli_error($mysqli));
//     }
// }


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'database.php';
    $fullname = $_POST['full-name'];
    $username = $_POST['user-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM `user` WHERE email = '$email'";
    $user_log = mysqli_query(
        $mysqli,
        "SELECT `id`, `full-name`, `user-name`, `email`, `password` FROM `user` WHERE `user-name`='$username' and `password` ='$password'"
    );
    $log = mysqli_fetch_array($user_log);

    if ($log > 0) {
        $_SESSION['id'] = $log['id'];
        $_SESSION['full-name'] = $log['email'];
        // header('location: welcome.php');
        echo "user already exists";
    } else {
        $sql = "INSERT INTO `user` (`full-name`, `user-name`, `email`, `password`)
           values('$fullname', '$username', ' $email', '$password')";
            $result = mysqli_query($mysqli, $sql);
            if ($result) {
                header('location: dashboard.php');
                // echo "data inserted successfully";
                }else {
                die(mysqli_error($mysqli));
                }
    }

}



// print_r($_POST);
?>