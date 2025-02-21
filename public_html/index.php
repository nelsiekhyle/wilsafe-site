<?php include 'sendmail.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    

     <!-- Favicon-->
     <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
<link rel="manifest" href="assets/site.webmanifest">

    <title>WilSafe Training Center</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    
    

  </head>

<body>
<div class="popup" id="popupContact">

      <div id="contactForm">
        <button id="close">&times;</button>
          <h1>Contact us</h1>
          <small>Get in touch with us now</small>
            <?php echo $alert; ?>
          <form action="" method="post">
            <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
            <input type="subject" name="number" id="subject" placeholder="Number" autocomplete="on">
            <textarea name="message" type="text" id="message" placeholder="Message" required=""></textarea>
            <input class="formBtn" type="submit" id="form-submit" name="submit" value="Send" />
            
            <input class="formBtn" type="reset" value="Clear All"/>
          </form>
      </div>
        
      
   
    </div>
 

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>wilsafe2022@gmail.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>+63 926 077 8595</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="https://www.facebook.com/WilSafe2022"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://instagram.com/wilsafe2022?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://wa.me/+639171062757"><i class="fa fa-whatsapp"></i></a></li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/navbar-logo.jpg" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="has-sub" class="active">
                          <a href="javascript:void(0)" >Home <i class="fa fa-sort-down"></i></a>
                          <ul class="sub-menu">
                              <li><a href="#top">Home</a></li>
                              <li><a href="about.php">About</a></li>
                              <li><a href="gallery/gallery.html">Gallery</a></li>
                              <li><a href="our-team.php">Our Team</a></li>
                              <li><a href="contact.php">Contact</a></li>
                          </ul>
              </li>
              <li class="has-sub">
                          <a href="javascript:void(0)">DOLE OSHC Training<i class="fa fa-sort-down"></i></a>
                          <ul class="sub-menu">
                              <li><a href="courses/bosh.html">Basic Occupational Safety and Health (SO1)</a></li>
                              <li><a href="courses/bosh2.html">Basic Occupational Safety and Health (SO2)</a></li>
                              <li><a href="courses/cosh.html">Construction Occupational Safety and Health (COSH)</a></li>
                              <li><a href="courses/lcm.html">Loss Control Management + hirac (LCM)</a></li>
                              <li><a href="courses/tot.html">Training of Trainers (TOT) </a></li>
                          </ul>
              </li>
              <li class="has-sub">
                          <a href="javascript:void(0)">International Courses <i class="fa fa-sort-down"></i></a>
                          <ul class="sub-menu">
                              <li><a href="courses/psm.html">Qualifi Level 7 int'l Dip in PSM</a></li>
                              <li><a href="courses/ohsm.html">Qualifi Level 7 int'l Dip in OHSM</a></li>
                              <li><a href="courses/esc.html">ESC's IDHSE</a></li>
                          </ul>
              </li>
              <li class="has-sub">
                          <a href="javascript:void(0)">Tesda Training & Assessment<i class="fa fa-sort-down"></i></a>
                          <ul class="sub-menu">
                              <li><a href="tesda/nc1.html">Shielded Metal Arc Welding (SMAW) NC I</a></li>
                              <li><a href="tesda/nc2.html">Shielded Metal Arc Welding (SMAW) NC II</a></li>
                          </ul>
              </li>
             
              <li class="scroll-to-section"><div class="border-first-button"><a data-bs-toggle="modal" href="#cont">Enroll Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-7 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>WilSafe Training Center</h6>
                    <h2>"<span>Education</span> is the key for <span>freedom,</span> and unlocked the <span>poverty</span> of community"</h2>
                    <p>WilSafe Training Center is ready to served and offers our Safety Training Courses in affordable costs!!</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a data-bs-toggle="modal" href="#cont">Enroll Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/sir.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div id="courses" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" >
            <h6>DOLE OSHC Training</h6>
            <h4>DOLE Accredited N0. 1030- 020823- 0161</h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a class="portfolio-link" href="gallery/img/4.jpg" target="_blank">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="gallery/img/4.jpg" alt="">
                </div>
              </div>
              </a>  
            </div>
            
           <div class="item">
              <a class="portfolio-link" href="gallery/img/5.jpg" target="_blank">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="gallery/img/5.jpg" alt="">
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a class="portfolio-link" href="gallery/img/6.jpg" target="_blank">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="gallery/img/6.jpg" alt="">
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a class="portfolio-link" href="gallery/img/7.jpg" target="_blank">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="gallery/img/7.jpg" alt="">
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a class="portfolio-link" href="gallery/img/8.jpg" target="_blank">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="gallery/img/8.jpg" alt="">
                </div>
              </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/about.JPG" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Who is <em>WilSafe Training Center</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>Wilsafe Training Center is the provider of Occupational, Health, Safety, Quality, Practical, Applied and Online Training programmers which equip you with the necessary skills and tools to develop yourself or your business. We offer a range of courses from beginner to advance as well as full packages for certifications. Wilsafe delivers these courses through our trainers using the latest knowledge and experience in their field within Philippine local and National, ensuring you recieve the best quality teaching, tailored to your needs.<span id="dots">...</span><span id="more"></br><br>
                  Initiated by a team of OSH Practitioners and Consultant experts in the field of training and development, Wilsafe will continually invest in our courses to ensure that you have the latest information and expect insight available. We make every course count for your career by making them highly relevant to today's industy. </br></br>
                  Wilsafe are committed to helping organizations create a positive working culture and supporting their professional development though a wide range of Philippine recognized qualifications.</span>
                    <button type="button" class="btn" onclick="myFunction()" id="myBtn">Read more</button></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>Accreditation</h6>
                  <h4>DOLE <em>OSHC TRAINING</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p> WilSafe Training  Center recieved our Accreditation for OSH TRAINING ORGANIZATION.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/dole.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/tesda1.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>Accreditation</h6>
                  <h4>TESDA <em>Training Center</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>December 09, 2022  WilSafe Training  Center Corp. recieved our Accreditation for Shielded Metal Arc Welding (SMAW) NC I and Shielded Metal Arc Welding (SMAW) NC II. <a href="https://www.tesda.gov.ph/Tvi/Result?SearchCourse=welding&SearchIns=wilsafe&SearchLoc=">Click here</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>Accreditation</h6>
                  <h4>TESDA <em>Assessment Center</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>December 1, 2022  WilSafe Training  Center Corp. recieved our Assessment Center Accreditation for Shielded Metal Arc Welding (SMAW) NC I and Shielded Metal Arc Welding (SMAW) NC II. <a href="https://www.tesda.gov.ph/AssessmentCenters">Click here</a></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/tesda2.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Our Services</h6>
            <h4>What Our Agency <em>Provides</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt="" title="Philippines icons created by Ruslan Babkin - Flaticon"></span>
                        National
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-02.png" alt="" title="International icons created by Freepik - Flaticon"></span>
                         International 
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-03.png" alt="" title="Course icons created by Freepik - Flaticon"></span>
                         Online Class 
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-04.png" alt="" title="Conversation icons created by Vectors Market - Flaticon"></span>
                         Face to Face 
                      </div>
                    </div>
                    
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-7 align-self-center">
                              <div class="left-text">
                                <h4>Occupational Safety and Health</h4>
                                
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Basic Occupational Safety and Health (SO1)</span> <span><i class="fa fa-check"></i> Basic Occupational Safety and Health (SO2)</span> 
                                  <span><i class="fa fa-check"></i> Construction Occupational Safety and Health (COSH)</span> <span><i class="fa fa-check"></i> Loss Control Management + hirac - Advanced Course (LCM)</span> <span><i class="fa fa-check"></i> Training of Trainers (TOT)</span></div>
                                
                                 <h4>Welding</h4>
                                
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Shielded Metal Arc Welding (SMAW) NC I </span> 
                                  <span><i class="fa fa-check"></i> Shielded Metal Arc Welding (SMAW) NC II</span></div>
                                
                              </div>
                            </div>
                            <div class="col-lg-5 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image.jpg" alt="" title="Image by aleksandarlittlewolf on Freepik">
                                <img src="assets/images/welding.jpg" alt="" title="Image by Freepik">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>International Courses</h4>
                                
                                <div class="ticks-list"><span><i class="fa fa-check"></i>European Safety Council's International Diploma in Health and Safety Engineering Endorsed by Qualifi</span> <span><i class="fa fa-check"></i> Qualifi Level 7 International Diploma in Process Safety Management</span> <span><i class="fa fa-check"></i>Qualifi Level 7 International Diploma in Occupational Health and Safety Management</span>
                                </div>
                              
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-02.jpg" alt="" title="Image by prostooleh on Freepik">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Online Class</h4>
                                
                                <div class="ticks-list"><span><i class="fa fa-check"></i>Certification of Completion</span> <br><span><i class="fa fa-check"></i> Free Shipping Nationwide</span><br> <span><i class="fa fa-check"></i>Free eCOPY HSE Report</span><br>
                                <span><i class="fa fa-check"></i>Free eCOPY LAW STANDARD Copy</span><br>
                                <span>Notice: For different courses there are different freebies</span>
                                </div>
                              
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-03.jpg" alt="" title="Image by tirachardz on Freepik">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Face to Face</h4>
                                
                                <div class="ticks-list"><span><i class="fa fa-check"></i>Certification of Completion</span> <br><span><i class="fa fa-check"></i> Free Lunch and Snack</span> <br><span><i class="fa fa-check"></i>Free eCOPY HSE Report</span><br>
                                <span><i class="fa fa-check"></i>Free eCOPY LAW STANDARD Copy</span><br>
                                <span>Notice: For different courses there are different freebies</span>
                                </div>
                              
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-04.jpg" alt="" title="Image by standret on Freepik">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="courses" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" >
            <h6>DOLE OSHC Training</h6>
            <h4>DOLE Accredited N0. 1030- 020823- 0161</h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a class="portfolio-link" href="courses/bosh.html">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio/1.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Basic Occupational Safety and Health<br> (SO1)</h4>
                  <span>ONLINE & FACE TO FACE</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a class="portfolio-link" href="courses/bosh2.html">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio/2.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Basic Occupational Safety and Health<br> (SO2)</h4>
                  <span>ONLINE & FACE TO FACE</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a class="portfolio-link" href="courses/cosh.html">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio/3.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Construction Occupational Safety and Health</h4>
                  <span>ONLINE & FACE TO FACE</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a class="portfolio-link" href="courses/lcm.html">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio/4.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Loss Control Management + hirac - Advanced Course</h4>
                  <span>ONLINE</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a class="portfolio-link" href="courses/tot.html">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio/5.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Training of Trainers<br>(TOT)</h4><br>
                  <span>ONLINE</span>
                </div>
              </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- International -->
  <div id="international_courses" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" >
            <h6>International Courses</h6>
            <h4>See Our International <em>Courses</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
    <div class="row">
        <div class="column">
          <div class="card">
            <a href="courses/esc.html">
            <div class="icon-wrapper">
            <img src="assets/images/esc.png" alt="">
            </div>
            <h3>ESC's IDHSE</h3>
            <p>
            European Safety Council's International Diploma in Health and Safety Engineering Endorsed by Qualifi
            </p>
            </a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <a href="courses/psm.html">
            <div class="icon-wrapper">
            <img src="assets/images/esc.png" alt="">
            </div>
            <h3>Level 7 int'l Dip in PSM</h3>
            <p>
            Qualifi Level 7 International Diploma in Process Safety Management
            </p>
            </a>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <a href="courses/ohsm.html">
            <div class="icon-wrapper">
            <img src="assets/images/esc.png" alt="">
            </div>
            <h3>Level 7 int'l Dip in OHSM</h3>
            <p>
            Qualifi Level 7 International Diploma in Occupational Health and Safety Management
            </p>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v3.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.0736058361874!2d121.285734117661!3d14.068482996446273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd43203b58649b%3A0x22d66c087bd298ba!2sLa%20Veranda%20Events%20Hall!5e0!3m2!1sen!2sph!4v1667461093942!5m2!1sen!2sph" width="100%" height="635" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#">MMBC Building 2nd Floor , Road to San Crispin Brgy. San Nicolas 4000 San Pablo City, Philippines</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#">+63 926 077 8595<br>+63 949 161 9654<br>(049) 5403516</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#">wilsafe2022@gmail.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="number" id="subject" placeholder="Number" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <?php echo $alert; ?>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button " name="submit" value="send">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>© 2022 WilSafe Training Center.</p>
        </div>
      </div>
    </div>
  </footer>


