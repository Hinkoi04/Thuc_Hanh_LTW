<?php
//Sử dụng while hay do …while để tìm n nhỏ nhất sao cho 1 + 2 + …+ n>1000.
function CSC($n)
{
    return ($n / 2) * ($n - 1);
}
$i = 10;
while (CSC($i) < 1000)
    $i++;
echo $i . " là số nhỏ nhất để 1 + 2 + …+ n>1000 <br>" . "Với tổng bằng " . CSC($i);
?>

<!-- <?php
//Sử dụng while hay do …while để tìm n nhỏ nhất sao cho 1 + 2 + …+ n>1000.
$n = 10;

do {
    $s = 0;
    for ($i = 1; $i < $n; $i++) {
        $s += $i;
    }
    if ($s > 1000) {
        echo $i . " là số nhỏ nhất để 1 + 2 + …+ n>1000 <br>" . "Với tổng bằng " . $s;
        break;
    }
    $n++;
} while (true)
?> -->