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
    <title>Monitor Your Dosen </title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    

    <link rel="stylesheet" href="css/style.css">
    <!-- From Previous Index -->
    
   
    
    <style type="text/css">
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
                  </a></div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- END .site-navbar-wrap -->
    

    <div class="container">
  <table class="table table-dark table-striped table-hover table-bordered">
    <tr class="thead-dark">
      <h3 colspan="5" style="color:white"><center> LIST ABSENSI MATA KULIAH </center></h3>
    </tr>

    <tr >
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Nama Dosen</th>
      <th scope="col">Pertemuan</th>
      <th scope="col">Kelas</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Note</th>
     </tr>

     <?php
  $conn = mysqli_connect("127.0.0.1:3306", "root", "", "ppl") or die('Unable To connect');

  $sql = "SELECT mk, dosenid, name, pertemuan, kelas, tanggal, absen, alasan FROM matkul";
  //$absen = "SELECT absen FROM matkul";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row

      while ($row = $result->fetch_assoc()) {
          if ($row["absen"] > 1) {
              echo "<tr scope='row'><td>" . $row["mk"]. "</td><td>" . $row["name"] . "</td><td>"
  . $row["pertemuan"]. "</td><td>" . $row["kelas"]. "</td><td>" .
  $row["tanggal"]. "</td><td><div style='width:120px;'>" . $row["alasan"]. "</div></td></tr>";
          }
      }
      echo "</table>";
  } else {
      echo "0 results";
  }
  $conn->close();

  ?>
  </table>

 </div>
  <a href="login.php" class="button">Login Dosen</a>


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