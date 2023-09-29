<html>

<head>

	<title>BBMS</title>

	<!-- Bootstrap Core CSS -->
	<link href="../assests/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../assests/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- DataTables CSS -->
	<link href="../assests/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="../assests/css/dataTables/dataTables.responsive.css" rel="stylesheet">

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
					<div class=".col-lg-12">
						<h1 class="page-header">Blood Collection</h1>
					</div>
				</div>

				<div class="row">
					<div class=".col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Total Records of available bloods
							</div>

							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">

										<?php

										include "dbconnect.php";

										$qry = "select * from blood";
										$result = mysqli_query($conn, $qry);

										echo "
						<thead>
						<tr>
							<th>Blood Group</th>
							<th>Full Name</th>
							<th>Gender</th>
							<th>D.O.B</th>
							<th>Weight</th>
							<th>Address</th>
							<th>Contact</th>
							<th>Blood Quantity</th>
							<th>Collection Date</th>
							<th colspan='2'>Action</th>
						</tr>
						</thead>";

										while ($row = mysqli_fetch_array($result)) {
											echo "<tbody>
						  <tr class='gradeA'>
						  <td>" . $row['bloodgroup'] . "</td>
						  <td>" . $row['name'] . "</td>
						  <td>" . $row['gender'] . "</td>
						  <td>" . $row['dob'] . "</td>
						  <td>" . $row['weight'] . "</td>
						  <td>" . $row['address'] . "</td>
						  <td>" . $row['contact'] . "</td>
						  <td>" . $row['bloodqty'] . "</td>
						  <td>" . $row['collection'] . "</td>
						  <td>
						  <a href='editbloodform.php?id=" . $row['id'] . "'><i class='fa fa-edit ' style='color:green; margin: right 10px;'></i></a>
						  <a href='deletebloodrecord.php?id=" . $row['id'] . "'><i class='fa fa-trash' style='color:red; margin: right 10px;'></i></a>
						  </td>

						</tr>
						<tbody>
						";
										}

										?>
									</table>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="../assests/vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../assests/vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../assests/vendor/metisMenu/metisMenu.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../assest/js/sb-admin-2.js"></script>

	<!-- DataTables JavaScript -->
	<script src="../assests/js/dataTables/jquery.dataTables.min.js"></script>
	<script src="../assests/js/dataTables/dataTables.bootstrap.min.js"></script>

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