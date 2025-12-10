<?php
$content = file_get_contents("http://thethao.vnexpress.net/");
//echo $content;
$pattern = '/<h3 class="title-news">.*<\/h3>/imsU';
preg_match_all($pattern, $content, $arr);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Các link title new cào về</h1>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Link</th>
        </tr>
        <?php
        foreach ($arr[0] as $key => $value) {
            echo "<tr>
                    <td>" . $key + 1 . "</td>
                    <td>$value</td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>