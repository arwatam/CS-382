<?php   
 include 'dbCon.php';  
 if (isset($_POST['stuid'])) {  
      $id = $_POST['stuid'];  
      $query = "DELETE FROM `StuSession` WHERE stuid = '$id'";  
      $run = mysqli_query($conn,$query);  
        if ($run) {  
           header('location:student-schedual.php'); 
        }
      else{  
           echo "Error: ".mysqli_error($conn);  
        }  
 }  
?>
