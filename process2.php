<?php

  $con =  mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'ppl');

  $sql = "UPDATE matkul set absen = '$_POST[absen]', alasan='$_POST[alasan]' where mkid='$_POST[mkid]'";

  if(mysqli_query($con,$sql))
    header("refresh:1; url=matkul2.php");
  else
    echo "not update";
?>
