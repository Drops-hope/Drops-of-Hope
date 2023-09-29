<?php

if (isset($_POST['addblood'])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $weight = $_POST["weight"];
    $bloodgroup = $_POST["bloodgroup"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $bloodqty = $_POST["bloodqty"];
    $collection = $_POST["collection"];

    include 'dbconnect.php';
    //code after connection is successfull
    $qry = "insert into blood(name,gender,dob,weight,bloodgroup,address,contact,bloodqty,collection) values ('$name','$gender','$dob','$weight','$bloodgroup','$address','$contact','$bloodqty','$collection')";
    $result = mysqli_query($conn, $qry); //query executes

    if ($result) {
        echo "<script>
                alert('Data inserted successfully');
                window.location.href='addblood.php';
            </script>";
    } else {
        echo "<script>
                alert('Something went wrong');
                window.location.href='addblood.php';
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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Blood Details</h1>
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
                                            <input class="form-control" type="text" placeholder="Mohamed Asfik" name="name" required>
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
                                            <label>Enter Date of birth</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Weight</label>
                                            <input class="form-control" placeholder="Weight" type="number" name="weight" required>
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
                                            <label>Enter Address</label>
                                            <input class="form-control" placeholder="Address" type="text" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Contact Number</label>
                                            <input class="form-control" placeholder="Contact Number" type="number" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood Quantity</label>
                                            <input class="form-control" placeholder="Blood Quantity" type="number" name="bloodqty" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Collection Date</label>
                                            <input class="form-control" type="date" name="collection" required>
                                        </div>

                                        <button type="submit" name="addblood" class="btn btn-success btn-default" style="border-radius: 0%;">Submit Form</button>

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
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../assests/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assests/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assests/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../assests/js/sb-admin-2.js"></script>

</body>

<footer>
    <p>&copy; <?php echo date("Y"); ?>: Developed By Drops Of Hope </p>
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