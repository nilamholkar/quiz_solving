<!DOCTYPE html>
<html>
<head>
	<title>Quiz Login</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php echo form_open("Quiz/index"); ?>
	<div class="container">
		<div class="container">
	 		<img class="container" src="<?php echo base_url(); ?>img/history.png" >
	 	</div>
		<div class="container">
	 		<h1><b>Historical Knowledge</b></h1>
	 	</div>
		<div class="container">
	 		<p style="color: red;">* Required</p>
	 	</div>
	 	<div class="container">
	 		<div class="form-group">
			    <label for="email">Email Address *</label>
			    <input type="email" class="form-control" style="width: 50%;" placeholder="Enter Email" id="n6" name="email" required>
			    <div class="valid-feedback transbox">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			    <label for="email">Full Name *</label>
			    <input type="text" class="form-control" style="width: 50%;" placeholder="Enter Full Name" name="name" id="n6" required>
			</div>
	 		
	 	</div>
	 	<div class="container">
	 		<input type="submit" name="save" class="btn btn-danger" value="Next">
	 	</div>
	</div>
</body>
</html>