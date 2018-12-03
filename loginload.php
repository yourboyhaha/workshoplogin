<?php
require 'connectdb.php';

$login_username = mysqli_escape_string($dbcon, $_POST['username']);
$login_password = mysqli_escape_string($dbcon, $_POST['password']);

$salt = qwertyuiopasdfghjklzxcvbnm;
$hash_login_password = hash_hmac('sha256', $login_password, $salt);

$sql = "SELECT * FROM member WHERE username=? AND login_password=?";
$stmt = mysqli_prepare($dbcon, $sql);
mysqli_stmt_bind_param($stmt, "ss", $login_username, $hash_login_password);
mysqli_execute($stmt);

$result_user = mysqli_stmt_get_result($stmt);
echo "<p>";
print_r($result_user);
echo "</p>";

if ($result_user->num_rows == 1) {
    session_start();
    $row_user = mysqli_fetch_array($result_user, MYSQLI_ASSOC);
    $_SESSION['id_user'] = $row_user['id_user'];
    print_r($_SESSION['id_user']);
    // header("Location: main.php");
} else {
    echo "Username หรือ Password ไม่ถูกต้อง";
}

?>
               