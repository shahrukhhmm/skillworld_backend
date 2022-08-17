
<?php
session_start();

include "header.php"; 
?>



<!-- home section -->
<section id="home1" class="home d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column hometext justify-content-center">
          <h1 class="homeheading">
              
            SKILLWORLD<sub>Bridge the gap with world of skills</sub>
         </h1> 
          <p class="autotext" data-aos="fade-up" data-aos-delay="400">We are doing 
            <span class="auto-input
            "></span>
        </p>
          <div data-aos="fade-up" data-aos-delay="600" class="align-items-center homebtn">

            <a href="#about1" class="cta">
              <span>Learn more</span>
              <svg width="15px" height="10px" viewBox="0 0 13 10">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </a>
            
          </div>
        </div>


        <div class="col-lg-6 home-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="img/illustration/homepic.svg" class="img-fluid" alt="">
        </div>

      </div>
    </div>
    <a class="float" href="https://wa.me/923057548652" target="blank"><img style="width: 50px; height: 50px;" class="myfloat" src="img/whatsapp.png" alt=""></a>
    <?php 
      if(isset($_SESSION['status']))
      {
    ?>
    <div class="popcon " id="popcon">
        <h1 class="popup_msg">
            <?php echo $_SESSION['status']; ?>
        </h1>
        <button class="popupclose">
            OK
        </button>
    </div>
    <?php 
    unset($_SESSION['status']);
      }; 
    ?>
  </section>

  <!-- about section -->

  <br>
<br>
<br>
  <section  id="about1" class="d-flex align-items-center" >
  <br>
<br>
<br>
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <header class="section-header  text-center">
          <h2>About Us</h2>
        </header>

        <div class="col-lg-6 order-1 order-lg-0  d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="about">
           <h3>WHo we are</h3>
            <h2>  A Platform where you get variety of skill services. </h2>
            <p>
              SkillWorld is a service based online company. We have a team of experts in different skills who can serve variety of services to our customer in affordable rates. Through SkillWorld you can take first step towards your earning. It also provide chance to those who want to learn skills and make money for themselves. 

            </p>
            <h2>Growing Opportunities with SkillWorld: </h2>
            <p>
              As a member: We are not just helping our customers to get their work done. As the time is changing they ways of working are also changing. That’s why we are offering opportunities for talented and passionate people who are looking to online. If you got any skill you are most welcome to come and join team of SkillWorld and earn a good living by working at home.
            </p>
            <h2>
              As a learner: 
            </h2>
            <p>
              Don’t worry if you do not have any skill and want to be part of skillful crowd, SkillWorld can help you with this one as well. By simply registering any of our course you can learn a skill and earn money.  
            </p>
            <h2>
              People who are running company: 
            </h2>
            <p>
              <i><b>Ahmed Riaz, Sadia Attiq, Sania Attiq, Aisha Saleem, Hunza Nasir, Maryam Choudhary, Muzna Khan.</b></i>
            </p>
            
          </div>
        </div>

        <div class="col-lg-6 p-0 order-0 order-lg-1 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
          <img class="img-fluid" src="img/illustration/aboutus.svg" alt="image loading error">
      </div>

      </div>
    </div>

  </section>
  <!-- end of about -->

<!-- serices -->



<section id="services1" class="services">
<br>
<br>
<br>
  <div class="container" data-aos="fade-up">

    <header class="section-header mt-5 text-center">
      <h2>Services</h2>
    </header>

    <div class="row gy-4 mt-5 justify-content-center">
      
      <div class="col-lg-4  mt-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="cards">
              
          <div class="card-body body1">
              <div class="card-inner inner1">
                  <div class="frontside">
                  

                      <img src="img/service/graphics.svg" alt="Side-one" style="width: 200px; ">
                      <p>GRAPHICS DESIGNER</p>
                      <div class="card-text">
                        <p>CLICK ME</p>
                      </div>
                  </div>
                  <div class="backside">
                    <h1>GRAPHICS DESIGNER</h1>
                    <p>Description</p>
                      
                  </div>
              </div>
          </div>
      </div>
</div>
<div class="col-lg-4  mt-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
  <div class="cards">


    <div class="card-body body2">
        <div class="card-inner inner2">
            <div class="frontside">
               
                <img src="img/service/videoediting.svg" alt="Side-one" style=" width: 200px; ">
                <p>VIDEO EDITING</p>
                <div class="card-text">
                        <p>CLICK ME</p>
                      </div>
            </div>
            <div class="backside">
              <h1>VIDEO EDITING</h1>
              <p>Description</p>
                
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-4  mt-5  col-md-6" data-aos="fade-up" data-aos-delay="200">
  <div class="cards">


    <div class="card-body body3">
        <div class="card-inner inner3">
            <div class="frontside">
               
                <img src="img/service/website.svg" alt="Side-one" style=" width: 200px; ">
                <p>WEBSITE DESIGNING</p>
                <div class="card-text">
                        <p>CLICK ME</p>
                      </div>
            </div>
            <div class="backside">
              <h1>WEBSITE DESIGNING</h1>
              <p>Description</p>
                
            </div>
        </div>
    </div>
