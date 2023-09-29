<?php

if (isset($_POST['newcampaign'])) {
    $cname = $_POST['cname'];
    $oname = $_POST['oname'];
    $phone = $_POST['phn'];
    $cdate = $_POST['cdate'];
    $decrip = $_POST['descp'];
    $id = $_POST['id'];

    include 'dbconnect.php';
    $qry = "update campaigndb set cname='$cname', oname='$oname', phn='$phone', cdate='$cdate', descp='$decrip' WHERE id='$id'";
    $result = mysqli_query($conn, $qry);

    if ($result) {
        echo "<script>
        alert('campaign updated');
        window.location.href= 'viewcampaign.php';
        </script>";
    } else {
        echo "<script>
        alert('Something went wrong');
        window.location.href= 'viewcampaign.php';
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
                    <h1 class="page-header"> Edit Campaign Details</h1>
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
                                    include 'dbconnect.php';
                                    $id = $_GET['id'];
                                    $qry = "SELECT * FROM `campaigndb` WHERE id='$id'";
                                    $result = mysqli_query($conn, $qry);
                                    while ($row = mysqli_fetch_array($result)) {
                                        //SELECT `id`, `cname`, `oname`, `phn`, `cdate`, `descp`
                                    ?>

                                        <form role="form" method="post">

                                            <div class="form-group">
                                                <label>Campaign Name</label>
                                                <input class="form-control" type="text" name="cname" value='<?php echo $row['cname']; ?>' required>

                                            </div>
                                            <div class="form-group">
                                                <label>Organizer Name</label>
                                                <input class="form-control" type="text" name="oname" value='<?php echo $row['oname']; ?>' required>
                                            </div>

                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input class="form-control" type="number" name="phn" value='<?php echo $row['phn']; ?>' required>
                                            </div>

                                            <div class="form-group">
                                                <label>Campaign Date</label>
                                                <input class="form-control" type="date" name="cdate" value='<?php echo $row['cdate']; ?>' required>
                                            </div>



                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" type="text" rows="4" name="descp" required><?php echo $row['descp']; ?></textarea>
                                            </div>


                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                            <button type="submit" name="newcampaign" href="" class="btn btn-success" style="border-radius:0%">Update Post</button>

                                        </form>
                                </div>
                            <?php
                                    }
                            ?>

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