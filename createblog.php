<?php
require_once("assets/include/membersite_config.php");
//error_log("mohannnnnnnnnnnnnnnnnnnnn")

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
				<div class="col-lg-6">
					<form id="formdata" method="POST">
						<input type="hidden" name="saveall" id="saveall" value="">
						  
						    <legend>Create Your Blog</legend>
						    <div class="form-group">
						      <label for="exampleInputEmail1">Blog Name</label>
						      <input type="text" class="form-control" name="postname" id="postname" value=""  placeholder="Enter your blog name">
						    </div>
						    <div class="form-group">
						      <label for="exampleTextarea">Description</label>
						      <textarea class="form-control" name="descriptio" id="descriptio" value="" rows="3"></textarea>
						    </div>
						    <div class="form-group">
						      <label for="exampleInputEmail1">Blog Type</label>
						      <input type="text" class="form-control" name="type" value="" id="type"  placeholder="Enter your blog type">
						    </div>
						    <button type="submit" class="btn btn-primary"  id="submit">Submit</button>
						  
					</form>
				</div>
			</div>
		</div>




 			<script src="assets/js/jquery.min.js"></script>
 			<script src="assets/js/mohancrud.js"></script>
 			
 </body>
 </html>