</div>
</div>
      

    </div>


    <div class="row gy-4 mt-5 justify-content-center">
      
    <div class="col-lg-4  mt-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="cards">


        <div class="card-body body4">
            <div class="card-inner inner4">
                <div class="frontside">
                   
                    <img src="img/service/assignmentsvg.svg" alt="Side-one" style="width: 200px; ">
                    <p>ASSIGNMENTS</p>
                    <div class="card-text">
                        <p>CLICK ME</p>
                      </div>
                </div>
                <div class="backside">
                  <h1>ASSIGNMENTS</h1>
                  <p>Description</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4  mt-5  col-md-6" data-aos="fade-up" data-aos-delay="200">
<div class="cards">


  <div class="card-body body5">
      <div class="card-inner inner5">
          <div class="frontside">
             
              <img src="img/service/social marketing.svg" alt="Side-one" style=" width: 200px; ">
              <p>SOCIAL MEDIA MARKETING</p>
              <div class="card-text">
                        <p>CLICK ME</p>
                      </div>
          </div>
          <div class="backside">
            <h1>SOCIAL MEDIA MARKETING</h1>
            <p>Description</p>
              
          </div>
      </div>
  </div>
</div>
</div>
    

  </div>
  </div>

</section>
<!-- end of services -->
<div ></div>

<section id="contact1" >
<br>
<br>
<br>
  <div class="container">
      
      <div class="contactus-heading mt-5">Contacts US</div>
      <div class="contactus row"> 
        <div class="col-lg-6">
      <div class="row justify-content-center gap-lg-5">
          <div class="col-lg-5 col-md-12 component " data-aos="fade-up" data-aos-delay="200">
            <img src="img/services/adresscontact.png" alt="Side-one" style=" width: 80px; ">
              <h1 class=" mt-3 contactus-header">
                  Our Office
              </h1>

              <p class="contactus-detail">
                  OnLine
              </p>
          </div>
          <div class="col-lg-5 col-md-12  component" data-aos="fade-up" data-aos-delay="200">
            <img src="img/services/mobilecontact.png" alt="Side-one" style=" width: 80px; ">
              <h1 class="mt-3 contactus-header">
                  Phone
              </h1>
              
              <p class="contactus-detail">
                
                03057548652
              </p>
          </div>
      </div>
      <div class="row justify-content-center gap-md-5">
          <div class="col-lg-5 col-md-12  component" data-aos="fade-up" data-aos-delay="200">
            <img src="img/services/emailcontact.png" alt="Side-one" style=" width: 80px; ">
              <h1 class="mt-5 contactus-header">
                 email
              </h1>
              <p class="text-dark">
                skillworld94@gmail.com
              </p>
          </div>
          <div class="col-lg-5 col-md-12  component" data-aos="fade-up" data-aos-delay="200">
            <img src="img/services/clockcontact.png" alt="Side-one" style=" width: 80px; ">
              <h1 class="mt-3 contactus-header">
                 hours of operation
              </h1>
              <p class="contactus-detail">
                 Monday-Saturday: 9:00am-9:00pm <br>
                 sunday:closed
              </p>
          </div>
      </div>  
  </div> 

  <!-- contact form -->
  <div class="col-lg-6 mt-5" data-aos="fade-up" data-aos-delay="200">
    <div class="container1">
      <h1 class="login-heading">SEND ORDER</h1>
      <form action="upload.php" method="POST" >
        <div class="form-control1">
          <input type="text" name="fullname" required autocomplete="off">
          <label>Full&nbsp Name</label>
        </div>
          <div class="form-control1">
              <input type="email" name="email" required autocomplete="off">
              <label>Email</label>
          </div>
          <div class="form-control1">
              <input type="tel" name="contact" required autocomplete="off">
              <label>Contact&nbspNumber</label>
          </div>
          <div class="form-control1">
            <textarea  name="message"  id="" cols="30" rows="5" required autocomplete="off"></textarea>
            <label>Message</label>
          </div>
          
          <button class="btnform">SEND ORDER</button>
          <!-- <p class="from-text">Send your order
            <a href="#">Register</a>
          </p> -->
      </form>
  </div>
  </div>

  </div>
  </div>  
</section>



<?php include "footer.php"; ?>