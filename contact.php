<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact us</title>
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
          class="w3-bar-item w3-button w3-hover-white w3-text-pink w3-padding-32"
          >Contact</a
        >
    </nav>
</header>
  <!-- ---------------------------------------------- End of header part------------------------------------------------------ -->
    
  <!------------------------------------------------Start contact us form--------------------------------------------->
  <div id="Back-Ground-Circle-8"></div>
  <div class="w3-display-topleft" id="Back-Ground-Circle-6"></div>
  <div class="w3-row-padding ">
    <div class="w3-half margin-form-1 w3-center image-width" >
      <img src="images/Contact us.svg"  alt="contact us image" >
   </div>
<!------------------------------------------------Start contact us form--------------------------------------------->
  <form action="#" class=" margin-form-2-green w3-round-large w3-half w3-display-right w3-container w3-card-4 w3-text-white ">
    <h1 class="w3-center">Contact Us</h1>
     <hr>
    <div>
      <div class="w3-col logo-width" ><i class="w3-xlarge fa fa-user"></i></div>
        <div class="w3-rest">
          <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
        </div>
    </div>
    
    <div class="w3-row w3-section">
      <div class="w3-col logo-width" ><i class="w3-xlarge fa fa-user"></i></div>
        <div class="w3-rest">
          <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
        </div>
    </div>
    
    <div class="w3-row w3-section">
      <div class="w3-col logo-width" ><i class="fa fa-id-badge w3-xlarge" ></i></div>
        <div class="w3-rest">
          <input class="w3-input w3-border" name="id" type="text" placeholder="ID">
        </div>
    </div>
    
    <div class="w3-row w3-section">
      <div class="w3-col logo-width"><i class="fa fa-lightbulb-o w3-xlarge" ></i></div>
        <div class="w3-rest">
          <input class="w3-input w3-border" name="phone" type="text" placeholder="Subject">
        </div>
    </div>
    
    <div class="w3-row w3-section">
      <div class="w3-col logo-width"><i class="w3-xlarge fa fa-pencil"></i></div>
        <div class="w3-rest">
          <input class="give-height w3-input w3-border" name="message" type="text" placeholder="Write comment...">
        </div>
    </div>
    
    <div class="w3-center w3-padding-24">
      <input
      class=" w3-white w3-border-teal w3-round-xlarge w3-padding"
        type="submit"
       value="Send"
    />
    </div>
    </form>
    <br>
    


  
  <!--------------------------------Start the footer--------------------------------->
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
    <!--------------------------------End the footer--------------------------------->
</body>
</html>