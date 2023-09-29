<?php session_start(); ?>
<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Drops Of Hope - Admin Panel</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- MetisMenu CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/metismenu/dist/metisMenu.min.css">

        <!-- Custom CSS -->
        <link href="assests/css/startmin.css" rel="stylesheet">

        <!-- <link rel="stylesheet" href="assests/fonts/icofont.min.css"> -->

        <!-- Custom Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css" rel="stylesheet" type="text/css">

       
    </head>
    <body>
	
		<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header " >
                <a class="navbar-brand" href="index.php"><i class="icofont-blood-drop"></i><center>Blood Donor Management System</center></a>
				</div>
				
			  </div>
		</nav>

        <div class="container">
		 <form action="#" method="post">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Admin Login</center></h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" class="btn btn-info btn-block" style="border-radius:0%;" title="Log In" name="login" value="Login"></input>
                                </fieldset>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
			</form>
			
			<?php
				if (isset($_POST['login']))
					{
						$username = mysqli_real_escape_string($con, $_POST['user']);
						$password = mysqli_real_escape_string($con, $_POST['pass']);
						
						$query 		= mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and username='$username'");
						$row		= mysqli_fetch_array($query);
						$num_row 	= mysqli_num_rows($query);
						
						if ($num_row > 0) 
							{			
								$_SESSION['user_id']=$row['user_id'];
								header('location:pages/index.php');
								
							}
						else
							{
								echo ' <div class="row"> <div class="col-md-4 col-md-offset-4">
								<div class="alert alert-danger alert-dismissible">
                                        Incorrect User Name or Password
                                    </div> </div> </div> ';
									
									
							}
					}
			  ?>
			
        </div>

        

        <!-- jQuery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">

        <!-- Bootstrap Core JavaScript -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.5.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Metis Menu Plugin JavaScript -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.js">

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>
		
		

    </body>

    <!-- Footer -->
	<footer class="page-footer font-small special-color-dark pt-4">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© <?php echo date("Y"); ?>
		 Developed By Drops of Hope
		</div>
		<!-- Copyright -->
	</footer>
<!-- Footer -->
    
</html>
  
  