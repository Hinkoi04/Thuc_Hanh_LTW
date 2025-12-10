<h1>Đỗ Thuận Hòa - DH52200694 - D22_TH07</h1>
<h2>Lab5.2</h2>

<?php
$questionBank = [
    'PHP là viết tắt của từ gì?' => [
        'Personal Home Page',
        'PHP: Hypertext Preprocessor',
        'Private Home Page',
        'Programmed Hypertext Processor'
    ],
    'Ký tự nào được dùng để bắt đầu một biến (variable) trong PHP?' => [
        '$ (Dollar)',
        '& (Ampersand)',
        '@ (At)',
        '# (Hash)'
    ],
    'Hàm nào dùng để in ra "Hello World" trong PHP?' => [
        'print("Hello World");',
        'echo "Hello World";',
        'document.write("Hello World");',
        'Cả A và B đều đúng'
    ],
    'Làm thế nào để viết một comment (chú thích) nhiều dòng trong PHP?' => [
        '// Đây là comment',
        '/* Đây là comment */',
        '',
        '# Đây là comment'
    ],
    'Trong PHP, mảng liên hợp (associative array) sử dụng key (khóa) kiểu gì?' => [
        'Chỉ số nguyên (Integer)',
        'Tên (String)',
        'Cả số nguyên và tên',
        'Không có kiểu nào ở trên'
    ],
    'Hàm `array_rand()` dùng để làm gì?' => [
        'Sắp xếp mảng ngẫu nhiên',
        'Chọn một hoặc nhiều *phần tử* ngẫu nhiên từ mảng',
        'Chọn một hoặc nhiều *khóa (key)* ngẫu nhiên từ mảng',
        'Tạo một mảng mới với các giá trị ngẫu nhiên'
    ]
];

$n = count($questionBank);
$m = 3;
echo "<h1>ĐỀ THI TRẮC NGHIỆM</h1>";
echo "<p>Lấy ngẫu nhiên $m trong $n câu:</p>";
echo "<hr>";
if ($m < $n && $m > 0) {
    $randomQuestionKeys = array_rand($questionBank, $m);
    $stt = 1;
    foreach ($randomQuestionKeys as $questionText) {
        $options = $questionBank[$questionText];
        echo "<strong>Câu " . $stt++ . ": " . $questionText . "</strong>";
        echo "<ul>";
        foreach ($options as $option) {
            echo "<li>" . $option . "</li>";
        }
        echo "</ul>";
    }
} else {
    echo "Lỗi: Số câu hỏi cần lấy ($m) phải nhỏ hơn tổng số câu hỏi ($n) và lớn hơn 0.";
}
?>