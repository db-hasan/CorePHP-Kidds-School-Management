<?php
  require_once('functions/manage.php');
  get_header();
?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs">
              <span class="mr-2">
                <a href="index-2.html">Home <i class="ion-ios-arrow-forward"></i>
                </a>
              </span>
              <span>Contact <i class="ion-ios-arrow-forward"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
              <h3 class="mb-4">Address</h3>
              <p>198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
              <h3 class="mb-4">Contact Number</h3>
              <p>
                <a href="tel://1234567920">+ 1235 2355 98</a>
              </p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
              <h3 class="mb-4">Email Address</h3>
              <p>
                <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#c2abaca4ad82bbadb7b0b1abb6a7eca1adaf">
                  <span class="__cf_email__" data-cfemail="345d5a525b744d5b4146475d40511a575b59">[email&#160;protected]</span>
                </a>
              </p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
              <h3 class="mb-4">Website</h3>
              <p>
                <a href="#">yoursite.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
      <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
          <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
            <?php
              if(isset($_POST['submit'])){
                $name=htmlentities($_POST['name'],ENT_QUOTES);
                $phone=$_POST['phone'];
                $email=$_POST['email'];
                $subject=$_POST['subject'];
                $message=$_POST['message'];

                $msg='Name: '.$name.'\n'.'Phone: '.$phone.'\n'.'Email: '.$email.'\n'.'Subject: '.$subject.'\n'.'Message: '.$message;

                $insert="INSERT INTO contact(con_name,con_phone,con_email,con_subject,con_message)
                VALUES('$name','$phone','$email','$subject','$message')";

                if(!empty($name)){
                  if(mysqli_query($con,$insert)){
                    mail("rakib@gmail.com","Website Contact Message",$msg);
                    echo "Successfully send your message.";
                  }else{
                    echo "Opps! message send failed.";
                  }
                }else{
                  echo "Please enter your name.";
                }
              }
            ?>
            <form method="post" action="#">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Your Phone">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>
<?php
  get_footer();
?>
