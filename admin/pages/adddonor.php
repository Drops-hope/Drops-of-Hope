<?php
// database connection 
include("dbconnect.php");

if (isset($_POST['adddonor'])) {

    // variable assign for donor insert
    $fullname = $_POST["name"];
    $gaurdianname = $_POST["guardiansname"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $weight = $_POST["weight"];
    $bloodgroup = $_POST["bloodgroup"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // sql query for insert donor and mysqli_query = execude sql query
    $qry = "INSERT INTO `donor`(`name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`, `password`) VALUES ('$fullname','$gaurdianname',' $gender',' $dob','$weight','$bloodgroup',' $email','$address','$contact',' $username','$password')";
    $result = mysqli_query($conn, $qry);

    if ($result) {
        echo "<script>
        alert('Donor inserted successfully');
        window.location.href='adddonor.php';
        </script>";
    } else {
        echo "<script>
        alert('Something went wrong');
        window.location.href='adddonor.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assests/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../assests/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assests/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assests/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../assests/fonts/icofont.min.css">


</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Donor's Detail</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Please fill up the form below:
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" method="post">

                                            <div class="form-group">
                                                <label>Enter Full Name</label>
                                                <input class="form-control" name="name" type="text" placeholder="Example:Zainulabdeen Nusha Meenas Begum" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Guardian's Name</label>
                                                <input class="form-control" placeholder="Guardian's Name" name="guardiansname" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Gender [ M/F ]</label>
                                                <select class="form-control" name="gender" required>
                                                    <option value="">Select</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="Other">Others</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter D.O.B</label>
                                                <input class="form-control" type="date" name="dob" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Weight</label>
                                                <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Blood Group</label>
                                                <select class="form-control" name="bloodgroup" required>
                                                    <option value="">Select</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Email Id</label>
                                                <input class="form-control" type="email" placeholder="Enter Email Id" name="email" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Address</label>
                                                <input class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Contact Number</label>
                                                <input class="form-control" type="number" placeholder="Contact Number" name="contact" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Username</label>
                                                <input class="form-control" placeholder="Enter Here" name="username" required>
                                                <p class="help-block">In order to create donor's account.</p>
                                                <p class="help-block">Example: Nusha</p>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Password</label>
                                                <input class="form-control" name="password" type="password" id="myInput" required>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" onclick="myFunction()">Show Password
                                                    </label>
                                                </div>
                                            </div>

                                            <button type="submit" name="adddonor" class="btn btn-success" style="border-radius:0%" ;>Submit Form</button>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.containerfluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- scrip function for show visible -->
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script src="../assests/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assests/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assests/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../assests/js/sb-admin-2.js"></script>

</body>

<footer>
    <p>&copy; <?php echo date("Y"); ?>: Developed By Drops Of Hope</p>
</footer>

<style>
    footer {
        background-color: #424558;
        bottom: 0;
        left: 0;
        right: 0;
        height: 35px;
        text-align: center;
        color: #CCC;
    }

    footer p {
        padding: 10.5px;
        margin: 0px;
        line-height: 100%;
    }
</style>

</html>