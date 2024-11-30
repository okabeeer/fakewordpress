<?php
include "php/send_email.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dawm Agency</title>

  <!-- Polices et icônes -->


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/083179c83d.js" crossorigin="anonymous"></script>

  <!-- Feuilles de style CSS -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  <!-- En-tête (Header) -->
  <header class="header">
    <a class="logo" href="index.html"><span>D</span>AWM</a>
    <nav>
      <div class="nav_links">
        <i class="fa-solid fa-xmark"></i>
        <div class="nav_links">
          <i class="fa-solid fa-xmark"></i>
          <ul>
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="templates.php">Templates</a></li>
            <li><a href="index.phpcontact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div>
      <a class="cta" href="register.php"><button>Sign Up</button></a>
    </div>
    <i class="fa-solid fa-bars"></i>
  </header>

  <!-- En-tête de page pour la section de contact -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Contact Us</span>
          <h3>Contact Us</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- Section de contact -->
  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <!-- Colonne de gauche : Informations de contact -->
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| Contact Us</h6>
            <h2>Get In Touch With Our Agents</h2>
          </div>
          <p>We’re here to help bring your vision to life! Whether you have questions about our website creation tools, need support, or just want to learn more, our team is ready to assist you. Connect with us via email, phone, or the contact form below, and we’ll respond promptly. With us, creating the website of your dreams has never been easier. Let’s start building together today!</p>

          <!-- Détails de contact : téléphone et email -->
          <div class="row">
            <div class="col-lg-12">

            </div>
            <div class="col-lg-12">
              <div class="item email" style="display: flex;gap: 20px;">
                <i class='bx bx-envelope' style="color:rgba(0, 137, 169, 0.8) ;font-size: 40px;"></i>
                <h6>dawm.estn@gmail.com<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>

        <!-- Colonne de droite : Formulaire de contact -->
        <div class="col-lg-6">
          <form id="contact-form" action="php/send_email.php" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Full Name</label>
                  <input type="text" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="email" name="email" id="email" placeholder="Your E-mail..." required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="text" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Message</label>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button name="send" type="submit" id="form-submit" class="orange-button" style="background-color: rgba(0, 137, 169, 0.8);">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>

        <!-- Carte Google Maps intégrée -->
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3265.6142356203354!2d-2.9127910999999997!3d35.066382600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd77a567cff5f453%3A0x55b30fe668597570!2sEST%20%3A%20%C3%89cole%20Sup%C3%A9rieure%20de%20Technologie_Nador!5e0!3m2!1sen!2sma!4v1729965030261!5m2!1sen!2sma" width="100%" height="500px" style="border:0;border-radius: 10px;box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>