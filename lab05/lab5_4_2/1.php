<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Đỗ Thuận Hòa - DH52200694</h1>
    <Fieldset>
        <legend>Tìm kiếm sản phẩm</legend>
        <form action="" method="get">
        <strong><label for="sp">Tên sản phẩm</label></strong>
        <br>
        <input type="text" name="sp" id="sp" required>
        <br>
        <input type="radio" name="ct" value="gần đúng" checked>  Gần đúng
        <input type="radio" name="ct" value="chính xác" > Chính xác
        <br>

        <strong>Loại sản phẩm</strong>
        <br>
        <input type="checkbox" name="loai[]" value="loại 1"> Loại 1 <br>
        <input type="checkbox" name="loai[]" value="loại 2"> Loại 2 <br>
        <input type="checkbox" name="loai[]" value="loại 3"> Loại 3 <br>
        <input type="checkbox" name="loai[]" value="tất cả"> Tất cả <br>
        <input type="submit" value="Tìm">
        </form>
    </Fieldset>
    <?php
        if(isset($_GET['sp'])){
            echo "Tên sản phẩm: ". $_GET['sp']."<br>";
        }
        if (isset($_GET['ct'])) {
            echo "Cách tìm: ". $_GET['ct']."<br>";

        }

        if (isset($_GET['loai'])) {
            echo "Loại sản phẩm: ";
            if(is_array($_GET['loai'])){
                echo implode(", ", $_GET['loai'])."<br>";
            }
        }
        else
            echo "không chọn loại"."<br>";
    ?>
</body>
</html>