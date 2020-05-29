<?php
session_start();
$message="";
if (count($_POST)>0) {
    $con = mysqli_connect('127.0.0.1:3306', 'root', '', 'ppl') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT * FROM dosen WHERE username='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["dosenid"] = $row['dosenid'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["mk1"] = $row['mk1'];
        $_SESSION["kdmk1"] = $row['kdmk1'];
        $_SESSION["mk2"] = $row['mk2'];
        $_SESSION["kdmk2"] = $row['kdmk2'];
        $_SESSION["nidn"] = $row['nidn'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["avatar"] = $row['avatar'];
        $_SESSION["email"] = $row['email'];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if (isset($_SESSION["dosenid"])) {
    header("Location:index.php");
}
?>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>User Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form class="box" name="frmUser" method="post" action="" align="center">
<div class="message"><?php if ($message!="") {
    echo $message;
} ?></div>
<h1>Login</h1>
<input type="text" name="user_name" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<input type="submit" name="submit" value="Submit">
<a href="home.php" class="button">Home</a>
</form>

</body>
</html>
