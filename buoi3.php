<!-- <?php
	$a =6;
	$b = 5;
	$c = 8;
	// echo is_int($a)?"đây là số":"đây không phai là số";
	echo "max la: ".(($a>$b&&$a>$c)?$a:($b>$c?$b:$c));

?> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ban co</title>
	<link rel="stylesheet" href="css/banco.css">

</head>
<body>
	<div class="banco">
		<?php
		for($y=1;$y<=8;$y++){
			for($x=1;$x<=8;$x++){
				if(($y+$x)%2==0){
					echo '<div class="o_co_trang"></div>';
				}
				else{
					echo '<div class="o_co_den"></div>';
				}
			}
		}
		?>
	</div>
	
</body>
</html>
<!-- <?php
	$nam = 2017;
	switch(($nam%10))
	{
		case 0 : $can = "Canh";break;
		case 1 : $can = "Tân";break;
		case 2 : $can = "Nhâm";break;
		case 3 : $can = "Quý";break;
		case 4 : $can = "Giáp";break;
		case 5 : $can = "Ất";break;
		case 6 : $can = "Bính";break;
		case 7 : $can = "Đinh";break;
		case 8 : $can = "Mậu";break;
		case 9 : $can = "Kỹ";break;
	}
	switch(($nam%12))
	{
		case 0 : $chi = "Thân";break;
		case 1 : $chi = "Dậu";break;
		case 2 : $chi = "Tuất";break;
		case 3 : $chi = "Hợi";break;
		case 4 : $chi = "Tý";break;
		case 5 : $chi = "Sửu";break;
		case 6 : $chi = "Dần";break;
		case 7 : $chi = "Mẹo";break;
		case 8 : $chi = "Thìn";break;
		case 9 : $chi = "Tỵ";break;
	}
	echo $can." ";echo $chi;

?> -->










