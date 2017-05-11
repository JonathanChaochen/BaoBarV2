    <!DOCTYPE html>
    <html lang="en">
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name = "description"  content = "Asian Inspired Street Food">
       <link rel="icon" href="images/baobackgroundweb.png"  sizes="45*45">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

       <link rel="stylesheet" href="css/stylesheet.css">


       <title>Contact | Asian Street food</title>
    </head>
    <body>

    <div class="inner innermobile">
       <header class="row  text-center ">

         <div class="col-sm-2 col-sm-offset-2">
           <img id="trademark" src="images/baobackgroundweb.png" alt="logo">
         </div>
         <div  class="col-sm-4 restaurant">
           <h2>BAO BAR</h2>
           <p>Asian Inspired Street Food</p>
         </div>

         <div class="col-sm-3 phone">
           <div id="booking" >
           Bookings 03 343 5588
           </div>
               <a id="bookclick" href="contact.php" class="btn btn-success">
                 <div id="booking-button"> Click here to make a booking</div>
               </a>
         </div>

       </header> <!-- row -->



        <div class="home-header">
          <div id="mobile-menu">
                          <img class="menu-btn" src="images/icon-white/list-menu.svg" alt="Menu Open">
                          <img class="menu-btn" src="images/icon-white/close.svg" alt="Menu Close" style="display:none;">
          </div>


          <div class="navbar-new text-center">

            <a href="index.html" class="navlink nav1">Home</a>
            <a href="menu.html" class="navlink nav2">Menu</a>
            <a href="baolicious.html" class="navlink nav3">Baolicious Specials</a>
            <a href="gallery.html" class="navlink nav4">Gallery</a>
            <a href="contact.php"  class="nav5 select">Contact &amp; Booking</a>

          </div>
        </div>

    </div>    <!-- container  -->






    <main class="inner">

    <section class="pattern">
    <picture>
      <source media="(min-width: 768px)" srcset="images/front-window-pattern-Web-final.png">
      <img src="images/front-window-halfline.png" alt="design pattern">
    </picture>
    </section>


    <div  class="row">

    <div id="welcome-pic" class="col-sm-8">
      <img src="images/baobar-contact.jpg" class="img-fluid" alt="smile face">
    </div>

    <div id="email-form" class="col-sm-4 ">
      <h3 class="mt-2">Make a booking</h3>

      <form id="contact_form"  action="contact.php" method="post">
      <div class="form-group row">
        <div class="col-xs-12">
        <input class="form-control" type="text" name="form_name" id="form_name" placeholder="Name" required>
        </div>
      </div>
        <div class="form-group row">
          <div class="col-xs-12">
            <input  class="form-control" type="email" name="form_email" id="form_email" placeholder="Email" required>
          </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-12">
            <input class="form-control" type="text" name="form_number" id="form_password" placeholder="Contact Number" required>
          </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-12">
            <input class="form-control" type="text" name="form_date" id="form_date" placeholder="Date" required>
          </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-12">
            <input class="form-control" type="text" name="form_time" id="form_time" placeholder="Time" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-12">
            <textarea class="form-control"  rows="5"  name="form_comment" id="example-search-input" placeholder="Comments (e.g number of guests, any special requirements)" required></textarea>
          </div>
        </div>


        <div class="form-group d-flex justify-content-end">
          <div id="submit">
            <input class="btn btn-success pull-right" type="submit" name="submit" >
            <span class="glyphicon glyphicon-send"></span> Submit</input>
          </div>
        </div>

      </form>

      <?php
      if($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {

          // EDIT THE 2 LINES BELOW AS REQUIRED
          $email_to = "chaochen42@gmail.com";
          $email_subject = "New order from website";
      $error_full = "";
          function died($error) {

          $error_full = "";
        global $error_full;
        // your error code can go here
        $error_full .= "We are very sorry, but there were error(s) found with the form you submitted.<br /> <br />  ";
        $error_full .= "These errors appear below.<br /> ";
        $error_full .= $error."<br />";
        $error_full .= "Please go back and fix these errors.<br />";
          }


          // validation expected data exists
          if(!isset($_POST['form_name']) ||
              !isset($_POST['form_email']) ||
              !isset($_POST['form_number']) ||
              !isset($_POST['form_date']) ||
              !isset($_POST['form_time']) ||
              !isset($_POST['form_comment']) ) {
              echo 'We are sorry, but there appears to be a problem with the form you submitted.';
          }

          $form_name = $_POST['form_name'];  // required
          $form_email = $_POST['form_email']; // required
          $form_number = $_POST['form_number']; // required
          $form_date =  $_POST['form_date']; // required
          $form_time = $_POST['form_time']; // required
          $form_comment = $_POST['form_comment'];


          $error_message = "";
          $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            if(!preg_match($email_exp,$form_email)) {
              $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
            }

              $string_exp = "/^[A-Za-z .'-]+$/";

            if(!preg_match($string_exp,$form_name)) {
              $error_message .= 'The Name you entered does not appear to be valid.<br />';
            }



            if(strlen($form_comment) < 2) {
              $error_message .= 'The Comments you entered is too short.<br />';
            }

            if(strlen($error_message) > 0) {
              died($error_message);
            }

              $email_message = "Form details below.\n\n";


              function clean_string($string) {
                $bad = array("content-type","bcc:","to:","cc:","href");
                return str_replace($bad,"",$string);
              }


              $email_message .= "Name: ".clean_string($form_name)."\n";
              $email_message .= "Email: ".clean_string($form_email)."\n";
              $email_message .= "Telephone: ".clean_string($form_number)."\n";
              $email_message .= "Date: ".clean_string($form_date)."\n";
              $email_message .= "Time: ".clean_string($form_time)."\n";
              $email_message .= "Comments: ".clean_string($form_comment)."\n";

          // create email headers
          $headers = 'From: '.$form_email."\r\n".
          'Reply-To: '.$form_email."\r\n" .
          'X-Mailer: PHP/' . phpversion();

          if (strlen($error_message) == 0) {
              // header ("Location:contact.html") ;
        mail($email_to, $email_subject, $email_message, $headers);
              echo "Thank you for contacting us. ";
          } else {
              echo "$error_full";
          }
          ?>

          <!-- include your own success html here -->


          <?php
          }
          ?>

    </div>

    </div>





    <section class="pattern">
    <picture>
      <source media="(min-width: 768px)" srcset="images/front-window-pattern-Web-final.png">
      <img src="images/front-window-halfline.png" alt="design pattern">
    </picture>
    </section>
    </main>

    <footer class="inner">
      <p>&copy; Bao Bar, 2017</p>
      <div class="row text-center address-bar">

        <div class="col-sm-4">
        <div class="information">
          <h4>Location</h4>
          <p>111a Riccarton Road </p>
          <p>Chritchurch 8041 </p>
        </div>
        <div id="map">

          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.6806829359434!2d172.59790831639907!3d-43.529851089836875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318af47e43fbc3%3A0x68357c4a63416248!2sBao+Bar!5e0!3m2!1sen!2snz!4v1493284234838" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.7399040776495!2d-6.261147484122739!3d53.34791197997939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sus!4v1462581622087" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        </div>
        </div>

        <div class=" col-sm-4  location">

          <div class="information open-time">
            <h4>Opening Hours</h4>
            <p>7 Days 10AM - Late</p>
          </div>


          <div class="information">
            <h4>Contact Us</h4>
            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Phone: 03 343 5588</p>
            <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email: <a href="mailto:info@baobar.co.nz">info@baobar.co.nz</a> </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="social-media information">
            <h4>Social Media</h4>

            <a href="mailto:info@baobar.co.nz"> <img src="images/socia media/emailnew2.png" alt="email"></a>

            <a href="https://www.instagram.com/baobar_chch/" target="_blank"><img src="images/socia media/instagram.png" alt="instagram"></a>
            <a href="https://www.instagram.com/baobar_chch/" target="_blank"><img src="images/socia media/Twitter-Logo.png" alt="twitter"></a>
            <a href="https://www.facebook.com/BaoBarChch/" target="_blank"><img src="images/socia media/fb_icon_325x325.png" alt="facebook"></a>
          </div>

          <div class="tripadvisor">
          <a href="https://www.tripadvisor.co.nz/Restaurant_Review-g255118-d12230838-Reviews-Bao_Bar-Christchurch_Canterbury_Region_South_Island.html"> <img src="images/socia media/tripadvisor.png" alt="tripadvisor"></a>

          </div>

        </div>


      </div>

      </footer>


    <script src="js/map.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRjTg9zqspinCIEnqIOkJeQWVX01HQ9J4&callback=initMap">
    </script>

    <script src="js/scripts.js"></script>


    </body>
    </html>
