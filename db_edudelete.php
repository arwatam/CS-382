<?php   
 include 'dbCon.php';  
 if (isset($_POST['id'])) {  
      $id = $_POST['id'];  
      $query = "DELETE FROM `eduschedule` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
        if ($run) {  
          header('location:educator-schedule.php'); 
        }
      else{  
           echo "Error: ".mysqli_error($conn);  
        }  
 }  
?>
