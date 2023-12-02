<?php
session_start();
include("dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBMS || Donor Login</title>

    <link rel="stylesheet" href="../donor/assests/css/userstyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="../donor/assests/img/ico.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form method="post">

                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control input_user" placeholder="Username" required>
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" placeholder="Password" required>
                        </div>

                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="userlogin" style="border-radius: 10px" class="btn login_btn my-4">User Login</button>
                        </div>

                    </form>
                </div>
                <?php
                if (isset($_POST['userlogin'])) {

                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $query = mysqli_query($conn, "SELECT * FROM donor WHERE  password='$password' and username='$username'");
                    $row   = mysqli_fetch_array($query);
                    $num_row = mysqli_num_rows($query);

                    //  `id`, `name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`, `password`

                    if ($num_row > 0) {
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['user_name'] = $row['name'];

                        header('location:pages/dashboard.php');
                    } else {
                        echo '
							<div class="alert alert-danger alert-dismissible">
                                Invalid Username & Password..
                            </div> ';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>