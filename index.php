<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chitragan Engineers </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./css_bunch/images/T-LOGO1.png" type="image/jpeg">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css bunch/css/style1.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <style>
      
      </style>
 
</head>
<body id="top">

  <!-- Header -->
<section class="home" id="home">
  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+91 9890117868" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">For Further Inquires :</p>
            <p class="helpline-number">+91 9890117868</p> 
          </div>

        </a>

        <!-- <a href="#" class="logo">
          <img src="./css bunch/images/LOGO.jpeg" alt="Chitragan logo" style="width: 200px;">  Logo
        </a> -->

        <div class="header-btn-group">

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="https://www.facebook.com/profile.php?id=61555652135542&mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/chitragan_engineers?igsh=MXYyc2V6bDlkYWJrag== " class="social-link">
              <ion-icon name="logo-Instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="mailto:chitraganengineers@gmail.com" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./css bunch/images/T-LOGO1.jpeg" alt="Chitragan logo"> <!--Logo-->
            </a>

           

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li>
              <a href="#About" class="navbar-link" data-nav-link>About Us</a>
            </li>


            <li>
              <a href="#package" class="navbar-link" data-nav-link>Services</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>Gallery</a>
            </li>

            <li>
              <a href="#project" class="navbar-link" data-nav-link>Projects</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link>Contact Us</a>
            </li>

          </ul>

        </nav>
       <!-- <a>
        <button class="btn btn-primary"><a href="btn.html" style="color:aliceblue;">Inquiry</a></button>
       </a> -->

       


       <div class="offcanvas offcanvas-end" id="demo" style=" background-color:grey;">
    <div class="offcanvas-header">
      <center>
    <a href="#" class="logo">
              <img src="./css bunch/images/T-LOGO1.png" alt="Chitragan logo" style="height: 90px; width: 140px; margin-left: 120px; filter:brightness(150%); filter:saturate(8);"> <!--Logo-->
            </a>
      </center>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body" >
    <form action="" method="post" style=" background-color: #fff; border: 1px solid #ccc; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style=" text-align: center; color: #333;">Inquiry Form</h1>
        <hr>
        <label for="name" style=" display: block;margin-bottom: 8px;">Name:</label>
        <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

        <label for="email" style=" display: block;margin-bottom: 8px;">Email:</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

        <label for="phone" style=" display: block;margin-bottom: 8px;">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

        <label for="services" style=" display: block;margin-bottom: 8px;">Select Services:</label>
        <select id="services" name="services" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        <option value="  ">Select Services</option>
            <option value="RCC Design">RCC Design</option>
            <option value="RCC Work">RCC Work</option>
            <option value="Water Proofing">Water Proofing</option>
            <option value="Tile Work">Tile Work</option>
            <option value="Plumbing">Plumbing</option>
            <option value="Electrical">Electrical</option>
            <option value="CCTV">CCTV</option>
            <option value="Furniture">Furniture</option>
            <option value="Kitchen Trolley">Kitchen Trolley</option>
            <option value="Alluminium Partition & Sliding Windows">Alluminium Partition & Sliding Windows</option>
            <option value="Industrial & Domestic Fabrication">Industrial & Domestic Fabrication</option>
            <option value="Interior & Exterior Painting"> Interior & Exterior Painting</option>
            <option value="POP">POP</option>
            <option value="Fire Fighting System">Fire Fighting System</option>
            <option value="Air Conditioning">Air Conditioning</option>
            <option value="Solar Roof top">Solar Roof Top</option>
            <option value="Solar Water Heater">Solar Water Heater</option>
            <!-- Add more service options as needed -->
        </select>

        <label for="address" style=" display: block;margin-bottom: 8px;">Address:</label>
        <input type="address" id="address" name="address" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

        <button type="submit" name="inquiry_form" value="inquiry_form" style="background-color: #3b5fe3; color: #fff; padding: 10px; border: none; border-radius: 4px; cursor: pointer;">Submit Inquiry</button>
        <!-- <button class="btn btn-primary"><a href="index.php">BACK</a></button> -->
    </form>

    </div>
  </div>
  
  <!-- Button to open the offcanvas sidebar -->
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
  Inquiry
  </button>
      </div>
    </div>






  </header>
