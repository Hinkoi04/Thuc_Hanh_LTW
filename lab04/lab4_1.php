<h1>Đỗ Thuận Hòa - DH52200694 - D22_TH07</h1>
<h2>Lab4.1</h2>
<pre>
    
 <?php
$a = array();//mảng rỗng
$b = array(1, 3, 5); //mảng có 3 phần tử
/*
$b[0] = 1;
$b[1] = 3;
$b[2] = 5;
*/
$c = array("a"=>2, "b"=>4, "c"=>6);//mảng có 3 phần tử.Các index của mảng là chuỗi
/*
$c['a']= 2;
$c['b'] = 4;
$c['c'] = 6
*/

$a[] = 3;
$b[] = 7;
$c['d'] = 8;
$na = Count($a);
$nb = Count($b);
$nc = Count($c);
echo "Mảng a có $na phần tử <br> ";
echo "Mảng b có $nb phần tử <br> ";
echo "Mảng c có $nc phần tử <br> ";
// print_r($a);
// var_dump($b);
// print_r($c);
// echo "<hr> Sau khi thêm phần tử, nội dung các mảng  là :";
print_r($a);
print_r($b);
print_r($c);

// $x = 1;
// unset($a[$x]);
// unset($b[$x]);
// unset($c['a']);
// echo "<hr> Sau khi xóa phần tử, nội dung các mảng  là :";
// print_r($a);
// print_r($b);
// print_r($c);

// $value = 2;
// $key = 'b';
// if (isset($c[$key])) $c[$key] += $value;
// else $c[$key] = $value;
// echo "<hr> Kết quả mảng c là:";
// print_r($c);

is_exist($a, 3);

is_exist($b, 5);

is_exist($c, 4);




function is_exist($arr, $x){
    foreach ($arr as $key => $value) {
        if($arr[$key] == $x){
            $arr[$key] = 9999999;
            echo "<hr> Mảng có sự thay đổi tại chỉ số $key <br>";
            print_r($arr);
        }
    }
}

?>