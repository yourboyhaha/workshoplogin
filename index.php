<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>หน้าแรก</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <div>
    <form action="loginload.php" method="POST">
    <p>
        <label for="username">username : </label>
        <input type="text" name="username" required autofocus>
        
        <label for="password">password : </label>
        <input type="password" name="password" required>
        
    </p>
        <input type="submit" value="เข้าสู่ระบบ">
    </form>
    
    <!-- คำสั่ง a คือคำสั่งลิ้งไปยังส่วนต่างๆ -->
    <a href="register.php">ลงทะเบียน</a>
    </div>
</body>
</html>