@extends('layouts.app')

@section('content')

<div>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#facts"><i class="bx bx-wallet"></i> <span>Facts</span></a></li>
        <li><a href="#skills"><i class="bx bx-book-content"></i> <span>Skill</span></a></li>
        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <!-- <li><a href="#services"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
        <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Sagar Choudhary</h1>
      <p>I'm <span class="typed" data-typed-items="Full Stack Developer, Yii Developer, Freelancer, Athlete, Gym Lover"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>I am always energetic and eager to learn new skills.From past decent year i am working as full stack software developer to provide technical support in business growth of vibrant organizations.i have some experience in mobile app development as well as some exprience in JavaSE and JavaME.i personally like to work in Data Structure and DataBase.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{ asset('img/profile-img.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class="font-italic">
              I am a highly skilled PHP Developer with Arround 4 years of experience programming for a multitude of different digital projects in Various PHP framwork(Yii1.1,Yii2,Cake,Laravel). I am very friendly and am an enthusiastic team player who enjoys challenging projects.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 4 September 1995</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> <a href="http://sagarchoudhary.com/">Sagar</a> </li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +91 6350 185 799</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : Jaipur, Rajasthan India</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 25</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> B-Tech(C.S) [honours]</li>
                  <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> sagarjat4121@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
            <p>
              In PHP + Yii2 + Mysql + angular + react JS i have created Completly Warehouseing System, Picking System, Delivery System Of Dealshare. Operator of an online buying platform created to purchase consumer products. The company's platform offers cheaper rates than wholesale and makes buying easy with just a couple of clicks on its application, thereby enabling its customers to find the best deals for daily use items.Jaipur-based startup DealShare is a social commerce-based deals platform, which provides discounts on grocery and other daily use items on its app. It has raised $3.4 million from Matrix Partners and other investors in just 1.5 years.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>i have also created one project for rajasthan government name as ebazaar to maintain the supply chain between the suppliers and consumer.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">3</span>
              <p>Happy Served Organization</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">10</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-ui-office"></i>
              <span data-toggle="counter-up">4</span>
              <p>Year Of Exprience</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">1</span>
              <p>Team Size</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>  It´s better to wait for a productive programmer to become available than it is to wait for the first available programmer to become productive. Debugging is twice as hard as writing the code in the first place.Therfore, if you write the code as cleverly as possible, you are, by definition, not smart enough to debug it. </p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">SQL <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">C <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">JavaSE <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">JavaEE <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">CSS <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">AWS EC2/S3/Route-53 Bucket <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Yii1.1/Yii2 <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">GIT <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Cake <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Laravel <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Android <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Angular <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>To secure a challenging position in a reputable organization to expand my learnings, knowledge, and skills and Secure a responsible career opportunity to fully utilize my training and skills, while making a significant contribution to the success of the company.</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="resume-title">Sumary</h3>
                <div class="resume-item pb-0">
                    <h4>Sagar Choudhary</h4>
                    <p><em>Innovative and deadline-driven Sr. Software Developer with 3+ years of experience. designing and developing user-centered software from initial concept to final, polished deliverable.</em></p>
                    <ul>
                        <li>Pink City, Jaipur, Rajsthan </li>
                        <li>(+91) 6350185799</li>
                        <li>sagarjat4121@gmail.com</li>
                    </ul>
                </div>

                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                    <h4>Bachelor of &amp; computer science </h4>
                    <h5>2014 - 2018</h5>
                    <p><em>Rajasthan Technical University, Rawatbhata Road, Kota</em></p>
                    <p>Successfully completed, B-tech from Swami Keshvanand Institute of Technology Management & Gramothan jaipur with Honours(73%)</p>
                </div>
                <div class="resume-item">
                    <h4>BOARD OF Sr. SECONDARY EDUCATION RAJASTHAN, AJMER</h4>
                    <h5>2012 - 2013</h5>
                    <p><em>N K Public School - E/M Murlipura, Jaipur, Rajasthan</em></p>
                    <p>Successfully Completed, Sr. SECONDARY EDUCATION in the Physics Chemistry Maths Stream. (70%)</p>
                </div>
                <div class="resume-item">
                    <h4>BOARD OF SECONDARY EDUCATION RAJASTHAN, AJMER</h4>
                    <h5>2010 - 2011</h5>
                    <p><em>New Bright Future Academy, Jaipur, Rajasthan</em></p>
                    <p>Successfully Completed, SECONDARY EDUCATION in the All Genral Subjects. (67%)</p>
                </div>
                <div class="resume-item">
                    <h4>BOARD OF 8th Examination RAJASTHAN, AJMER</h4>
                    <h5>2008 - 2009</h5>
                    <p><em>B.S.J.S.M, Jaipur, Rajasthan</em></p>
                    <p>Successfully Completed, 8th EDUCATION in the All Genral Subjects. (74%)</p>
                </div>

                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                    <h4>Senior Software Developer</h4>
                    <h5>2019 - Present</h5>
                    <p><em>Organization Name: DealShare </em></p>
                    <b>1) Project Name: Rajasthan Govt Supply Chain Maintain</b>
                    <ul>
                        <li>Technology Name: Yii2.0, PHP7.3, Mysql,Angular,HTML5, CSS,JavaScript, Jquery</li>
                        <li>Duration: Nov-2019 - Present</li>
                        <li>Team-size: 3 members</li>
                        <li>Description:</li>
                        <p>this project is used maintain the disturbed supply chain in rajasthan between distributor and kerana
                            stores where kerana can orders required food from distributor panel.</p>
                        <li>Role:</li>
                        <p>My role to create whole project logic and its apis.</p>
                    </ul>
                    <b>2) Project Name: Delivery App</b>
                    <ul>
                        <li>Technology Name: Yii2.0, PHP7.3, Mysql,React Native</li>
                        <li>Duration: Nov-2019 - Present</li>
                        <li>Team-size: 2 members</li>
                        <li>Description:</li>
                        <p>this project is used to delivery orders to the customers door & delivery boys collect payments via the QR code and Also change pal of customer Accordingly</p>
                        <li>Role:</li>
                        <p>My role to create whole project logic and its apis.</p>
                    </ul>
                </div>


            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                <b>3) Project Name: IMS(Inventory Management System)</b>
                <ul>
                    <li>Technology Name: Yii2.0, PHP7.3, Mysql,Angular,HTML5, CSS,JavaScript, Jquery</li>
                    <li>Duration: Nov-2019 - Present</li>
                    <li>Team-size: 3 members</li>
                    <li>Description:</li>
                    <p>this project is backbone of DealShare it is used to manage inventory for all warehouse. stock transfer from one warehouse to another warehouse </p>
                    <li>Role:</li>
                    <p>My role to create whole project logic and its apis.</p>
                </ul>
                <b>4) Project Name: Picker App</b>
                <ul>
                    <li>Technology Name: Yii2.0, PHP7.3, Mysql,React Native</li>
                    <li>Duration: Nov-2019 - Present</li>
                    <li>Team-size: 2 members</li>
                    <li>Description:</li>
                    <p>this project is used to manage the picking of orders and also supervisor can monitor the performance of the picker on realtime bases.</p>
                    <li>Role:</li>
                    <p>My role to create whole project logic and its apis.</p>
                </ul>
                <b>5) Project Name: Swiggy Order creation system with Dealshare</b>
                <ul>
                    <li>Technology Name: Yii2.0, PHP7.3, Mysql,Angular,HTML5, CSS,JavaScript, Jquery</li>
                    <li>Duration: Nov-2019 - Present</li>
                    <li>Team-size: 1 members</li>
                    <li>Description:</li>
                    <p>this project is used to fully orders of swiggy which is comes on swiggy app and they send invoice to us
                        and we fully that orders from over inventory.
                    <li>Role:</li>
                    <p>My role to create whole project logic and its apis.</p>
                </ul>
                <h4>Software Developer</h4>
                <h5>JAN-2018 - NOV-2019</h5>
                <p><em>Organization Name: Uxamry Pvt. ltd </em></p>
                
                <b>6) Project Name: Usability testing tool</b>
                <ul>
                    <li>Technology Name: Yii1.0, PHP5.7, Mysql,HTML5, CSS3,JavaScript, Jquery</li>
                    <li>Duration: JAN-2018 - NOV-2019</li>
                    <li>Team-size: 2 members</li>
                    <li>Description:</li>
                    <p>this project is used testing for large scale project in automation and generate a fully analyzed report of no
                        of click and hover and heatmap .</p>
                    <li>Role:</li>
                    <p>My role to create whole project logic and its apis Developed and create for task creation and report generation.</p>
                </ul>
                <h4>Intern Software developer</h4>
                <h5>JAN-2018 - NOV-2019</h5>
                <p><em>Organization Name: Web Mitra. jodhpure, rajasthan </em></p>
                <b>6) Project Name: Online Test Portal</b>
                <ul>
                    <li>Technology Name:J2EE,jdbc,html,css</li>
                    <li>Duration: Nov. 2017 – Feb. 2018</li>
                    <li>Team-size: 1 members</li>
                    <li>Description:</li>
                    <p>his project is used to create online examination system in advanced java. .</p>
                    <li>Role:</li>
                    <p>My role to create whole project logic and its apis Developed and create for task creation</p>
                </ul>
                </div>
            </div>
        </div>

      </div>
    </section><!-- End Resume Section -->


    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3></h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section>
    End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>pink city jaipur rajasthan</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>sagarjat4121@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 6350185799</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="/sendEmail" method="post" role="form" class="php-email-form">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Sagar Choudhary</h3>
      <p>What you do makes a difference, and you have to decide what kind of difference you want to make.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>SagarResume</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  

</div>

@stop
