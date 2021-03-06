<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">

    <meta name ="viewport" content="width=device-width, initial-scale=1.0">

    <link rel ="stylesheet" type= "text/css" href="resources/css-sass/styles.css">

    <link rel ="stylesheet" type= "text/css" href="resources/css-sass/queries.css">

    <link rel ="stylesheet" type = "text/css" href ="vendors/css/normalize.css">

    <link rel ="stylesheet" type = "text/css" href ="vendors/css/custom-grid.css">

    <link rel ="stylesheet" type="text/css" href="vendors/css/animate.css">

    <link rel ="stylesheet" type="text/css" href="vendors/css/hover.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500" rel="stylesheet">

    <link rel ="stylesheet" type = "text/css" href ="vendors/css/ionicons.min.css">

    <link href="https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css" rel="stylesheet">

    <link href="https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css" rel="stylesheet">


  </head>

  <title>Brandon Portfolio</title>


  <body>

    <div class="header-section js--head-sec">
      <ul class="header-section-ul js--nav-bar">
        <li><a href="#section1">About</a></li>
        <li><a href="#section2">Portfolio</a></li>
        <li><a href="#section3">Blog</a></li>
        <li><a href="#section4">Conact</a></li>
      </ul>
      <a class="navi-btn js--nav-icon"><i class="ion-navicon-round"></i></a>
      <div class="header-phone">
          <p>(323) 329-7702</p>
      </div>
    </div>

    <a href="#top">
      <div class="scroll-to-top">
        <p>Top</p>
      </div>
    </a>

    <div class="clearfix"></div>

    <div id="top" class="welcome-section">
    <div class="welcome-left">

      <div class="welcome-left-box">
        <div class="welcome-left-box-text js--wp-1">
            <p class="main-heading-text">Welcome</p>
        </div>
        <div class="welcome-body-section">
            <div class="welcome-body-main-img js--wp-2">
              <img src="resources/img/psi/home_profile_photo2.png" />
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="welcome-cta-heading js--wp-3">
          <p>My name is Brandon and I build cool things for the internet.</p>
        </div>

        <div class="welcome-cta-box js--wp-3">
          <a href="#section2" style="color: none">
          <p class="welcome-cta-text">
            Visit Portfolio
          </p>
        </a>
        </div>
      </div>
    </div>

    <div class="welcome-right">  
      <div class="welcome-right-top">
        <div class="col span-1-of-2 welcome-box-1 js--wp-4">
          <a href="#section2">
            <div class="welcome-inside-box">
                <p class="welcome-inside-head">Portfolio</p>
                <img class="welcome-icons js--wp-5" src="resources/img/icons/welcome-icon-1.png">
                <p class="welcome-inside-text">My Work</p>
            </div>
          </a>
        </div>
        <div class="col span-1-of-2 welcome-box-2 js--wp-6">
          <a href="#section3">
            <div class="welcome-inside-box">
                  <p class="welcome-inside-head">Blog</p>
                  <img class="welcome-icons js--wp-7" src="resources/img/icons/welcome-icon-2.png">
                  <p class="welcome-inside-text">My Thoughts</p>
            </div>
          </a>
        </div>
      </div>
      <div class="welcome-right-bottom">
          <div class="col span-1-of-2 welcome-box-3 js--wp-8">
            <a href="#section1">
              <div class="welcome-inside-box">
                  <p class="welcome-inside-head">About</p>
                  <img class="welcome-icons js--wp-9" src="resources/img/icons/welcome-icon-3.png">
                  <p class="welcome-inside-text">Learn About Me</p>
              </div>
            </a>
          </div>
          <div class="col span-1-of-2 welcome-box-4 js--wp-10">
            <a href="#section4">
              <div class="welcome-inside-box">
                  <p class="welcome-inside-head">Contact</p>
                  <img class="welcome-icons js--wp-11" src="resources/img/icons/welcome-icon-4.png">
                  <p class="welcome-inside-text">I'd Be Glad To Hear From You</p>
              </div>
            </a>
          </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div id="section1" class="about-section js--sticky-section">
    <div class="about-title js--wp-12">
      <p class="main-heading-text">About</p>
    </div>

    <div class="about-section-content">
      <div class="about-section-highlights-section">
        <div class="ash-icons-section">
          <div class="ash-i-1">
            <div class="ash-diamond">
              <div class="ash-d-icon">
                <img src="resources/img/icons/skill-icon1.png" />
              </div>
            </div>
            <div class="ash-d-text">
                <div class="ash-dt-head">
                  <p>Fast</p>
                </div>
                <div class="ash-dt-body">
                  <p>Not only do I get the projcet done fast, but I make sure it loads fast for others as well.</p>
                </div>
              </div>
          </div>

          <div class="ash-i-1">
            <div class="ash-diamond">
              <div class="ash-d-icon">
                <img src="resources/img/icons/skill-icon2.png" />
              </div>
            </div>
            <div class="ash-d-text">
                <div class="ash-dt-head">
                  <p>Responsive</p>
                </div>
                <div class="ash-dt-body">
                  <p>My layouts work on all devices from desktops to mobile phones.</p>
                </div>
              </div>
          </div>

          <div id="diamond-clearfix" class="clearfix"></div>

          <div class="ash-i-2">
            <div class="ash-diamond">
              <div class="ash-d-icon">
                <img src="resources/img/icons/skill-icon3.png" />
              </div>
            </div>
            <div class="ash-d-text">
                <div class="ash-dt-head">
                  <p>Creative</p>
                </div>
                <div class="ash-dt-body">
                  <p>Out of the box ideas to produce custom and easy to use UI/UX.</p>
                </div>
              </div>
          </div>

          <div class="ash-i-2">
            <div class="ash-diamond">
              <div class="ash-d-icon">
                <img src="resources/img/icons/skill-icon4.png" />
              </div>
            </div>
            <div class="ash-d-text">
                <div class="ash-dt-head">
                  <p>Perfectionist</p>
                </div>
                <div class="ash-dt-body">
                  <p>I'm not perfect, but I make sure my layouts are bug-free and run perfectly.</p>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div id="js-13" class="about-section-left js--wp-13">
        <div class="as-left-img">
          <img src="resources/img/psi/octo_img.jpg" />
        </div>
        <div class="as-left-text">
            <div class="as-left-heading">
              <p>Who Am I?</p>
            </div>
            <div class="as-left-body">
              <p>I'm Brandon and I am a freelance web developer specializing in the front end. I like to design beautiful web pages and then make them come to life. Contact me and let's create something special!</p>
            </div>
        </div>
      </div>
      <div class="about-section-right js--wp-14">
        <div class="as-skills-bar-section">
          <div class="skills-bar-bar">

            <div class="skills-bb1-1">
              <p>HTML</p>
            </div>
            <div class="skills-bb1-2">
              <p>S</p>
            </div>
            <div class="skills-bb1-3">
              <p>80%</p>
            </div>
          </div>

          <div class="skills-bar-bar">
            <div class="skills-bb2-1">
              <p>CSS</p>
            </div>
            <div class="skills-bb2-2">
              <p>S</p>
            </div>
            <div class="skills-bb2-3">
              <p>70%</p>
            </div>
          </div>

          <div class="skills-bar-bar">
            <div class="skills-bb3-1">
              <p>JQuery</p>
            </div>
            <div class="skills-bb3-2">
              <p>S</p>
            </div>
            <div class="skills-bb3-3">
              <p>60%</p>
            </div>
          </div>

          <div class="skills-bar-bar">
            <div class="skills-bb4-1">
              <p>Javascript</p>
            </div>
            <div class="skills-bb4-2">
              <p>S</p>
            </div>
            <div class="skills-bb4-3">
              <p>60%</p>
            </div>
          </div>

          <div class="skills-bar-bar">
            <div class="skills-bb5-1">
              <p>ReactJS</p>
            </div>
            <div class="skills-bb5-2">
              <p>S</p>
            </div>
            <div class="skills-bb5-3">
              <p>60%</p>
            </div>
          </div>

          <div class="skills-bar-bar">
            <div class="skills-bb6-1">
              <p>NodeJS</p>
            </div>
            <div class="skills-bb6-2">
              <p>S</p>
            </div>
            <div class="skills-bb6-3">
              <p>40%</p>
            </div>
          </div>

          <div class="skills-bar-bar">
            <div class="skills-bb7-1">
              <p>MongoDB</p>
            </div>
            <div class="skills-bb7-2">
              <p>S</p>
            </div>
            <div class="skills-bb7-3">
              <p>50%</p>
            </div>
          </div>

          <div class="skills-bar-bar">
            <div class="skills-bb8-1">
              <p>PHP</p>
            </div>
            <div class="skills-bb8-2">
              <p>S</p>
            </div>
            <div class="skills-bb8-3">
              <p>50%</p>
            </div>
          </div>

          <div class="skills-bar-bar">
            <div class="skills-bb9-1">
              <p>Swift</p>
            </div>
            <div class="skills-bb9-2">
              <p>S</p>
            </div>
            <div class="skills-bb9-3">
              <p>70%</p>
            </div>
          </div>

          <div class="skills-bar-bar">
            <div class="skills-bb10-1">
              <p>UI/UX Design</p>
            </div>
            <div class="skills-bb10-2">
              <p>S</p>
            </div>
            <div class="skills-bb10-3">
              <p>60%</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="skills-section">
      <div class="programming-skills col span-1-of-3 js--wp-skills-1">
        <div class="ps-title">
          <p>Programming Skills</p>
        </div>
        <div class="ps-ul-l">
          <ul class="ps-ul-l-ul">
            <li>HTML/CSS</li>
            <li>JQuery</li>
            <li>Javascript</li>
            <li>ReactJS</li>
            <li>NodeJS</li>
            <li>MongoDB</li>
            <li>PHP</li>
            <li>MySQL</li>
          </ul>
          <ul class="ps-ul-r-ul">
            <li>Swift</li>
            <li>SASS</li>
            <li>WordPress</li>
            <li>Bootstrap</li>
            <li>Firebase</li>
            <li>Responsive Design</li>
            <li>Prototype Creation</li>
            <li>Web Animations</li>
          </ul>
        </div>
      </div>

      <div class="other-skills col span-1-of-3 js--wp-skills-2">
          <div class="os-title">
            <p>Other Skills</p>
          </div>
          <div class="ps-ul-l">
            <ul class="os-ul">
              <li>UI/UX Design</li>
              <li>SEO</li>
              <li>Photography</li>
              <li>Digtial Marketing</li>
              <li>Content Marketing</li>
              <li>Online PPC Ads</li>
              <li>Consulting</li>
            </ul>
          </div>
      </div>

      <div class="tools-skills col span-1-of-3 js--wp-skills-3">
          <div class="ts-title">
            <p>Tools</p>
          </div>
          <div class="ps-ul-l">
            <ul class="os-ul">
              <li>VSCode</li>
              <li>XCode</li>
              <li>AdobeXD</li>
              <li>Sketch</li>
              <li>Photoshop</li>
              <li>Invision</li>
              <li>GitHub</li>
            </ul>
          </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div id="section2" class="portfolio-section">
    <div class="portfolio-title js--wp-15">
      <p class="main-heading-text">Portfolio</p>
    </div>

    <div class="portfolio-cell-section">
      <div id="portfolio-popup" class= "popup-no-display">
        <div class="popup-colored-container">
            <div class="popup-img-container">
              <img id="pc-bg" src="resources/img/psi/pc1-h.jpg" />
            </div>
            <div class="popup-img-bar"></div>

            <div class="popup-info-container">
              <div class="popup-ic-left">
                <div class="popup-left-content">
                  <div class="popup-left-heading">
                    <p id="pc-heading">Main Heading</p>
                  </div>
                    <div class="popup-left-bar"></div>
                    <div class="popup-left-body">
                      <p id="pc-body">Quisque eu nibh auctor, pellentesque felis id, egestas tortor. Quisque in nibh sem. Integer consectetur ornare velit, fermentum efficitur mauris elementum id. Maecenas a velit sed felis commodo dictum ut ac libero. Quisque non pulvinar lacus, vitae facilisis elit. Morbi eu interdum purus. Quisque in erat posuere, venenatis nisi at, posuere lacus. </p>
                    </div>
                    <div class="popup-left-cta">
                      <div id="pc-link" class="popup-left-cta-btn">
                        <p>View Site</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="popup-ic-right">
                <div class="popup-right-image">
                  <img id="pc-img" src="resources/img/icons/projects-icon-1.png" />
                </div>
                <div class="popup-right-title">
                  <p id="pc-industry">Business Industry</p>
                </div>
              </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="popup-transparent-container">
          <div id="popup-close" class="popup-close-img">
              <img src="resources/img/icons/cancel-icon.png" />
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="portfolio-cell-row" id="pc-row1">
        <div id="test-popup" class="portfolio-cell-1 js--wp-16 pcell-l">
          <div id="pc1-bg-img" class="portfolio-cell-wrapper hvr-shutter-in-vertical" onclick="">
            <div class="pc-title">
              <p>Pig Game</p>
            </div>
            <div class="pc-description">
              <p>Website that allows people play against each other in a probablity game.</p>
            </div>
            <div class="pc-learn-more">
              <div id="p-cell1" class="pc-lm-box pc-popup">
                <p>Learn More</p>
              </div>
            </div>
          </div>
        </div>

        <div class="portfolio-cell-2 js--wp-17 pcell-r">
            <div id="pc2-bg-img" class="portfolio-cell-wrapper hvr-shutter-in-vertical" onclick="">
              <div class="pc-title">
                <p>PlantSpot</p>
              </div>
              <div class="pc-description">
                <p>Website for a company that sells plants.</p>
              </div>
              <div class="pc-learn-more">
                <div id="p-cell2" class="pc-lm-box pc-popup">
                  <p>Learn More</p>
                </div>
              </div>
            </div>
          </div>

          <div class="portfolio-cell-2 js--wp-18 pcell-l">
              <div id="pc3-bg-img" class="portfolio-cell-wrapper hvr-shutter-in-vertical" onclick="">
                <div class="pc-title">
                  <p>LeadPalace</p>
                </div>
                <div class="pc-description">
                  <p>Website for digital agency that focuses on helping real estate agents grow online.</p>
                </div>
                <div class="pc-learn-more">
                  <div id="p-cell3" class="pc-lm-box pc-popup">
                    <p>Learn More</p>
                  </div>
                </div>
              </div>
          </div>
      </div>

      <div class="portfolio-cell-row" id="pc-row2">
          <div class="portfolio-cell-1 js--wp-16 pcell-r">
              <div id="pc4-bg-img" class="portfolio-cell-wrapper hvr-shutter-in-vertical" onclick="">
                <div class="pc-title">
                  <p>Omnifood</p>
                </div>
                <div class="pc-description">
                  <p>Website for a company that offers ordering and delivery of food.</p>
                </div>
                <div class="pc-learn-more">
                  <div id="p-cell4" class="pc-lm-box pc-popup">
                    <p>Learn More</p>
                  </div>
                </div>
            </div>
          </div>
  
          <div class="portfolio-cell-2  js--wp-17 pcell-l">
            <div id="pc5-bg-img"  class="portfolio-cell-wrapper hvr-shutter-in-vertical" onclick="">
                <div class="pc-title">
                  <p>CAMP</p>
                </div>
                <div class="pc-description">
                  <p>Website for a life coaching community group.</p>
                </div>
                <div class="pc-learn-more">
                  <div id="p-cell5" class="pc-lm-box pc-popup">
                    <p>Learn More</p>
                  </div>
                </div>
              </div>
          </div>
  
          <div class="portfolio-cell-2  js--wp-18 pcell-r">
              <div id="pc6-bg-img"  class="portfolio-cell-wrapper hvr-shutter-in-vertical" onclick="">
                <div class="pc-title">
                  <p>Cleveland Accounting Services</p>
                </div>
                <div class="pc-description">
                  <p>Website for a business offering accounting services.</p>
                </div>
                <div class="pc-learn-more">
                  <div id="p-cell6" class="pc-lm-box pc-popup">
                    <p>Learn More</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div id="section3" class="blog-section">
    <div class="blog-title js--wp-19">
      <p class="main-heading-text">Blog</p>
    </div>

    <div class="blog-cell-section js--wp-20">
      <div class="blog-cell-1">
        <div class="blog-cell-container">
          <div class="bc-img">
            <img class="bc-img-img" src="resources/img/psi/blog1.jpg" alt="picture of old books" />
          </div>
          <div class="bc-content-box js--wp-21">
            <div class="bc-heading">
              <p>5 Tools Every Developer Can Benefit From</p>
            </div>
            <div class="bc-date">
              <p>5/8/2019</p>
            </div>
            <div id="blog1V" class="bc-cta">
              <p>View Post</p>
            </div>
        </div>
        </div>
      </div>
      <div class="blog-cell-2">
        <div class="blog-cell-container delayed-cell-2">
          <div class="bc-img">
            <img class="bc-img-img delayed-cell-2" src="resources/img/psi/blog2.jpg" alt="picture of laptop and post it notes." />
          </div>
          <div class="bc-content-box js--wp-22">
            <div class="bc-heading">
              <p>5 Things That Should Be On EVERY Real Estate Agent???s Website</p>
            </div>
            <div class="bc-date">
              <p>5/21/2019</p>
            </div>
            <div id="blog2V" class="bc-cta">
              <p>View Post</p>
            </div>
        </div>
        </div>
      </div>

      <div class="blog-cell-2">
        <div class="blog-cell-container delayed-cell-1">
          <div class="bc-img">
            <img class="bc-img-img delayed-cell-1" src="resources/img/psi/blog3.jpg" alt="Picture of laptop and hour glass." />
          </div>
          <div class="bc-content-box js--wp-23">
            <div class="bc-heading">
              <p>7 Easy Tips To Instantly Increase Your Productivity</p>
            </div>
            <div class="bc-date">
              <p>5/29/2019</p>
            </div>
            <div id="blog3V" class="bc-cta">
              <p>View Post</p>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>


  <?php


