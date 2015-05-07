<?php 


	$b = 3;
	$c = 10;
	if( $b === $c ) {
		echo "ok";
	} else {
		echo "no ok";
	}
	echo "<br>";

	if ($b == 1 || $c == 20) {
		echo "Thoa man";
	} else {
		echo "khong thoa man";
	}
	echo "<br/>";

	$a = 10;
	if ($a==10) {
		echo "dung";
	} else {
		echo "sai";
	}
	echo "<br>";
	$today = 3;
	// if ($today==2) {
	// 	echo "Hom nay la thu 2";
	// } elseif ($today==3) {
	// 	echo "Hom nay la thu 3";
	// } elseif ($today == 4) {
	// 	echo "Hom nay la thu 4";
	// } elseif ($today ==5 ) {
	// 	echo "Hom nay la thu 5";
	// } elseif ($today == 6) {
	// 	echo "Hom nay la thu 6";
	// }
	// switch ($today) {
	// 	case '2':
	// 		echo "Thu 2";
	// 		break;
	// 	case '3':
	// 		echo "Thu 3"
	// 		break;
	// 		case '4':
	// 			echo "Thu 4";
	// 			break;
	// 			case '5':
	// 				echo "Thu 5";
	// 				break;
	// 				case '6':
	// 					echo "Thu 6";
	// 					break;
	// 	default:
	// 		echo "Hom nay la chu nhat";
	// 		break;
	// }

	$start =1;
	while ($start <=20 ) {
		echo "<h1>".$start."</h1>";
		$start++;
	}

?>
