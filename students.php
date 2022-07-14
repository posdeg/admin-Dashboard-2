<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header">
		<img src="zalego.jpg" height="50" width="50" class="rounded-circle">
	</div>
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="index.php">
						<span><i class="fa fa-group"></i></span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-folder-open"></i></span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-graduation-cap"></i></span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="maincontent">
        <div class="container-fluid">
            <div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student</span>
					</div>
						<div class="card-body">
							<table class="table table-striped table-hover table-responsive" >
								<thead>
									<tr>
										<th>No.</th>
										<th>Full Name</th>
										<th>Phone Number</th>
										<th>Email</th>
										<th>Gender</th>
										<th>Course</th>
										<th>Enrolled on</th>
										<th>Actions</th>
									</tr>

								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>Cosmas kung'u</td>
										<td>+254716837004</td>
										<td>quaviciouscomonito56@gmail.com</td>
										<td>Male</td>
										<td>cyber security</td>
										<td>23rd Aug 2022</td>
										<td>
											<a href="#" class="btn btn-primary btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="#" class="btn btn-info btn-sm">
												<i class="fa fa-eye"></i>
											</a>
											<a href="#" class="btn btn-danger btn-sm">
												<i class="fa fa-trash"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>		
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>