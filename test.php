<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<style type="text/css">
/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
</head>
<body>
  <?php
    if($_SESSION["name"]) {
  ?>
  Welcome <?php echo $_SESSION["name"]; ?>.Click here to <a href="logout.php" tite="Logout">Logout</a>
  <?php
    $con =  mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con,'ppl');

    $sql= "SELECT * FROM matkul";

    $records = mysqli_query($con,$sql);
  ?>

  <table>
    <h4> LIST ABSENSI MATA KULIAH </h4>


    <tr>
      <th><center>Mata Kuliah</center></th>
      <th><center>Pertemuan</center></th>
      <th><center>Kelas</center></th>
      <th><center>Tanggal</center></th>
      <th><center>absen</center></th>
      <th><center>Note</center></th>
     </tr>

    <?php
      while($row = mysqli_fetch_array($records)) {
        if($row["kdmk"] == $_SESSION["kdmk1"] && $row["dosenid"] == $_SESSION["dosenid"] ){

      echo "<tr><form action=process1.php method=post>";
      echo "<input type=hidden name=mkid value='".$row['mkid']."'>";
      echo "<td>".$row['mk']."</td>";
      echo "<td>".$row['pertemuan']."</td>";
      echo "<td>".$row['kelas']."</td>";
      echo "<td>".$row['tanggal']."</td>";?>

      <td>
        <select name="absen" >
          <option value=""><?php if( $row["absen"] == 1 ) echo "--masuk--"; else echo "--tidak masuk--";?></option>
          <option value="1"> <?php if($row["absen"] == '1') ?> masuk </option>
          <option value="2"> <?php if($row["absen"] == '2') ?> tidak masuk </option>
        </select>
      </td>

      <?php
      echo "<td><input type=text name=alasan value='".$row['alasan']."'></td>";
      echo "<td><input type=submit>";
      echo "</form></tr>";
        }
      }

?>
</table>
<?php
}else echo "<h1>Please login first .</h1>";
?>
<div class="dropdown">
  <button class="dropbtn">Mata Kuliah Saya</button>
  <div class="dropdown-content">
    <?php if($_SESSION["kdmk1"] != 0)
      echo "<a href='matkul1.php'>" .$_SESSION['mk1']. "</a>";
      ?>
    <?php if($_SESSION["kdmk2"] != 0)
      echo "<a href='matkul2.php'>" .$_SESSION['mk2']. "</a>";
      ?>

      <a href="index.php">home</a>

  </div>
</div>

</body>
</html>
