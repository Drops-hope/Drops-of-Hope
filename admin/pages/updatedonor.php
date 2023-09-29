<?php
// database connection 
include("dbconnect.php");

if (isset($_POST['updatedonor'])) {
    $name = $_POST['name'];
    $guardiansname = $_POST['guardiansname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $weight = $_POST['weight'];
    $bloodgroup = $_POST['bloodgroup'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $qry = "UPDATE `donor` SET `name`='$name',`guardiansname`='$guardiansname',`gender`='$gender',`dob`='$dob',`weight`='$weight',`bloodgroup`='$bloodgroup',`email`='$email',`address`='$address',`contact`='$contact',`username`='$username',`password`='$password' WHERE id= '$id' ";
    $result = mysqli_query($conn, $qry);

    if ($result) {
        echo "<script>
        alert('donor updated Successfully');
        window.location.href='viewdonor.php';
        </script>";
    } else {
        echo "<script>
        alert('Something went wrong');
        window.location.href='viewdonor.php';
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
                        <h1 class="page-header">Update Donor's Details</h1>
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

                                        <?php
                                        include("dbconnect.php");
                                        $id = $_GET['id'];
                                        $qry = "SELECT * FROM `donor` WHERE id='$id' ";
                                        $result = mysqli_query($conn, $qry);
                                        while ($row = mysqli_fetch_array($result)) {
                                            //`name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`, `passwored` 
                                        ?>
                                            <form role="form" method="post">

                                                <div class="form-group">
                                                    <label>Enter Full Name</label>
                                                    <input class="form-control" name="name" type="text" placeholder="Example:Hanna Montana" value='<?php echo $row['name']; ?>' required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Enter Guardian's Name</label>
                                                    <input class="form-control" placeholder="Guardian's Name" name="guardiansname" value='<?php echo $row['guardiansname']; ?>' required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Gender [ M/F ]</label>
                                                    <select class="form-control" name="gender" required>
                                                        <option value="<?php echo $row['gender'];?>"><?php echo $row['gender']; ?></option>                                                        
                                                        <option value="M">Male</option>
                                                        <option value="F">Female</option>
                                                        <option value="Other">Others</option>
                                                    </select>                                                  
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter D.O.B</label>
                                                    <input class="form-control" type="date" name="dob" value='<?php echo $row['dob']; ?>' required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter Weight</label>
                                                    <input class="form-control" type="number" placeholder="Enter Weight" name="weight" value='<?php echo $row['weight']; ?>' required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter Blood Group</label>
                                                    <select class="form-control" name="bloodgroup" value="" required>
                                                        <option value="<?php echo $row['bloodgroup']; ?>"><?php echo $row['bloodgroup']; ?></option>                                      
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
                                                    <input class="form-control" type="email" placeholder="Enter Email Id" name="email" value='<?php echo $row['email']; ?>' required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter Address</label>
                                                    <input class="form-control" type="text" placeholder="Enter Address Here" name="address" value='<?php echo $row['address']; ?>' required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter Contact Number</label>
                                                    <input class="form-control" type="number" placeholder="Contact Number" name="contact" value='<?php echo $row['contact']; ?>' required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter Username</label>
                                                    <input class="form-control" placeholder="Enter Here" name="username" value='<?php echo $row['username']; ?>' required>
                                                    <p class="help-block">In order to create donor's account.</p>
                                                    <p class="help-block">Example: Hanna</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter Password</label>
                                                    <input class="form-control" name="password" type="password" id="myInput" value='<?php echo $row['password']; ?>' required>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" onclick="myFunction()">Show Password
                                                        </label>
                                                    </div>
                                                </div>

                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                                <button type="submit" name="updatedonor" class="btn btn-success" style="border-radius:0%" ;>Submit Form</button>
                                            </form>
                                        <?php
                                        }
                                        ?>

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