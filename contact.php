<?php
require_once 'inc/connection.php';
require_once 'inc/functions.php'
?>

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


    <!-- scripts -->
    <script src="https://kit.fontawesome.com/d9dd6a6053.js" crossorigin="anonymous"></script>
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

    <link rel="stylesheet" href="scss/hamburgers.css">
    <link rel="stylesheet" href="./css/style.css">
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
        <?php require 'inc/header.php'; ?>
        <div class="breadcrumb-section">
            <div class="container margin-wdith">
                <ul class="breadcrumb">
                    <li><a href="/"> Home</a></li>
                    <li>Our Offices</li>
                </ul>
            </div>
        </div>

        <div class="contact-title-section">
            <div class="container margin-width">
                <h1> Our Offices</h1>
            </div>
        </div>

        <div class="office_container margin-width">
            <div class="card">
                <div class="contact-image">
                    <a href="#"><img src="img/cambridge.jpg"></a>
                </div>
                <div class="card_top">

                    <h2><a href="#">Cambridge Office</a></h2>
                    <p>
                        Unit 1.28,
                        <br>
                        St John's Innovation Centre,
                        <br>
                        Cowley Road, Milton,
                        <br>
                        Cambridge,
                        <br>
                        CB4 0WS
                    </p>
                    <div class="contact-tel"><a href="tel:01223375772">01223 37 57 72</a></div>
                    <div class="view-more-contact">
                        <a href="#" class="view-more">View More</a>
                    </div>
                </div>
                <div id="mapid" class="map"></div>
            </div>
            <div class="card">
                <div class="contact-image">
                    <a href="#"><img src="img/wymondham.jpg"></a>
                </div>
                <div class="card_top">

                    <h2><a href="#">Wymondham Office</a></h2>
                    <p>
                        Unit 15,
                        <br>
                        Penfold Drive,
                        <br>
                        Gateway 11 Business Park,
                        <br>
                        Wymondham, Norfolk,
                        <br>
                        NR18 0WZ
                    </p>
                    <div class="contact-tel"><a href="tel:01603704020">01603 70 40 20</a></div>
                    <div class="view-more-contact">
                        <a href="#" class="view-more">View More</a>
                    </div>
                </div>
                <div id="mapid2" class="map"></div>
            </div>
            <div class="card">
                <div class="contact-image">
                    <a href="#"><img src="img/yarmouth-2.jpg"></a>
                </div>
                <div class="card_top">

                    <h2><a href="#">Great Yarmouth Office</a></h2>
                    <p>
                        Suite F23,
                        <br>
                        Beacon Innovation Centre,
                        <br>
                        Beacon Park, Gorleston,
                        <br>
                        Great Yarmouth, Norfolk,
                        <br>
                        NR31 7RA
                    </p>
                    <div class="contact-tel"><a href="tel:01493603204">01493 60 32 04</a></div>
                    <div class="view-more-contact">
                        <a href="#" class="view-more">View More</a>
                    </div>
                </div>
                <div id="mapid3" class="map"></div>
            </div>
        </div>
        <div class="section bottom container shell-flex">
            <div class="form_submission">
                <!-- action="includes/send_enquiry.inc.php" -->
                <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                    <div class="success <?php echo $pop_up ?>" id="success_pop_op">
                        <p class="success_message">Your message has been sent!</p>
                        <i class="fa fa-times" id="close_button"></i>
                    </div>
                    <div class="error <?php echo $pop_up_error ?>" id="error_pop_op">
                        <p class="error_message">An Error has occured!</p>
                        <i class="fa fa-times" id="close_button"></i>
                    </div>
                    <span class="name_container span-input">
                        <label for="name">Your Name</label>
                        <p>*</p><br>
                        <input class="<?php echo $nameError ?>" type="text" name="name" id="name_input" value="<?php if (empty($name)) {
                                                                                                                    echo '';
                                                                                                                } else {
                                                                                                                    echo $name;
                                                                                                                } ?>"><br>
                    </span>
                    <span class="email_container span-input">
                        <label for="email_input">Your Email</label>
                        <p>*</p><br>
                        <input class="<?php echo $emailError ?>" type="text" name="email_address" id="email_input" value="<?php if (empty($email)) {
                                                                                                                                echo '';
                                                                                                                            } else {
                                                                                                                                echo $email;
                                                                                                                            } ?>"><br>
                    </span>
                    <span class="telephone_container span-input">
                        <label for="telephone_input">Your Telephone Number</label>
                        <p>*</p><br>
                        <input class="<?php echo $phoneError ?>" type="tel" name="phone_number" id="telephone_input" value="<?php if (empty($phone)) {
                                                                                                                                echo '';
                                                                                                                            } else {
                                                                                                                                echo $phone;
                                                                                                                            } ?>"><br>
                    </span>
                    <span class="subject_container span-input">
                        <label for="subject_input">Subject</label>
                        <p>*</p><br>
                        <input class="<?php echo $subjectError ?>" type="text" name="subject" id="subject_input" value="<?php if (empty($subject)) {
                                                                                                                            echo '';
                                                                                                                        } else {
                                                                                                                            echo $subject;
                                                                                                                        } ?>"><br>
                    </span>
                    <span class="message_container span-input">
                        <label for="message_input">Message</label>
                        <p>*</p><br>
                        <textarea class="<?php echo $messageError ?>" type="text" name="message" id="message_input"><?php if (empty($message)) {
                                                                                                                        echo '';
                                                                                                                    } else {
                                                                                                                        echo $message;
                                                                                                                    } ?></textarea><br>
                    </span>
                    <span id="updates">

                        <label class="tick-box">
                            <input type="checkbox" name="news_updates" value="true">
                            <span class="checkmark">
                                <span class=" check material-icons">
                                    done
                                </span>
                            </span>
                            <label class="privacy_text" for="news_updates">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data</label>
                    </span>
                    <button class="send_button" name="submit" id="contact_form_button">Send Enquiry</button>
                </form>
            </div>
            <div class="out-of-hours-message">
                <p><strong>Email us on:</strong></p>
                <p><a href="mail:sales@netmatters.com" class="contact-email-text">sales@netmatters.com</a></p>
                <p><strong>Business hours:</strong> </p>
                <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                <a href="#" class="dropdown-link">
                    <p><strong>Out of Hours IT Support</strong><i class="fas fa-chevron-down" id="hidden-text-arrow"></i></p>

                </a>
                <div class="hidden-text">
                    <p>
                        Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.
                    </p>
                    <p>
                        <strong>
                            Monday - Friday: 18:00 - 22:00<br>
                            Saturday: 08:00 - 16:00<br>
                            Sunday: 10:00 - 18:00
                        </strong>
                    </p>
                    <p>
                        To log a critical task, you will need to call our main line
                        number and select Option 2 to leave an Out of Hours voicemail.
                        A technician will contact you on the number provided within
                        45 minutes of your call.
                    </p>
                </div>
            </div>
        </div>

        <?php require 'inc//newsletter.php'; ?>
        <?php require 'inc/footer.php'; ?>
        <?php require 'inc/sticky.php'; ?>

    </div>

    <?php require 'inc/sidebar.php'; ?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2Ces2016%2Ces2017%2Ces2018%2Ces2019%2Ces5%2Ces6%2Cwindow.scroll%2CpageYOffset%2Cdefault%2CIntl">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/dist/modernizr-custom.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="./js/dist/main.js"></script>
    <script src="./js/dist/contactmap.js"></script>
</body>

</html>