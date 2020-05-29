<?php
session_start();
?>  
<!-- 
////////////////////////////////////////////////////////////////

Author: Free-Template.co
Author URL: http://free-template.co.
License: https://creativecommons.org/licenses/by/3.0/
License URL: https://creativecommons.org/licenses/by/3.0/
Site License URL: https://free-template.co/template-license/
  
Website:  https://free-template.co
Facebook: https://www.facebook.com/FreeDashTemplate.co
Twitter:  https://twitter.com/Free_Templateco
RSS Feed: https://feeds.feedburner.com/Free-templateco

////////////////////////////////////////////////////////////////
-->
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Update Your Attandance </title>
   <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" /> -->
<!-- from index -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/realeses/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
<!-- end from index -->
    <link rel="shortcut icon" href="ftco-32x32.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- From Previous Index -->
    <style type="text/css">
        /* Dropdown Button */
            body { background: #34495e !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
            .button {
                width: 200px;
                padding: 40px;
                border:0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #2ecc71;
                padding: 14px 40px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25s;
                cursor: pointer;
            }
            .button:hover{
                background: #2ecc71;
            }

            .ddm{
                padding: 10px 14%;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #ddd;}

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {display: block;}

            /* Change the background color of the dropdown button when the dropdown content is shown */
            .dropdown:hover .dropbtn {background-color: #3e8e41;}

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

            .box input[type = "submit"]{
                border:0;
                background: none;
                display: block;

                text-align: center;
                border: 2px solid #2ecc71;
                padding: 3px 7px;
                outline: none;
                color: white;
                border-radius: 19px;
                transition: 0.25s;
                cursor: pointer;
            }
            .box input[type = "submit"]:hover{
                background: #2ecc71;
            }
             #header{
                width:100%;
                bottom:600px;
                background:#9cb2c9;
                color:white;
            }
            img {
                border-radius: 50%;
                width: 120px;
                height: 130px;
                margin-bottom: 2em;
            }
    </style>


  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
 <!--  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-4">
              <h1 class="my-0 site-logo"><a href="homed.php">Monitor Your Dosen<span class="text-primary">.</span> </a></h1>
            </div>
            <div class="col-6 col-md-8">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                  </a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                  <center><img src="images/dosen.png" alt="Avatar"></center>
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="#profildosendari amar" class="nav-link">Profil Dosen</a></li>
                    <li><a href="logout.php" class="nav-link">Logout</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- END .site-navbar-wrap -->
    

    <?php
    if($_SESSION["name"]) {
    $con =  mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con,'ppl');

    $sql= "SELECT * FROM matkul";

    $records = mysqli_query($con,$sql);
  ?>

  <div class="container">
   <table class="table table-dark table-striped table-hover table-bordered">
     <tr class="thead-dark">
       <h3 colspan="5" style="color:white"><center> LIST ABSENSI MATA KULIAH </center></h3>
     </tr>

     <tr>
       <th scope="col">Mata Kuliah</th>
       <th scope="col">Pertemuan</th>
       <th scope="col">Kelas</th>
       <th scope="col">tanggal</th>
       <th scope="col">Kehadiran</th>
       <th scope="col">Note</th>
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
        <div >
          <select name="absen"  class="custom-select mr-sm-2" id="inlineFormCustomSelect" >
            <option <?php if($row["absen"] == 1) echo "value='1'"; else echo "value='2'";?>>
              <?php if( $row["absen"] == 1 ) echo "--masuk--"; else echo "--tidak masuk--";?>
            </option>
            <option value="1"> <?php if($row["absen"] == '1') ?> masuk </option>
            <option value="2"> <?php if($row["absen"] == '2') ?> tidak masuk </option>
          </select>
        </div>
      </td>

      <?php
      echo "<td><input class='form-control' type=text name=alasan value='".$row['alasan']."'></td>";
      echo "<td class='box'><input type='submit' name='submit' value='submit'>";
      echo "</form></tr>";
        }
      }

?>
</table>
</div>
<?php
}else echo "<h1>Please login first .</h1>";
?>
<div class="dropdown show text-right ddm">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Mata Kuliah
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
    <?php if ($_SESSION["kdmk1"] != 0) {
    echo "<a class='dropdown-item' href='matkul1.php'> <center>" .$_SESSION['mk1']. "</center></a>";
}
      ?>
    <?php if ($_SESSION["kdmk2"] != 0) {
          echo "<a class='dropdown-item' href='matkul2.php'> <center>" .$_SESSION['mk2']. "</center></a>";
      }
      ?>
    <a class="dropdown-item" href="index.php"><center> home</center> </a>
  </div>
</div>
    <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>












