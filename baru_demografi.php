<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="https://bulakan.desa.id/wp-content/themes/rife-free/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/all.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="homestyle.css" />
  <title>Demografi</title>
  <script src="https://unpkg.com/scrollreveal"></script>
</head>
<style>
  body {
    background-color: white !important;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Segoe UI", Arial, sans-serif;
    font-weight: 400;
    margin: 10px 0;
  }

  #footer {
    font-size: 14px;
    color: white;
  }

  #footer.centered,
  #footer.centered .widget h3.title,
  #footer.centered .widget .socials {
    text-align: center;
  }

  #footer {
    font-size: 10px;
    background-color: #000;
    width: 100%;
    min-height: 70px;
    box-sizing: border-box;
  }

  #footer {
    position: relative;
    z-index: 10;
  }
</style>

<body style="font-family: 'Lato', sans-serif">
  <center>
    <h3 style="font-size: 2em">DEMOGRAFI</h3>
  </center>
  <center>
    <img class="slide-up" width="400px" src="World-coute (1).png" />
  </center>
  <div class="w3-container slide-up">
    <button onclick="myFunction('Demo1')" class="w3-btn w3-block w3-white w3-left-align">
      Batas wilayah
    </button>

    <div id="Demo1" class="w3-container w3-hide">
      <h4>Section 1</h4>
      <p>Some text..</p>
    </div>
    <button onclick="myFunction('Demo2')" class="w3-btn w3-block w3-white w3-left-align">
      Luas wilayah
    </button>
    <div id="Demo2" class="w3-container w3-hide">
      <h4>Section 1</h4>
      <p>Some text..</p>
    </div>
    <button onclick="myFunction('Demo3')" class="w3-btn w3-block w3-white w3-left-align">
      Luas wilayah
    </button>
    <div id="Demo3" class="w3-container w3-hide">
      <h4>Section 1</h4>
      <p>Some text..</p>
    </div>
    <button onclick="myFunction('Demo4')" class="w3-btn w3-block w3-white w3-left-align">
      Luas wilayah
    </button>
    <div id="Demo4" class="w3-container w3-hide">
      <h4>Section 1</h4>
      <p>Some text..</p>
    </div>
  </div>
  <section class="footer" style="color: black;">
    <div class="box-container">
      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="gabungan.php"> <i class="fas fa-angle-right"></i> profile</a>
        <a href="informasi_publik.php"> <i class="fas fa-angle-right"></i> informasi publik</a>
        <a href="aduan.php"> <i class="fas fa-angle-right"></i> layanan publik</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
        <h3>kontak info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
        <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
        <a href="#"> <i class="fas fa-envelope"></i> leuwigede@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> indramayu, indonesia - 45271</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-youtube"></i> youtube </a>
      </div>
    </div>
    <div class="credit"> created by <span>RID</span> | all rights reserved! </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="home.js"></script>
  <script>
    ScrollReveal({
      reset: true
    });
    ScrollReveal().reveal(".show-once", {
      reset: false
    });
    ScrollReveal().reveal(".title", {
      duration: 2500,
      origin: "top",
      distance: "50px",
      easing: "cubic-bezier(0.5, 0, 0, 1)",
      rotate: {
        x: 20,
        z: -10
      },
    });
    ScrollReveal().reveal(".fade-in", {
      delay: 200,
      duration: 2500,
      move: 0,
    });
    ScrollReveal().reveal(".scaleUp", {
      duration: 2500,
      scale: 0.85
    });
    ScrollReveal().reveal(".flip", {
      delay: 500,
      duration: 2000,
      rotate: {
        x: 20,
        z: 20
      },
    });
    ScrollReveal().reveal(".slide-right", {
      duration: 1000,
      origin: "left",
      distance: "300px",
      easing: "ease-in-out",
    });
    ScrollReveal().reveal(".slide-up", {
      duration: 2000,
      origin: "bottom",
      distance: "200px",
      opacity: 0,
      scale: 0.5,
    });

    function myFunction(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
  <script src="js/all.js"></script>
</body>

</html>