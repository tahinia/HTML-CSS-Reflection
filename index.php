<!DOCTYPE html>
<html lang="en" id="top">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters</title>
  <link rel="shorcut icon" href="img/favicon.ico">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="scss/normalize.css">
  <link rel="stylesheet" href="scss/hamburgers.css">
  <link rel="stylesheet" href="./css/style.css">

  <!-- scripts -->
  <script src="https://kit.fontawesome.com/d9dd6a6053.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- cookie popup -->
  <div id="cookie-container">
    <div class="cookie-inner">
      <div class="popup-header">
        <h3>Cookies Policy</h3>
      </div>
      <div class="popup-body">
        <p>
          We use cookies to obtain aggregate data regarding site traffic and interaction,
          in order to identify user trends and obtain insights in order to continually
          improve our site. These cookies enable us to improve your customer experience
          as you use our site and help provide you with relevant online marketing.
        </p>
        <p>
          You can see a list of the other companies who use cookies on this website, by
          visiting cookie settings at the bottom of each page. For full details of how
          we use your personal information, and your rights in relation to it, view
          our privacy policy.
        </p>
      </div>
      <div class="popup-buttons">
        <button id="cookie-settings" class="btn button-cookie-settings">Change Settings</button>
        <button id="cookie-accept" class="btn button-cookie-accept">Accept Cookies</button>
      </div>
    </div>
  </div>

  <!-- header with icon, buttons and search bar. Sticky feature when up scrolling up-->
  <div id="main-body">


    <?php require './inc/header.php'; ?>


    <!-- hero banner with button -->

    <div class="hero-box owl-carousel owl-theme">
      <div class="hero-main">
        <div class="hero-content">
          <div class="hero-text">
            <h1 class="h1-heading">Web Design</h1>
            <p>For businesses looking to make a strong <br>
              and effective first impression.</p>
            <a class="btn btn-hero">
              <span>Find out more </span><i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>



      <div class="hero-main2">
        <div class="hero-content">
          <div class="hero-text">
            <h1 class="h1-heading">IT Support</h1>
            <p>Fast and cost-effective IT support<br>
              services for your business</p>
            <a class="btn btn-hero2">
              <span>Find out more </span><i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>



      <div class="hero-main3">
        <div class="hero-content">
          <div class="hero-text">
            <h1 class="h1-heading">
              Telecoms Services
            </h1>
            <p>A new approach to connectivity, see how <br>
              we can help your business.</p>
            <a class="btn btn-hero3">
              <span>Find out more </span><i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>



      <div class="hero-main4">
        <div class="hero-content">
          <div class="hero-text">
            <h1 class="h1-heading">
              Bespoke Software
            </h1>
            <p>Bring your business together<br>
              with solutions that grow with you.</p>
            <a class="btn btn-hero4">
              <span>Find out more </span><i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>



      <div class="hero-main5">
        <div class="hero-content">
          <div class="hero-text">
            <h1 class="h1-heading">
              Digital Marketing
            </h1>
            <p>Generating you new business through<br>
              results-driven marketing activities.</p>
            <a class="btn btn-hero5">
              <span>
                See How We Can Help You
              </span><i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>


      <div class="hero-main6">
        <div class="hero-content">
          <div class="hero-text">
            <h1 class="h1-heading">
              Cyber Security
            </h1>
            <p>Keeping businesses and their customers<br>
              sensitive information protected.</p>
            <a class="btn btn-hero6">
              <span>Find out more </span><i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>


    <!-- card section -->
    <div id="middle">
      <div class="card-row">
        <div class="card software">
          <a class="block software">
            <div class="icon">
              <i class="fas fa-th"></i>
            </div>
            <h2>Bespoke Software </h2>
            <span class="line"></span>
            <p>Tailored software solutions to improve business productivity
              and online profits.Our expert team will ensure a software solution.</p>
            <span class="btn-container">
              <span class="btn btn-software"> Read More</span>
            </span>
          </a>
        </div>
        <div class="card it">
          <a class="block it">
            <div class="icon">
              <i class="fas fa-desktop"></i>
            </div>
            <h2>IT Support</h2>
            <span class="line"></span>
            <p>
              Remotely managed IT services that is catered to your businesses needs, adds value and reduces costs.</p>
            <span class="btn-container">
              <span class="btn btn-it"> Read More</span>
            </span>
          </a>
        </div>
        <div class="card digital">
          <a class="block digital">
            <div class="icon">
              <i class="fas fa-signal"></i>
            </div>
            <h2>Digital Marketing</h2>
            <span class="line"></span>
            <p>
              Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor online
              performances.
            </p>
            <span class="btn-container">
              <span class="btn btn-digital"> Read More</span>
            </span>
          </a>
        </div>
        <div class="card telecoms">
          <a class="block telecoms">
            <div class="icon">
              <i class="fas fa-phone-alt"></i>
            </div>
            <h2>Telecoms Services</h2>
            <span class="line"></span>
            <p>
              Stay connected with bespoke telecoms solutions when you need it most.
            </p>
            <span class="btn-container">
              <span class="btn btn-telecoms"> Read More</span>
            </span>
          </a>
        </div>
        <div class="card web">
          <a class="block web">
            <div class="icon">
              <i class="fas fa-code"></i>
            </div>
            <h2>Web Design</h2>
            <span class="line"></span>
            <p>
              User-centric design for businesses looking to make a lasting first impression.
            </p>
            <span class="btn-container">
              <span class="btn btn-web"> Read More</span>
            </span>
          </a>
        </div>
        <div class="card security">
          <a class="block security">
            <div class="icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h2>Cyber Security</h2>
            <span class="line"></span>
            <p>
              Ensuring your online business stays secure 24/7, 365 days of the year.
            </p>
            <span class="btn-container">
              <span class="btn btn-security"> Read More</span>
            </span>
          </a>
        </div>
        <div class="card web">
          <a class="block web">
            <div class="icon">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <h2>Developer Training</h2>
            <span class="line"></span>
            <p>
              Have you considered a career in web development but you aren’t sure where to start?
            </p>
            <span class="btn-container">
              <span class="btn btn-web"> Read More</span>
            </span>
          </a>
        </div>
      </div>

    </div>
    <!-- another hero banner -->
    <div id="about-container">
      <div class="about-content margin-width">
        <div class="about-inner">
          <h1>Netmatters</h1>
          <p>
            <strong>
              Netmatters Ltd is a leading web design, IT support and digital marketing agency based in Wymondham,
              Norfolk.
            </strong>
          </p>
          <p>
            Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture
            existing
            leads and further grow their sales.
          </p>
          <p>
            We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management
            systems, workflow and IT solutions through to creative website development and integrated digital
            campaigning.
          </p>
          <a href="#">
            <div class="btn about-button">
              Our Culture
              <i class="fas fa-arrow-right" aria-hidden="true"></i>
            </div>
          </a>
        </div>

      </div>
    </div>

    <!-- news section -->
    <div id="latest-container">
      <div class="top-container">
        <div class="latest-top margin-width">
          <span class="latest">Latest</span>
        </div>
      </div>
      <div class="section margin-width">
        <div class="cards-news">
          <?php require './inc/newsCards.php'; ?>
        </div>
      </div>
    </div>

    <!-- logo section -->
    <section id="logo-section">
      <div class="margin-width container-logos">
        <div class="logo">
          <div class="logo-text">
            <div class="popup-box">
              <h3>Busseys</h3>
              <p>One of the UK's leading Ford dealerships</p>
              <div class="pointer"></div>
            </div>
          </div>
          <img src="img/home-gZQR.png" alt="Busseys Logo" class="coloured">
          <img src="img/home-T5gi.jpg" alt="Busseys Logo" class="grey">
        </div>
        <div class="logo">
          <div class="logo-text">
            <div class="popup-box">
              <h3>Crane Garden Builders</h3>
              <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the
                UK.
              </p>
              <div class="pointer"></div>
            </div>
          </div>
          <a href="#">
            <img src="img/home-MjHw.png" alt="Crane Garden Buildings Logo" class="coloured">
            <img src="img/home-BsyK.jpg" alt="Crane Garden Buildings Logo" class="grey">
          </a>
        </div>
        <div class="logo">
          <div class="logo-text">
            <div class="popup-box">
              <h3>Beat</h3>
              <p>The UK's eating disorder charity founded in 1989.</p>
              <div class="pointer"></div>
            </div>
          </div>
          <img src="img/home-ukEL.png" alt="Beat Logo" class="coloured">
          <img src="img/home-RfLc.jpg" alt="Beat Logo" class="grey">
        </div>
        <div class="logo">
          <div class="logo-text">
            <div class="popup-box">
              <h3>Northern Diver</h3>
              <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
              <div class="pointer"></div>
            </div>
          </div>
          <a href="#">
            <img src="img/home-kGn4.png" alt="Northern Diver Logo" class="coloured">
            <img src="img/home-jHUl.jpg" alt="Northern Diver Logo" class="grey">
          </a>
        </div>
      </div>
    </section>
    <?php require './inc/newsletter.php'; ?>

    <!-- Footer -->
    <?php require './inc/footer.php'; ?>

    <?php require './inc/sticky.php'; ?>



  </div>


  <?php require './inc/sidebar.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2Ces2016%2Ces2017%2Ces2018%2Ces2019%2Ces5%2Ces6%2Cwindow.scroll%2CpageYOffset%2Cdefault%2CIntl">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="js/dist/modernizr-custom.js"></script>
  <script src="./js/dist/main.js"></script>



</body>

</html>