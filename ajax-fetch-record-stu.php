
<?php
include "dbCon.php";
$db=$conn;// database connection  

//legal input values
 $stuID     = $_POST['stuID'];
 $eduName=$_POST['eduName'];
 $course = $_POST['course'];
 $date         = $_POST['date'];
 $time      = $_POST['time'];
   
if(!empty($stuID) && !empty($eduName) && !empty($course) && !empty($date) && !empty($time)){
    //  Sql Query to insert user data into database table
    Insert_data($stuID,$eduName,$course,$date,$time);
}else{
 echo "All fields are required";
}
// function to insert user data into database table
 function insert_data($stuID,$eduName,$course, $date,$time){
 
     global $db;

      $query="insert into StuSession(stuid,eduName,course,date,time) values('$stuID','$eduName','$course','$date','$time')";

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