<main>
  <article>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="css bunch\images\pic-23.jpg" alt="img1" class="d-block" style="width:100%">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="css bunch\images\pic-22.jpg" alt="img2" class="d-block" style="width:100%">
      <div class="carousel-caption">
      
      </div> 
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="css bunch\images\pic-13.jpg" alt="img3" class="d-block" style="width:100%">
      <div class="carousel-caption">
      </div>  
    </div>
    
    <div class="text-overlay">

      <h2 class="h1 hero-title"><br><br><br>Decore your home<br> with color of <br>happiness with us </h2>

      </div>
  </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
</section>


<!-- About Us Section -->
<section class="About" id="About">
          <br><br><br><br>
        <div class="container">
            <h2 class="h2 section-title">About Us</h2>
            <center><img src="./css bunch/images/T-LOGO1.png" height="15%" width="15%" class="abimg"></center>
        <p style="text-align: justify;">At Chitragan Services, we are not just a company; we are a team of passionate individuals driven by a shared vision – to transform your ideas into captivating visual stories. Established with a commitment to excellence, we bring a unique blend of creativity and innovation to every project we undertake.

<h5>Our Story:</h5>
<p style="text-align: justify;">Chitragan Services was born out of a desire to redefine the way visual content is created and experienced. Our journey began with a simple idea: to bridge the gap between imagination and reality. Today, we stand tall as a hub of creative brilliance, offering a spectrum of services designed to elevate your brand, capture your audience's attention, and leave a lasting impression.
Let's turn your ideas into art, and your art into success.

Welcome to Chitragan Services - Where Imagination Meets Impact.

Feel free to customize this content to better align with the specific values, mission, and services of Chitragan Services.</p>



</p>

    </div>
</section>

<!-- ---------------------------------------------------------------------------------------------------------- -->

<section class="package" id="package">
        <div class="container">


          <h2 class="h2 section-title">Services</h2>

          

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Painting" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="POP.html"> POP</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                     
                    </h4>
                    
                      <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>
                    </p>
                    <a>
                      <button class="btn btn-primary"><a href="POP.html" style="color: aliceblue;">Read More...</a></button>
                     </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Painting" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Fire_Fighting_System.html">Fire Fighting System</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit </p>
                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Fire_Fighting_System.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./css bunch/images/tile work/img1.jpeg" alt="Painting" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Tilework.html">Tile work</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Tilework.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./css bunch/images/plumbing/img1.jpeg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Plumbing.html">Plumbing</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                     
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Plumbing.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./css bunch/images/water proofing/img1.jpeg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="WaterProofing.html">Water Proofing</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                     
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="WaterProofing.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./css bunch/images/painting/img1.jpeg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Interior_Exterior_Painting.html">Interior & Exterior Painting</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips </p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Interior_Exterior_Painting.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Electrical.html">Electrical</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Electrical.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="CCTV.html">CCTV installation</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="CCTV.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Air.html">Air  Conditioning </a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Air.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./css bunch/images/solar/img1.jpeg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="SolarRooftop.html">Solar Rooftop</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="SolarRooftop.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="SolarWater.html">Solar Water Heater</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                     
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi </p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="SolarWater.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="RCC_Design.html">RCC Design</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="RCC_Design.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="RCC_Work.html">RCC Work</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                     
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="RCC_Work.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Brick_Work_Plaster.html"> Brick Work & Plaster</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi </p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Brick_Work_Plaster.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./css bunch/images/Furniture/img1.jpeg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Furniture.html">Furniture</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Furniture.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./css bunch/images/kitchen trolly/img1.jpeg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Kitchen_Trolley.html"> Kitchen Trolley</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    </h4>
                    <p style="text-align: justify;">Fusce hic augue velit wisi ips quibusdam pariatur, iusto.Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>

                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Kitchen_Trolley.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./css bunch/images/windows/img1.jpeg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Alluminium_Partition_Sliding_Windowsr.html">Alluminium Partition & Sliding Windows</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                     
                    </h4>
                    Fusce hic augue velit wisi ips quibusdam pariatur, iusto.
                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Alluminium_Partition_Sliding_Windowsr.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://2.bp.blogspot.com/-IBXQHLTp5qo/VvmLmgWRE-I/AAAAAAAADyc/lKJEXctLHPsQBLn7QcGmiWkj2T9u_EzRQ/s1600/22.-Autumn-beauty-web.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                    <ion-icon name="dot"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Chitragan Services</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Industrial_Domestic_Fabrication.html"> Industrial & Domestic Fabrication</a>
                  </h3>

                  <p class="card-text">
                    <h4 class="h3 card-title">
                      
                    </h4>
                    Fusce hic augue velit wisi ips quibusdam pariatur, iusto.
                  </p>
                  <a>
                    <button class="btn btn-primary"><a href="Industrial_Domestic_Fabrication.html" style="color: aliceblue;">Read More...</a></button>
                   </a>
                </div>

              </div>
            </li>


            
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>


