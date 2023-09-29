<?php

if (isset($_POST['announcebtn'])) {
    $announcement = $_POST['announce'];
    $bloodneed = $_POST['bloodneed'];
    $dat = $_POST['dat'];
    $organizer = $_POST['organizer'];
    $requirements = $_POST['requirements'];

    include 'dbconnect.php';
    $qry = "INSERT INTO announce(announcement, bloodneed, dat, organizer, requirements) VALUES ('$announcement','$bloodneed','$dat','$organizer','$requirements')";
    $result = mysqli_query($conn, $qry);


    if ($result) {
        echo "<script>
        alert('announcement added ');
        window.location.href='makeannouncement.php';
        </script>";
    } else {
        echo "<script>
        alert('Something went wrong');
        window.location.href='makeannouncement.php';
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

    <title>BDMS</title>

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
    
    <!-- wrapper -->
    <div id="wrapper">
        <?php include 'includes/nav.php' ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Make Announcement</h1>
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
                                            <label>Enter Announcement Title</label>
                                            <input class="form-control" type="text" placeholder="Announcement Title" name="announce" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood Needed (Type)</label>
                                            <input class="form-control" type="text" placeholder="example: B+" name="bloodneed" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Date and Time</label>
                                            <input class="form-control" type="date" name="dat" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Organized by</label>
                                            <input class="form-control" placeholder="Enter Organizer's Name" type="text" name="organizer" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Requirements</label>
                                            <textarea class="form-control" rows="4" type="text" name="requirements" required></textarea>
                                        </div>

                                        <button type="submit" name="announcebtn" style="border-radius: 0%" class="btn-success btn btn-default">Submit</button>

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