<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
      <div class="portfolio-modal modal fade" id="cont" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="close-modal" data-bs-dismiss="modal"><img src="assets/close-icon.svg" alt="Close modal" /></div>
                  <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
              </div>
              <div class="col-lg-5">
                <div id="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.0736058361874!2d121.285734117661!3d14.068482996446273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd43203b58649b%3A0x22d66c087bd298ba!2sLa%20Veranda%20Events%20Hall!5e0!3m2!1sen!2sph!4v1667461093942!5m2!1sen!2sph" width="100%" height="635" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#">MMBC Building 2nd Floor , Road to San Crispin Brgy. San Nicolas 4000 San Pablo City, Philippines</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#">+63 926 077 8595<br>+63 949 161 9654<br>(049) 5403516</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#">wilsafe2022@gmail.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="number" id="subject" placeholder="Number" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <?php echo $alert; ?>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button " name="submit" value="send">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
              </div>
          </div>
      </div>


<!--Script-->
<script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        2000 
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
    </script>






  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/tabs.js"></script>

  <script>
    function myFunction() {
var dots = document.getElementById("dots");
var moreText = document.getElementById("more");
var btnText = document.getElementById("myBtn");

if (dots.style.display === "none") {
dots.style.display = "inline";
btnText.innerHTML = "Read more"; 
moreText.style.display = "none";
} else {
dots.style.display = "none";
btnText.innerHTML = "Read less"; 
moreText.style.display = "inline";
}
}
</script>


</body>
</html>