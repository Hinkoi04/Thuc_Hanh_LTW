<?php
$current_dir = isset($_GET['dir']) ? $_GET['dir'] : '';

if (strpos($current_dir, '..') !== false) {
    die("Không được phép truy cập đường dẫn này!");
}

$scan_path = $current_dir ? "./" . $current_dir : ".";

if (!is_dir($scan_path)) {
    die("Thư mục không tồn tại!");
}

$files = scandir($scan_path);
$files = array_diff($files, array('.', '..', 'index.php'));
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser: <?php echo $current_dir ? $current_dir : 'Lab 06'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f0f2f5; display: flex; justify-content: center; padding-top: 50px; }
        .container { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 700px; }
        .header { display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid #eee; padding-bottom: 15px; margin-bottom: 20px; }
        h2 { margin: 0; color: #4e54c8; font-size: 1.5rem; }
        .breadcrumb { color: #666; font-size: 0.9rem; margin-top: 5px; }
        .file-list { list-style: none; padding: 0; }
        .file-item { display: flex; align-items: center; padding: 12px; margin-bottom: 8px; background: #f8f9fa; border-radius: 8px; transition: all 0.2s; text-decoration: none; color: #333; }
        .file-item:hover { background: #eef2f7; transform: translateX(5px); }
        .icon { font-size: 22px; margin-right: 15px; width: 30px; text-align: center; }
        .fa-folder { color: #f39c12; }
        .fa-file-code { color: #4e54c8; }
        .fa-image { color: #27ae60; }
        .back-btn { background: #e74c3c; color: white; padding: 5px 15px; border-radius: 20px; text-decoration: none; font-size: 0.8rem; }
        .back-btn:hover { background: #c0392b; }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <div>
                <h2>
                    <?php if($current_dir): ?>
                        <i class="fas fa-folder-open"></i> <?php echo basename($current_dir); ?>
                    <?php else: ?>
                        <i class="fas fa-home"></i> Lab 06 Root
                    <?php endif; ?>
                </h2>
                <div class="breadcrumb">Vị trí: Lab06/<?php echo $current_dir; ?></div>
            </div>
            
            <?php if($current_dir): 
                $parent_dir = dirname($current_dir);
                $back_link = ($parent_dir == '.') ? 'index.php' : "?dir=" . $parent_dir;
            ?>
                <a href="<?php echo $back_link; ?>" class="back-btn"><i class="fas fa-arrow-left"></i> Quay lại</a>
            <?php else: ?>
                <a href="../index.html" class="back-btn"><i class="fas fa-home"></i> Trang chủ</a>
            <?php endif; ?>
        </div>

        <div class="file-list">
            <?php
            if (empty($files)) {
                echo "<p style='text-align:center; color:#999;'>Thư mục trống</p>";
            }

            foreach ($files as $file) {
                $full_path = $scan_path . '/' . $file;
                $is_dir = is_dir($full_path);
                
                if ($is_dir) {
                    $new_dir = $current_dir ? $current_dir . '/' . $file : $file;
                    $link = "?dir=" . urlencode($new_dir);
                    $icon = 'fa-folder';
                } else {
                    $link = $current_dir ? $current_dir . '/' . $file : $file;
                    $ext = pathinfo($file, PATHINFO_EXTENSION);
                    if(in_array($ext, ['jpg', 'png', 'gif'])) $icon = 'fa-image';
                    else $icon = 'fa-file-code';
                }
                
                echo "<a href='$link' class='file-item'>
                        <i class='fas $icon icon'></i>
                        <span class='file-name'>$file</span>
                      </a>";
            }
            ?>
        </div>
    </div>

</body>
</html>