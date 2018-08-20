<?php
require_once("assets/include/membersite_config.php");
//error_log("mohannnnnnnnnnnnnnnnnnnnn")

$result=$fgmembersite->blogview();
//error_log(print_r($result, true));

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>mohanCrud</title>
 	<meta charset="utf-8">
  	<script src="assets/js/bootstrap.min.js"></script>
  	<script src="assets/js/bootstrap.js"></script>
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 </head>
 <body>
 		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Blog</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor02">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="createblog.php">Create <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="mohancrud.php">View Blogs</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php 
						echo '<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">Id</th>
					      <th scope="col">Blog Name</th>
					      <th scope="col">Description</th>
					      <th scope="col">Blog Type</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>';
					  $result=$fgmembersite->blogview();
					 for ($i=0; $i <count($result) ; $i++) {
					 $j=$i+1; 
					  	echo ' 
					    <tr class="table-active">
					      <th scope="row">'.$j.'</th>
					      <td>'.$result[$i]['postname'].'</td>
					      <td>'.$result[$i]['description'].'</td>
					      <td>'.$result[$i]['type'].'</td>
					      <td><span class="btn btn-success">Update</span><span class="btn btn-danger">Delete</span></td>
					      
																					

					    </tr>
					 ';
					  } 
					  echo' </tbody>
					</table>';
					 ?>
				</div>
			</div>
		</div>






 			

 			 <script src="assets/js/jquery.min.js"></script>
 			<script src="assets/js/mohancrud.js"></script>
 			
 </body>
 </html>