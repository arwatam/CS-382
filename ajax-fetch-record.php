<?php

include "dbCon.php";
$db=$conn;// database connection  

//legal input values
 $id     = $_POST['id'];
 $course = $_POST['course'];
 $date         = $_POST['date'];
 $time      = $_POST['time'];
   
if(!empty($id) && !empty($course) && !empty($date) && !empty($time)){
    //  Sql Query to insert user data into database table
    Insert_data($id,$course,$date,$time);
}else{
 echo "All fields are required";
}
// function to insert user data into database table
 function insert_data($id,$course, $date,$time){
 
     global $db;

      $query="insert into eduschedule(id,course,date,time) values('$id','$course','$date','$time')";

     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
        echo "<script>alert('New Appointment was added successfully');</script>";
     }
     else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }

?>