$error = "";
$successMessage = "";

if ($_POST) {


  if (!$_POST["name"]) {
    $error .="A name is required.<br>";
  }


  if (!$_POST["email"]) {
    $error .="An email is required.<br>";
  }

  if (!$_POST["subject"]) {
    $error .="A subject field is required.<br>";
  }

  if (!$_POST["content"]) {
    $error .="A content field is required.<br>";
  }

  if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
    $error .= "The email adress is invalid.<br>";

  }

  if ($error != "") {
    $error = '<div class="alert alert-danger" role="alert"><p>Sorry, there were error(s) with this submission.</p>' . $error . '</div>';
  }

  else {
    $emailTo = "brandonArt444@gmail.com";
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $name = $_POST['name'];
    $headers = "From: ".$_POST['email'];


    $message = "Form details below.\n\n";

    $message .= "Name: ".$name."\n";
    $message .= "Content: ".$content."\n";

    if (mail($emailTo, $subject, $message, $headers)) {
      $successMessage = '<div class="alert alert-success" role="alert"><p>Your message was sent successfully. Happy to hear from you!</p></div>';

    } else {
      $error = "We're sorry, but the message was not sent successfully. Please try again.";
    }
  }
}

?>





  <div id="section4" class="contact-section">
    <div class="contact-section-heading">
      <p class="main-heading-text">Contact</p>
    </div>

    <div class="contact-left">
      <div class="contact-left-title">
        <p>I'd Be Glad To Hear From You.</p>
      </div>

      <div class="cl-cells">
        <div class="cl-cell1 css--h-1">
          <div class="cl-cell-container">
            <div class="cl-cell-img">
                <img src="resources/img/icons/welcome-icon-4.png" />
            </div>
            <div class="cl-cell-desc">
              <p>(323) 329-7702</p>
            </div>
        </div>
          <div class="cl-cell-bar hvr-underline-from-center"></div>
        </div>
        <div class="cl-cell css--h-2">
            <div class="cl-cell-container">
              <div class="cl-cell-img">
                  <img src="resources/img/icons/welcome-icon-5.png" />
              </div>
              <div class="cl-cell-desc">
                <p>brandonrz97@gmail.com</p>
              </div>
            </div>
          <div class="cl-cell-bar hvr-underline-from-left"></div>
        </div>
        
        <div class="cl-cell css--h-3">
            <div class="cl-cell-container">
              <div class="cl-cell-img">
                  <img src="resources/img/icons/welcome-icon-6.png" />
              </div>
              <div class="cl-cell-desc">
                <p>@brandonrz97</p>
              </div>
            </div>
            <div class="cl-cell-bar hvr-underline-from-right"></div>
        </div>



      </div>
    </div>

    <div id="formID" class="contact-right">

      <div class="contact-form-box">
          <div class="contact-form-head">
              <p>Have A Question Or Interested In Working Together?</p>
          </div>
        <div class="contact-form-section">
            <div class="contact-form">
                <div id="error"><? echo $error.$successMessage; ?></div>
                <form method="post" action="index.php#formID">
                  <div class="contact-name">
                      <input type="text" name="name" id="name" placeholder="Name"/>
                  </div>
                  <div class="contact-email">
                      <input type="email" name="email" id="email" placeholder="Email" />
                  </div>
                  <div class="contact-subject">
                      <input type="text" name="subject" id="subject" placeholder="Subject"/>
                  </div>
                  <div class="contact-message">
                      <textarea type="text" name="content" id="content" placeholder="Message"></textarea>
                  </div>
                  <div class="contact-submit-btn">
                    <input type="submit" value="Send" />
                  </div>
                </form>  
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="footer">
    <div class="footer-social-icons">
      <div class="fs-1 hvr-float-shadow">
        <div id="fs1" class="fs-1-img">
          <img class="footer-icon" src="resources/img/icons/instagram-footer.png" />
        </div>
      </div>
      <div class="fs-2 hvr-float-shadow">
        <div id="fs2" class="fs-2-img">
          <img class="footer-icon" src="resources/img/icons/twitter-footer.png" />
        </div>
      </div>
      <div class="fs-2 hvr-float-shadow">
        <div id="fs3" class="fs-2-img">
          <img class="footer-icon" src="resources/img/icons/facebook-footer.png" />
        </div>
      </div>
      <div class="fs-2 hvr-float-shadow">
        <div id="fs4" class="fs-2-img">
          <img class="footer-icon2" src="resources/img/icons/youtube-footer.png" />
        </div>
      </div>
    </div>
    <div class="footer-bottom-text">
      <p>Brandon Art 2019</p>
    </div>
  </div>


  <!-- Javascript -->

  <script src="resources/js/main.js"></script>

  <!-- Jquery -->

  <script src="vendors/js/jquery.waypoints.min.js"></script>

  <script src="resources/js/script.js"></script>


  </body>


  </html>