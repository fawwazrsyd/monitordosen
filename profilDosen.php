<?php 
//include 'koneksi.php';
session_start();
if (isset($_GET['user']))
{
$conn = mysqli_connect("127.0.0.1:3306", "root", "", "ppl") or die('Unable To connect');
$sql = "SELECT nidn, name, kdmk, , mk1 FROM dosen";
$result = $conn->query($sql);
if ($$result->num_rows == 1)
{
    $result = $conn->query($sql);
           
}
       
} 
?>
<!DOCTYPE html>
<html>    
<head>        
	<meta charset="UTF-8">
	        <title><?php echo $result['username'] ?>'s Profile</title>
</head>
<body>
    <a href="index.php">Home</a> | <?php echo $result['username'] ?>'s Profile        
    <h3>Personal Information | <? php            $visitor = $_SESSION['username'];
           if ($user == $visitor)
{ ?>            <a href="edit-profile.php?user=<?php echo $result['username'] ?>">Edit Profile</a>            <?php

        ?>        </h3>        
        <table>
                    <tr>                
                    	<td>NIDN:</td><td><?php echo $result['nidn'] ?></td>   
                    </tr>
                    <tr>                
                    	<td>name:</td><td><?php echo $result['nama'] ?></td> 
                    </tr> 
                    <tr>
                        <td>Kode MK:</td><td><?php echo $result['kdmk'] ?></td>
                    </tr>
                    <tr>
                        <td>Mata Kuliah	:</td><td><?php echo $result['mk'] ?></td> 
                    </tr>        
        </table> 
    </body>
</html> 
?>