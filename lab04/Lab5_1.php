<h1>Đỗ Thuận Hòa - DH52200694 - D22_TH07</h1>
<h2>Lab5.1</h2>
<?php
    function showArray($arr){
        echo '<table border=1>';
        echo"<tr>
            <td>Index</td>
            <td>Value</td>
        </tr>";
        foreach ($arr as $key => $value) {
            echo "<tr>
            <td>$key</td>
            <td>$value</td>
        </tr>";
        }
        echo "</table>";
    }

    $a = array(4,1,5,8);
    showArray($a);
    
?>
