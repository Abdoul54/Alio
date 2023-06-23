<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="../Public/css/styleindex.css">
  <title>ALIO</title>
</head>

<body>
  <!-- Header -->
  <?php require_once '../Layout/header.php'; ?>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="particles-js">
      <div class="title1">Find the life you want</div>
      <div class="title2">Thousands of website ads in a single search</div>  

      <div class="content">
        <a href="./Search.php?t=Properties"><div class="card">
          <div class="icons">
              <i class="fa-solid fa-house"></i>
          </div>
          <div class="info">
              <h3>Property</h3> </div>
      </div>
      </a>
      <a href="./Search.php?t=Vehicles"><div class="card">
          <div class="icons">
              <i class="fa-solid fa-car"></i>
          </div>
          <div class="info">
              <h3>Vehicle</h3>
          </div>
      </div>
      </a>
      <a href="./Search.php?t=Jobs">
      <div class="card">
          <div class="icons">
              <i class="fa-solid fa-user"></i>
          </div>
          <div class="info">
              <h3>Job</h3>
          </div>
      </div>
    </a>
      </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Services Section -->
  <section id="services">
    <div class="services container">
      <div class="services-header">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
      </div>
      <div class="all-services">
        <div class="services-item">
          <div class="services-info">
            <h1>Property</h1>
            <p>At ALIO, we understand that finding the perfect home is essential to living a fulfilling life. That's why we've created a platform that makes it easy to find your dream home. Our platform aggregates listings from various sources, giving you access to a wide range of properties to choose from. </p>
          </div>
          <div class="services-img">
            <img src="https://images.pexels.com/photos/250659/pexels-photo-250659.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="img">
          </div>
        </div>
        <div class="services-item">
          <div class="services-info">
            <h1>Vehicle</h1>
            <p>Our search engine is designed to help you find the perfect car for your needs. We aggregate listings from various sources, giving you access to a wide range of vehicles to choose from. You can easily filter your search based on make, model, year, price, and other criteria to narrow down your options. </p>
          </div>
          <div class="services-img">
            <img src="https://images.pexels.com/photos/804130/pexels-photo-804130.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="img">
          </div>
        </div>
        <div class="services-item">
          <div class="services-info">
            <h1>Job</h1>
            <p>Finding the right job can be a daunting task, but at ALIO, we're here to help. Our platform aggregates job listings from various sources, giving you access to a wide range of employment opportunities. You can easily filter your search based on industry, location, job type, and other criteria to find jobs that meet your specific needs.
</p>
          </div>
          <div class="services-img">
            <img src="https://images.pexels.com/photos/652348/pexels-photo-652348.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="img">
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Services Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="images/img-2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>Us</span></h1>
        <p>
At ALIO, we are committed to providing our users with a comprehensive and user-friendly platform to search for classified ads. We understand that finding the right property, car, or job can be a challenging and time-consuming task, which is why we strive to make the process as easy and efficient as possible. Our platform aggregates listings from various sources, saving you time and effort in your search. We are passionate about creating a seamless user experience, and we are constantly improving our platform to meet the needs of our users. Whether you are a buyer, seller, or job seeker, we are here to help you achieve your goals. Thank you for choosing ALIO as your go-to destination for classified ads.</p>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+212 6936 140 31</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>alio@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>CasaBlanca</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <?php require_once '../Layout/Footer.php'; ?>
  <!-- End Footer -->
  <script src="../Public/JS/app.js"></script>
  <script  src="../Public/JS/particles.min.js"></script>
  <script>
    particlesJS(
      {
        
  "particles": {
    "number": {
      "value": 38,
      "density": {
        "enable": true,
        "value_area": 789.1476416322727
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "edge",
      "stroke": {
        "width": 0,
        "color": "#ffffff"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.14993805191013182,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3.945738208161363,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 2.3976023976023977,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 157.82952832645452,
      "color": "#ffffff",
      "opacity": 0.33933348590187723,
      "width": 1.1048066982851816
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
    )
  </script>
</body>

</html>