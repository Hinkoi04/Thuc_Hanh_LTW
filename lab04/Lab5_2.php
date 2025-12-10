<h1>Đỗ Thuận Hòa - DH52200694 - D22_TH07</h1>
<h2>Lab5.2</h2>
<?php
    function showArray($arr){
        echo '<table border=1>';
        echo"<tr>
            <td>Stt</td>
            <td>Mã sản phẩm</td>
            <td>Tên sản phẩm</td>
        </tr>";
        $i=0;
        foreach ($arr as $value) {
            echo "<tr>
            <td>$i</td>";
            echo "<td>".$arr[$i]['id']."</td>";
            echo "<td>".$arr[$i]['name ']."</td>";
            echo "</tr>";
            $i++;
        }
    }
        echo "</table>";
    $arr= array();
    $r = array("id"=> "sp1", "name "=> "Sản phẩm 1 ");
    $arr[] = $r;
    $r = array("id"=> "sp2", "name "=> "Sản phẩm 2 ");
    $arr[] = $r;
    $r = array("id"=> "sp3", "name "=> "Sản phẩm 3 ");
    $arr[] = $r;
    showArray($arr);
    
?>