<section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Chitragan Engineers</h2>

          

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./css bunch/images/pic-1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./css bunch/images/pic-2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./css bunch/images/pic-3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./css bunch/images/pic-4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./css bunch/images/pic-5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>

<!-- --------------------------------------------------------------------------------------------- -->
      <section class="project" id="project">
      <br><br><br><br>
        <div class="container">
          <p class="section-subtitle">Projects</p>

          <h2 class="h2 section-title">Done From Chitragan Engineers</h2>

          <div class="row d-flex">
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                <img src="./css bunch/images/pic-18.jpg" alt="Chitragan Engineers" height="30%" width="50%"> <!-- Image -->
                </a>
                <div class="text mt-3 px-4">
                  <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url(css bunch/images/pic-18.jpg);"></div>
                    <div class="desc pl-3">
                      <span>Posted by Chitragan Engineers</span>
                      <span>27 jan 2024</span> <!--DATE-->
                    </div>
                  </div>
                  
                  <h3 class="heading"><a href="#">Project Summery</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  <hr>
                </div>
              </div>
            </div>
          
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                <img src="./css bunch/images/pic-18.jpg" alt="Chitragan Engineers" height="30%" width="50%" > <!-- Image -->
                </a>
                <div class="text mt-3 px-4">
                  <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url(images/person_3.jpg);"></div>
                    <div class="desc pl-3">
                      <span>Posted by Chitragan Engineers</span>
                      <span>27 jan 2024</span><!--DATE-->
                    </div>
                  </div>
                  
                  <h3 class="heading"><a href="#">Project Summery</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  <hr>
                </div>
              </div>
            </div>

            <br>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                <img src="./css bunch/images/pic-18.jpg" alt="Chitragan Engineers" height="30%" width="50%" > <!-- Image -->
                </a>
                <div class="text mt-3 px-4">
                  <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url(images/person_3.jpg);"></div>
                    <div class="desc pl-3">
                      <span>Posted by Chitragan Engineers</span>
                      <span>27 jan 2024</span><!--DATE-->
                    </div>
                  </div>
                  
                  <h3 class="heading"><a href="#">Project Summery</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  <hr>
                </div>
              </div>
            </div>
            <br>
            <center>
            <a href="project.php"><button style="color: aliceblue;background-color:rgb(64, 64, 255); width:100%;">Read More..</button></a>
          </center>
          </div>
        </div>
      </section>

<br><br><br><br>

      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">Ready For Remember Us!</h2>

            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
              laudantium. Sit ornare
              mollitia tenetur, aptent.
            </p>
          </div>
         
    <form action="" method="post"  class="row gy-2 gx-3 align-items-center">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input type="text" class="form-control" name="name" id="autoSizingInput" placeholder="Enter Your Name" required>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Phone no.</label>
    <div class="input-group">
      <input type="tel" class="form-control" name="phone" id="autoSizingInputGroup" placeholder="Enter Your number" required>
    </div>
  </div>

  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Email</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="email" class="form-control" name="email" id="autoSizingInputGroup" placeholder="Enter Your E-mail" required>
    </div>
  </div>

  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Nature of Enquiry</label>
    <select class="form-select" name="Nature_of_Enquiry" id="autoSizingSelect" required>
      <option selected>Nature of Enquiry</option>
      <option value="Product Enquiry">Product Enquiry</option>
      <option value="Deakership Enquiry">Deakership Enquiry</option>
      <option value="Enquiry for Services">Enquiry for Services</option>
      <option value="Raw Material Supplier">Raw Material Supplier</option>
      <option value="Agency / Vendor">Agency / Vendor</option>
      <option value="Job Vacancy">Job Vacancy</option>
      <option value="Complaints">Complaints</option>
    </select>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Message</label>
    <!-- <input type="text" class="form-control" id="autoSizingInput" placeholder="Your Message"> -->
    <textarea name="message" style="display: inline-block; width: calc(100% - 120px); padding: 5px; border-radius: 5px; border: 1px solid #ccc; box-sizing: border-box; height: 100px; vertical-align: top; width: 300px;" id="message" name="message" placeholder="Your Message" required></textarea>
  </div>
  <div class="col-auto">
    <button type="submit" name="contact_form" value="contact_form" class="btn btn-primary" style="background-color:lite-blue; color: black; padding: 10px; border: none; border-radius: 4px; cursor: pointer;" >Submit</button>
  </div>
