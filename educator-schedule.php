<html>
  <head>
  <title>Educator Schedule</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
  </head>
<body>

 <!-- ----------------------------------------------------header part------------------------------------------------------ -->
 <header class="w3-container">
      <a href="index.php" class="w3-bar-item w3-button w3-left"
        ><img src="images/ProCenter-logo.png" class="logo" alt="ProCenter logo"
      /></a>

      <div class="w3-dropdown-hover w3-mobile w3-right">
        <button class="w3-button w3-padding-16 ">
          <img src="images/profile.png" alt="profile logo" class="icons" />
        </button>
        <div class="w3-dropdown-content w3-bar-block  w3-teal progile-right">
          <a
            href="profile.php"
            class="w3-bar-item w3-button w3-mobile  w3-hover-light-grey w3-hover-text-pink"
            ><i class="fa fa-edit w3-margin-right Edit-out-logo-size" ></i>Edit Profile</a
          >
          <a
            href="login.php"
            class="w3-bar-item w3-button  w3-mobile w3-hover-light-grey w3-hover-text-pink"
            ><i class="fa fa-sign-out w3-margin-right Edit-out-logo-size" ></i>Log out</a
          >
        </div>
      </div>
      <nav class="w3-navbar w3-text-grey w3-display-topmiddle w3-margin-top">
        <a
          href="index.php"
          class="w3-bar-item w3-button w3-hover-none w3-hover-text-pink w3-mobile"
          >Home</a
        >
        <div class="w3-dropdown-hover w3-mobile">
          <button
            class="w3-button w3-hover-none w3-hover-text-pink w3-padding-16"
          >
            Educator <i class="fa fa-caret-down"></i>
          </button>
          <div class="w3-dropdown-content w3-bar-block w3-teal">
            <a
              href="find-educator.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
              >Find an Educator</a
            >
            <a
              href="be-educator.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
              >Be an Educator</a
            >
          </div>
        </div>
        <div class="w3-dropdown-hover w3-mobile">
          <button class="w3-button w3-hover-text-pink w3-padding-16 w3-hover-none">
            Appointment <i class="fa fa-caret-down"></i>
          </button>
          <div class="w3-dropdown-content  w3-bar-block w3-teal">
            <a
              href="student-appointment.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
              >My Appointment</a
            >
            <a
              href="student-schedual.php"
              class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
              >My Schedual</a
            >
            <a
            href="student-materials.php"
            class="w3-bar-item w3-button w3-mobile w3-hover-light-grey w3-hover-text-pink"
            >My Materials</a
          >
          </div>
        </div>

        <a
          href="about.html"
          class="w3-bar-item w3-button w3-hover-white w3-hover-text-pink w3-padding-32"
          >About</a
        >
        <a
          href="contact.php"
          class="w3-bar-item w3-button w3-hover-white w3-hover-text-pink w3-padding-32"
          >Contact</a
        >
    </nav>
</header>

 <!-- ---------------------------------------------- End of header part------------------------------------------------------ -->
 
<!-- ---------------------------------------------- Educator Schedule part------------------------------------------------------ -->

 <br>
<div class="w3-container w3-padding-64 ">
  <h2>Educator Schedule</h2>
  <div class="w3-responsive w3-center">
  <table class="w3-table-all ">
    <thead>
      <tr class="w3-teal ">
        <th>Appointment #</th>
        <th>Course</th>
        <th>Appointment Date</th>
        <th>Available Time</th>
        <th>Action</th>
      </tr>
    </thead>

    <tr>
    <div class="user-detail">
    <p id="msg"></p>
      <form  id="userForm" method="POST"action="">
      <td><input type="number" id="id" name="id" placeholder="Appoitnment number"></td>
      <td><input type="text" id="course" name="course" placeholder="course name" ></td>
      <td><input type="date" id="date" name="date"  ></td>
      <td><input type="time" id="time" name="time"  ></td>
      <td><button type="submit"  name="submit" class="w3-teal w3-border-teal w3-round-xlarge w3-padding" >
      <i class="fa fa-plus  Edit-out-logo-size add" ></i> Add new Appointment </button>
      </td>
    </form>
    </div>
    </tr>
    <?php   
    include 'dbCon.php';
    $sql = "SELECT * FROM eduschedule";  
    $result = $conn->query($sql);
    if($result){
           if (( isset($result->num_rows) && $result->num_rows >0)) {  
                while ($row = $result->fetch_assoc()) {  
                     echo "  
                          <tr class='data'>   
                          <td>".$row['id']."</td>  
                          <td>".$row['course']."</td>  
                          <td>".$row['date']."</td>  
                          <td>".$row['time']."</td> 
                          <td><a data-id=\"".$row['id']."\" class='w3-button w3-teal w3-border-teal w3-round-xlarge delete '><i class='fa fa-close  Edit-out-logo-size' ></i> Cancel</a></td> 
                          </tr>  
                     ";  
                }  
              }  
           }
           else{ 
            echo "Error in ".$sql." ".$conn->error; }
    $conn->close();
      ?>  
    
  </table>
</div>
</div>
<br>

  <!-- ---------------------------------------------- End of Educator Schedule part------------------------------------------------------ -->
<br><br>
    <!--  ------------------------------------------------ footer part part------------------------------------------------------ -->
    <footer class="w3-teal">
      <div class="w3-container">
        <br />
        <div class="w3-third w3-container w3-mobile w3-small">
          <img
            src="images/location.png"
            alt="location logo"
            class="social-icons"
          />
          <b>Our Address</b>
          <p>
            Yanbu University College (Female Campus)·<br />
            Department of Computer Science.
          </p>
        </div>
        <div class="w3-third w3-container w3-mobile w3-small">
          <img
            src="images/email.png"
            alt="location logo"
            class="social-icons"
          />
          <b>Email Us at</b>
          <p>ProCenter@gmail.com</p>
        </div>

        
      </div><br /><br />
      <div class="w3-display-bottom w3-container">
        <span>&#169;</span>2022 All Right Reserved by CSE ProCenter
      </div>
    </footer>
    <!--  ---------------------------------------------- End of footer part part------------------------------------------------------ -->
  <script>
    // for adding new appointment
    $(document).on('submit','#userForm',function(e){
        e.preventDefault();
        $.ajax({
        method:"POST",
        url: "ajax-fetch-record.php",
        data:$(this).serialize(),
        success: function(data){
        $('#msg').html(data);
        $('#userForm').find('input').val('')
        }});
    });

  // for deleting new appointment
  $(document).ready(function(){
  $(".delete").click(function(){
    var del_id = $(this).data('id');
    var parent = $(this).parent().parent();
    $.ajax({
            type:"POST",
            url:"db_edudelete.php?id="+del_id,
            data:"id="+del_id,
            success:function(data) {
                if(data) { // Sucess
                  parent.slideUp(100,function() {
                  parent.remove();}); 
                } 
                else { // Error }
                }
            }
          });
          });
      });
  </script>
  
  </body>
</html> 