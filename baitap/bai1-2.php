
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
		   			   <legend><h2>Ung dung form</h2></legend>

		   			   <form class="form-inline" method="post" action="">
		   					<div class="form-group">
		   						<input type="text" name="full_name" class="form-control" id="fullname" placeholder="Full Name">
		   					</div><br><br>
		   					<div class="form-group">
		   						<input type="email" name="email" class="form-control" id="email" placeholder="Email">
		   					</div><br><br>
		   					<div class="form-group">
		   						<input type="address" name="address" class="form-control" id="address" placeholder="Address">
		   					</div><br><br>

		   					<div class="radio">
								<label>
									<input type="radio" name="gender" id="optionsRadios1" value="male">
									Nam
								</label>
							</div><br>
							<div class="radio">
							  <label>
							    <input type="radio" name="gender" id="optionsRadios2" value="female">
							    Nu
							  </label>
							</div>
							<br>

							<!-- Nhap san pham -->
		   			   
							<div class="form-group">
								<label for="exampleInputEmail3">Product 1</label>
								<input type="text" class="form-control" name="products[product1][name]" id="infor" placeholder="Thong tin sp">
								<input type="text" class="form-control" name="products[product1][qty]" id="qty" placeholder="So luong">
								<input type="text" class="form-control" name="products[product1][price]" id="price" placeholder="Gia">
							</div><br><br>
							<div class="form-group">
								<label for="exampleInputEmail3">Product 1</label>
								<input type="text" class="form-control" name="products[product2][name]" id="infor" placeholder="Thong tin sp">
								<input type="text" class="form-control" name="products[product2][qty]" id="qty" placeholder="So luong">
								<input type="text" class="form-control" name="products[product2][price]" id="price" placeholder="Gia">
							</div><br><br>
							<div class="form-group">
								<label for="exampleInputEmail3">Product 1</label>
								<input type="text" class="form-control" name="products[product3][name]" id="infor" placeholder="Thong tin sp">
								<input type="text" class="form-control" name="products[product3][qty]" id="qty" placeholder="So luong">
								<input type="text" class="form-control" name="products[product3][price]" id="price" placeholder="Gia">
							</div><br><br>
							<button type="submit" name="submit" class="btn btn-default">Xuat thong tin hoa don</button>
						</form>
		   		</fieldset>
		   	</div>
		</div>
   </div>

   <?php
   if(isset($_POST['submit'])){
         // echo "<pre>";
         // var_dump($_POST);
		 // echo "</pre>";
		 $full_name=isset($_POST['full_name'])?$_POST['full_name']:"";
		 $email=isset($_POST['email'])?$_POST['email']:"";
		 $address=isset($_POST['address'])?$_POST['address']:"";
		 $gender=isset($_POST['gender'])?$_POST['gender']:"";
		 $products=isset($_POST['products'])?$_POST['products']:"";
		 
		 checkProductInputed($products);
		 // if($full_name==""){
		 // echo "full name is required";exit;
		 // }
		 // if($full_name==""){
		 // echo "full name is required";exit;
		 // }
		 $array=array("full_name","email","gender","address");
		 checkRequired($array,$_POST);
		 
		 
   }
		
	function checkRequired($list_name,$value){
      foreach ($list_name as $key => $name)	{
		if(!isset($value[$name])){
		echo "$name is required"."<br>";
		}
	    elseif($value[$name]==""){
		echo "$name is required"."<br>";
		}
	  }
	  exit;
	}

    function checkProductInputed($products){
		foreach($products as $product){
		  if($product['name']!=""){
             return true;		  
		  }
		 }
		 echo "you must select at least 1 product";exit;
	}		
		 
   ?>
</body>
</html>