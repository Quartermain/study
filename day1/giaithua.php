<html>
<head>
<title>Giai thua cua mot so nguyen duong!</title>
</head>
<body>

<?php
   $n= $_POST['n'];
   if($n==0){
      $giaithua=1;
	}else{
		$giaithua=1;
		for( $i=1; $i< $n; $i++){
			$giaithua = 1 + $giaithua*$i;
		}
	}
	echo "Giai thua cua ".$n."! = ".$giaithua."<br/>";
?>
<a href="giaithua.html">Tinh giai thua cua mot so nguyen duong!</a>
</body>
</html>