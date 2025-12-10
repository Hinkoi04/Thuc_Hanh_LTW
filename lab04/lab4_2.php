<h1>Đỗ Thuận Hòa - DH52200694 - D22_TH07</h1>
<h2>Lab4.2</h2>
<pre><?php
$a = array(1, -3, 5); //mảng có 3 phần tử
$b = array("a"=>2, "b"=>4, "c"=>-6);//mảng có 3 phần tử.Các index của mảng là chuỗi
?>
Nội dung giá trị mảng a :
<?php
foreach($a as $value)
{
	echo $value ." ";	
}
?>
<br> Nôi dung mảng a (key-value) 
<?php
foreach($a as $key=>$value)
{
	echo "($key - $value )";	
}
?>
<br /> Nội dung mảng b: (key - value):
<?php
foreach($b as $k=>$v)
{
	echo "($k - $v) ";	
}
?>
<?php
$naDuong = 0;
foreach ($a as $value) {
	if ($value>0) {
		$naDuong++;
	}
}
	echo"<h3>a. Số phần tử dương trong mảng a là $naDuong</h3>";
?>
Hiển thị nội dung mảng a ra dạng bảng:
<table border="1">
	<tr>
		<td>STT</td>
		<td>INDEX</td>
		<td>VALUE</td>
	</tr>
<?php
	$i = 0;
	foreach ($a as $key => $value) {
		$i++;
		echo "<tr><td>$i</td>";
		echo "<td>$key</td>";
		echo "<td>$value</td></tr>";
	}
	
?>
</table>

<h3>b. Tạo mảng mới, lưu các phần tử dương trong mảng $b. Ví dụ, mảng $c
được tạo thành từ mảng $b ban đầu có giá trị như sau:
$c = array("a"=>2, "b"=>4)</h3>
Hiển thị nội dung mảng b ra dạng bảng:
<table border=1>
	<tr><td>STT</td><td>Key</td><td>Value</td></tr>
    <?php
	$i=0;
	foreach($b as $k=>$v)
	{	$i++;
		echo "<tr><td>$i</td>";
		echo "<td>$k</td>";
		echo "<td>$v</td></tr>";
	}
	?>
</table>


<?php
$new_arr = array();
	foreach ($b as $key => $value) {
		if ($value > 0) {
			$new_arr[$key] = $value;
		}
	}
	echo"Mảng mới chứa các phần tử dương của mảng b:<br>";
	print_r($new_arr);
?>