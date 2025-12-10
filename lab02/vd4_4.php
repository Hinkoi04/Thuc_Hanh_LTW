<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab 2_5</title>
</head>

<body>
<?php
	// include("lab2_5a.php");

	if(isset($x))
		echo "Giá trị của x là: $x";
	else
		echo "Biến x không tồn tại";

	echo "<br> <i>Báo biến x không tồn tại vì lúc đầu hàm include
	nhúng file php chịu trách nhiệm khai báo cho biến x, khi cmt thì biến x chưa được khai báo</i>";
?>
</body>
</html>