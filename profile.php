<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Edite profile</title>
  </head>
  <div>
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
    <div class="center" >
        <div class=" box " >
          <!-- <div class="w3-padding-large " style="border: 1px solid black;"> -->
            <div >
               <div class="w3-card-2 margin center">
                  <div class="w3-container dark-green-background w3-center w3-text-white">
                    <h2>Edite profile</h2>
                  </div>
                <form action="#" class="w3-container light-green-background" >
                 <p>
                   <label class="w3-text-white"><b>First Name</b></label>
                   <input class="w3-input w3-border" name="first" type="text" />
                 </p>
                 <p>
                 <label class="w3-text-white"><b>Last Name</b></label>
                <input class="w3-input w3-border" name="last" type="text" />
                </p>
                <p>
               <label class="w3-text-white"><b>phone</b></label>
               <input class="w3-input w3-border" name="phone" type="text" />
                 </p>
                <p>
                <label class="w3-text-white"><b>Email</b></label>
                <input class="w3-input w3-border" name="email" type="text" />
                </p>

                <div class="w3-center w3-padding-24">
                    <input
                    class=" w3-white w3-border-teal w3-round-xlarge w3-padding"
                      type="submit"
                     value="Edite Profile"
                 />
              </div>
             </form>
            </div>
       </div>
  </div></div>
    <!--  ------------------------------------------------ footrt part part------------------------------------------------------ -->
   <br><br>
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
            Yanbu University College (Female Campus)??<br />
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
    <!--  ---------------------------------------------- End of footrt part part------------------------------------------------------ -->
  </body>
</html>