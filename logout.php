<?php
session_start();
unset($_SESSION["dosenid"]);
unset($_SESSION["name"]);
header("Location:home.php");
