<?php
function giaiPhuongTrinhBac2($a, $b, $c) {
    if ($a == 0) {
        echo "Đây không phải phương trình bậc 2.";
        return;
    }
    
    $delta = $b * $b - 4 * $a * $c;
    
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "Phương trình có nghiệm kép: x = $x";
    } else {
        echo "Phương trình vô nghiệm (delta < 0).";
    }
}

$a = 1;
$b = -3;
$c = 2;
echo "$a"."x^2 + $b"."x + $c = 0 <br>";
giaiPhuongTrinhBac2($a, $b, $c);
?>