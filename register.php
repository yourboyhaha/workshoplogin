<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ลงทะเบียน</title>
    <link href="style.css" rel="stylesheet">

</head>
<body>
    <div>
    <form action="insert.php" method="POST">
    <p>
        <label for="username">username : </label>
        <input type="text" name="username" required autofocus>
        
        <label for="password">password : </label>
        <input type="password" name="password" required>
        
        <label for="email">E mail: </label>
        <input type="email" name="email" required 
        placeholder="example@domain.com">
    </p>    
        <input type="submit" value="ลงทะเบียน">
    </form>
    </div>
</body>
</html>