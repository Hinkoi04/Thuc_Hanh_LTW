<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab 2_5</title>
</head>

<body>
<?php
	include("lab2_5a.php");
    include("lab2_5b.php");
	if(isset($x))
		echo "Giá trị của x là: $x";
	else
		echo "Biến x không tồn tại";

	echo '<br> <i>kết quả x = 20 do dòng 10 nhúng file để khai báo biến, dòng 11 thì 
    tạo lệnh $x+=10 thay đổi giá trị biến x</i>';

?>
</body>
</html>