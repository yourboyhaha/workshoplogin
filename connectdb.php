<?php
$dbcon = mysqli_connect(
    'localhost',
    'root',
    '123456789',
    'loginsystem'
);
if (mysqli_connect_errno()) {
    echo "ไม่สามารถติดต่อฐานข้อมูล Mysql ได้" .
        mysqli_connect_error();
} else {
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
}
mysqli_set_charset($dbcon, 'utf8');
?>