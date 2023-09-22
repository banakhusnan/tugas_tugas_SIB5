<form action="" method="get">
    <label for="">Username</label>
    <input type="text" name="username"><br>

    <label for="">Password</label>
    <input type="password" name="password"><br>

    <input type="submit" name="login" id="" value="simpan"><br>
</form>

<?php
$username = $_GET['username'];
$password = $_GET['password'];
$login = $_GET['login'];

if (isset($login)) {
    echo "Hello $username <br> dan password anda $password";
}
?>