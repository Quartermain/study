
<html lang="en">
<head>
<title>bai tap</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
		   	<div class="col-sm-12">
		   		<fieldset>
		   			   <legend><h2>Ứng dụng xử lý form</h2></legend>
		   			   <form method="post" action="">
		   					<div class="form-group">
		   						<input type="text" class="form-control" id="fullname" placeholder="Full Name">
		   					</div>
		   					<div class="form-group">
		   						<input type="email" class="form-control" id="email" placeholder="Email">
		   					</div>
		   					<div class="form-group">
		   						<input type="address" class="form-control" id="address" placeholder="Address">
		   					</div>

		   					<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="nam">
									Nam
								</label>
							</div>
							<div class="radio">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios2" value="nu">
							    Nu
							  </label>
							</div>

							<!-- Nhap san pham -->
		   			   </form>

		   			   	<form class="form-inline">
							<div class="form-group">
								<label class="sr-only" for="exampleInputEmail3">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label class="sr-only" for="exampleInputPassword3">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
							</div>
							<div class="checkbox">
								<label>
							  		<input type="checkbox"> Remember me
								</label>
							</div>
						<button type="submit" class="btn btn-default">Sign in</button>
						</form>
		   		</fieldset>
		   	</div>
		</div>
   </div>
</body>
</html>