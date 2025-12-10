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
    include("lab2_5b.php");
    // Nếu bật display_errors thì trình duyệt sẽ hiện những warning nhưng
    // vẫn sẽ tiếp tục chạy những lệnh ở dưới
	if(isset($x))
		echo "Giá trị của x là: $x";
	else
		echo "Biến x không tồn tại";

	echo '<br> <i>kết quả x = 30 do dòng 10 nhúng file để khai báo biến x = 10, dòng 11 và dòng 12
    đều nhúng file php có lệnh để tăng giá trị x ($x+=10) nên x cộng 10 2 lần thành 30  </i>';

    echo '<br> <i>Nếu bật display_errors thì trình duyệt sẽ hiện những warning nhưng
    vẫn sẽ tiếp tục chạy những lệnh ở dưới và cho ra kết quả x =10 do khai báo trong lab2_5a.php</i>';
?>
</body>
</html>