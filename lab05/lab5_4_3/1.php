<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Đỗ Thuận Hòa - DH52200694</h1>

    <fieldset>
        <legend>Đăng ký thông tin thành viên</legend>
        <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="dn">Tên đăng nhập (*)</label></td>
                <td><input type="text" name="ten" id="dn" required></td>
            </tr>
            <tr>
                <td><label for="pass">Mật khẩu (*)</label></td>
                <td><input type="password" name="pass" id="pass" required></td>
            </tr>
            <tr>
                <td> <label for="repass">Nhập lại mật khẩu. (*)</label></td>
                <td><input type="password" name="repass" id="repass" required></td>
            </tr>
            <tr>
                <td><label for="gt">Giới tính (*)</label></td>
                <td>
                    <input type="radio" id="nu" name="gt" value="0" required>
                    <label for="nu">Nữ</label>
                    <input type="radio" id="nam" name="gt" value="1" required>
                    <label for="nam">Nam</label>
                </td>
            </tr>
            <tr>
                <td><label for="st">Sở Thích</label></td>
                <td> <textarea name="st" id="st" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><label for="hinh">Hình ảnh (tùy chọn).</label></td>
                <td><input type="file" name="hinh" id="hinh" accept="image/*"></td>
            </tr>
            <tr>
                <td><label for="tinh">Tỉnh(*)</label></td>
                <td>
                    <select name="tinh" id="tinh" required>
                        <option value>Chọn tỉnh</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="TP HCM">TP HCM</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Đăng ký">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>
    <?php
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['pass'])&&isset($_POST['repass'])){
                if($_POST['pass'] != $_POST['repass'])
                    echo "Mật khẩu không giống nhau";
            }else if($_FILES['hinh']['error'] == 0){
                $fileName = $_FILES['hinh']['name'];
                $fileType = $_FILES['hinh']['type'];
                $tempPath = $_FILES['hinh']['tmp_name'];
                $fileSize = $_FILES['hinh']['size'];
                if(in_array(($fileType), ["image/jpeg", "image/png", "image/bmp", "img/gif"])){
                    if (move_uploaded_file($tempPath, "uploads/" . $fileName)) {
                        echo "File đã được tải lên thành công!";
                    } else {
                        echo "Lỗi khi di chuyển file!";
                    }
                } else {
                    echo "Không phải file hình ảnh hợp lệ!";
                }
                
            }
        }
    ?>
</body>
</html>