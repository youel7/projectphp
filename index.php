<html>
	<head>
		<title> "glyphicon glyphicon-search" </title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
					integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
					integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	</head>
	<body>
	
		<div class="container-fluid">
			<ul class="nav nav-tabs">			
			  
			  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" > Menu <span class="caret"></span></a>
			  	<ul class="dropdown-menu">
			  		<li><a href="#"> Tools </a> </li>
			  		<li><a href="#"> Views </a> </li>
			 		<li><a href="#"> Help </a> </li>
			  	</ul>
			  </li>
			  <li><a href="#"> Tools </a> </li>
			  <li><a href="#"> Views </a> </li>
			  <li><a href="#"> Help </a> </li>
			  <ul class="nav navbar-nav navbar-right">
			  <li>
			  	<form class="navbar-form navbar-left" role="search">
 				 <div class="form-group">
  				  <input type="text" class="form-control" placeholder="Search">
 				 </div>
 					 <button type="submit" class="btn btn-default">Submit</button>
				</form>
			  </li>
			  </ul>
			
			</ul>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img src="image1.jpg" class="img-fluid" style="width:250px;height:250px;">
					<h3> First </h3>
					<p> AGE ACTION IRELAND is urging TDs and Senators to push forward with legislation that would abolish mandatory retirement in Ireland.
						The organisation has said the current situation – where many companies require employees to retire on reaching a certain age – has led to more 65-year-olds being on the dole than any other age group. </p>
				</div>
				<div class="col-md-3">
					<img src="image1.jpg" class="img-fluid" style="width:250px;height:250px;">
					<h3> Second </h3>
					<p> AGE ACTION IRELAND is urging TDs and Senators to push forward with legislation that would abolish mandatory retirement in Ireland.
					The organisation has said the current situation – where many companies require employees to retire on reaching a certain age – has led to more 65-year-olds being on the dole than any other age group. </p>
				</div>
				<div class="col-md-3">
					<img src="image1.jpg" class="img-fluid" style="width:250px;height:250px;">
					<h3> Third </h3>
					<p> AGE ACTION IRELAND is urging TDs and Senators to push forward with legislation that would abolish mandatory retirement in Ireland.
					The organisation has said the current situation – where many companies require employees to retire on reaching a certain age – has led to more 65-year-olds being on the dole than any other age group. </p>

				</div>
				<div class="col-md-3">
				<img src="image1.jpg" class="img-fluid" style="width:250px;height:250px;">
				<h3> Fourth </h3>
				<p> AGE ACTION IRELAND is urging TDs and Senators to push forward with legislation that would abolish mandatory retirement in Ireland.
				The organisation has said the current situation – where many companies require employees to retire on reaching a certain age – has led to more 65-year-olds being on the dole than any other age group. </p>

				</div>
			</div>
		</div><br/><br/><br/>
		
		<div class="container">
			//form here
			<form>
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd">
				</div>
				<div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			
			<form method="post" action="text.php">
				<div>	
					<label for="text" >FeedBack</label>
					<textarea class="form-control" id="text" name="text" row="3" style="min-width 100%"></textarea>
				</div>
				
				<input class="btn btn-success" id="submit" name="submit" type="submit" value="Drop into Box"></input>			
			</form>
		
		</div>
	
	</body>
	
</html>