</form>


        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./css bunch/images/T-LOGO1.png" alt="Chitragan logo"> <!--Logo-->
          </a>

          <p class="footer-text" style="color: #fff;">
          At Chitragan Services, we are not just a company; we are a team of passionate individuals driven by a shared vision – to transform your ideas into captivating visual stories. Established with a commitment to excellence, we bring a unique blend of creativity and innovation to every project we undertake.
          </p>
          <ul class="social-list">

<li>
  <a href="https://www.facebook.com/profile.php?id=61555652135542&mibextid=ZbWKwL" class="social-link">
    <ion-icon name="logo-facebook"></ion-icon>
  </a>
</li>

<li>
  <a href="https://www.instagram.com/chitragan_engineers?igsh=MXYyc2V6bDlkYWJrag== " class="social-link">
    <ion-icon name="logo-Instagram"></ion-icon>
  </a>
</li>

<li>
  <a href="mailto:chitraganengineers@gmail.com" class="social-link">
    <ion-icon name="mail-outline"></ion-icon>
  </a>
</li>

</ul>
        </div>

        <div class="footer-contact" >
<br><br><br><br><br>
          <h4 class="contact-title" style="color: #fff;">Contact Us</h4>

          <p class="contact-text" style="color: #fff;">
            Feel free to contact and reach us !!
          </p>

          <ul >

            <li class="contact-item" style="color: #fff;">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+91 9890117868" class="contact-link" style="color: #fff;">+91 9890117868</a>
            </li>

            <li class="contact-item"  >
              <ion-icon name="mail-outline" ></ion-icon>

              <a href="mailto:chitraganengineers@gmail.com" class="contact-link" style="color: #fff;">Chitragan.com</a>
            </li>

            <li class="contact-item" style="color: #fff;">
              <ion-icon name="location-outline"></ion-icon>

              <address> Kothrud, pune-38</address>
            </li>

          </ul>

        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.255985327621!2d73.8390427740461!3d18.517330769275514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c07f4daa097f%3A0xce339b60765d5009!2sFergusson%20College%20Rd%2C%20Pune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1692964116325!5m2!1sen!2sin" width="120%" height="100%"  style="padding-right:70px; padding-bottom:100px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      </div>
    </div>


  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>


 


  <!-- 
    - custom js link
  -->
  <script src="./css bunch/js/script.js"></script>
  <script src="./css bunch/js/script2.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>




<?php

if(isset($_POST['inquiry_form'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chitragan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Retrieve form data
$name = ($_POST['name']);
$phone = ($_POST['phone']);
$email = ($_POST['email']);
$address = ($_POST['address']);
$services = ($_POST['services']);


// Insert data into the database
$sql = "INSERT INTO CE (name, phone, email,address, services)
VALUES ('$name', '$phone','$email', '$address', '$services')";

 if ($conn->query($sql) === TRUE)
  {
    // header("location:index.php");
    echo "<script>alert ('Your Inquiry is Submited')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

}
?>



<?php
if(isset($_POST["contact_form"])){


 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "chitragan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Retrieve form data
$name = ($_POST['name']);
$phone = ($_POST['phone']);
$email = ($_POST['email']);
$Nature_of_Enquiry = ($_POST['Nature_of_Enquiry']);
$message = ($_POST['message']);


// Insert data into the database
$sql = "INSERT INTO contact (Name,Phone,Email,Nature_of_Enquiry,message)
VALUES ('$name', '$phone','$email', '$Nature_of_Enquiry','$message')";
       //$result=mysqli_query($conn,$sql);

 if ($conn->query($sql) === TRUE)
  {
    // header("location:index.php");
    echo "<script>alert ('Your Inquiry is Submited')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

}
?>

