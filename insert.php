<?php
include 'connectdb.php';
//นำค่าที่ได้จาก form มาเก็บในตัวแปร
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$salt = qwertyuiopasdfghjklzxcvbnm;
$hash_login_password = hash_hmac('sha256', $login_password, $salt);


//query ข้อมูล (เตรียมคำสั่ง sql)
$query = "INSERT INTO member(username, login_password, email)
VALUES('$username', '$hash_login_password', '$email')";

//เพิ่มข้อมูลเข้าสู่ฐานข้อมูล
$result = mysqli_query($dbcon, $query);

//ถ้าเพิ่มสำเร็จ ให้ไปที่ไฟล์ index.php
//ถ้าเพิ่มไม่สำเร็จ ให้แสดงข้อความเกิดข้อผิดพลาด
if ($result) {
    header("Location: index.php");
} else {
    echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
}
//ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($dbcon);
?>