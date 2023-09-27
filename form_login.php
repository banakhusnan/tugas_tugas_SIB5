<?php
function cekLogin($username, $password)
{
    if ($username == "admin" && $password == "mimin") {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (cekLogin($username, $password)) {
        header("Location: admin.php");
        exit;
    } else {
        if (empty($username) || empty($password)) {
            $errorMessage = "Username atau password harap diisi terlebih dahulu!";
        } else {
            $errorMessage = "Username atau password salah!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="login-card">
        <div class="login-card__body">
            <form method="post">
                <label for="username">
                    Username
                    <input type="text" name="username" id="username">
                </label>
                <label for="password">
                    Password
                    <input type="password" name="password" id="password">
                </label>
                <button type="submit" name="login">Login</button>
            </form>
            <?php
            if (isset($errorMessage)) {
                echo '<small style="color: red;">' . $errorMessage . '</small>';
            }
            ?>
        </div>
    </div>
</body>

</html>