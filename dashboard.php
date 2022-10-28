<?php
// include "database.php";
// $sql = "SELECT * FROM `user`";
// $resultt = mysqli_query($mysqli, $sql);
// if($resultt){
//   while($row = mysqli_fetch_assoc($resultt)){
//     $id = $row['id'];
//     $fullname = $row['full-name'];
//     $username = $row['user-name'];
//     $email = $row['email'];
//     $password = $row['password'];
//   }
// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>

    <style>
      * {
        list-style: none;
        text-decoration: none;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background: #f5f6fa;
      }

      .wrapper .sideBar {
        background: rgb(5, 68, 104);
        position: fixed;
        top: 0;
        left: 0;
        width: 300px;
        height: 100%;
        padding: 20px 0;
        transition: all 0.5s ease;
      }

      .navHeader {
        text-align: center;
        margin-bottom: 30px;
        color: white;
      }

      .wrapper .sideBar ul li a {
        display: block;
        padding: 13px 30px;
        color: white;
        font-size: 20px;
        position: relative;
      }

      .wrapper .sideBar ul li a:hover,
      .wrapper .sideBar ul li a:active {
        color: #0c7db1;
        background: #f5f6fa;
        border-right: 2px solid;
      }

      .wrapper .sideBar ul li a:hover:before,
      .wrapper .sideBar ul li a:active:before {
        display: block;
      }

      .main {
        height: 100%;
        margin-left: 300px;
        text-align: center;
        margin-top: 20px;
      }
    </style>
  </head>

  <body>
    <div class="">
      <div class="main">
        <h1>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, optio.
        </h1>
        <!-- <?php include 'homePage.php' ?> -->
      </div>

      <!-- side bar wrapper -->
      <div class="wrapper">
        <div class="sideBar">
          <!-- nav bar header -->
          <div class="navHeader">
            <h1>GoldTech Project</h1>
            <p>PHP Project</p>
          </div>

          <!-- //menu items -->
          <ul>
            <li>
              <a href="#">
                <span>Home</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>Profile</span>
              </a>
            </li>
            <li>
              <a href="update.php">
                <span>Update Profile</span>
              </a>
            </li>
            <li>
              <a href="logout.php">
                <span>Log Out</span>
              </a>
            </li>
          </ul>
          <!-- menu items end -->
        </div>
      </div>
      <!-- side bar wrapper end -->
    </div>
  </body>
</html>
