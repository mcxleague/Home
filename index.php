<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MCX League - Home</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">
<!--
    <div class="header-top">
      <div class="container">

        <div class="countdown-text">
          Exclusive Black Friday ! Offer <span class="span skewBg">10</span> Days
        </div>

        <div class="social-wrapper">

          <p class="social-title">Follow us on :</p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>
-->
    <div class="header-bottom skewBg" data-header>
      <div class="container">

        <a href="#" class="logo">MCX League</a>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#home" class="navbar-link skewBg" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="#live" class="navbar-link skewBg" data-nav-link>Products</a>
            </li>

            <li class="navbar-item">
              <a href="#features" class="navbar-link skewBg" data-nav-link>Games</a>
            </li>

            <li class="navbar-item">
              <a href="#blog" class="navbar-link skewBg" data-nav-link>Blog</a>
            </li>

            <li class="navbar-item">
              <a href="#" class="navbar-link skewBg" data-nav-link>Contact</a>
            </li>
            <li class="navbar-item">
              <a href="#" class="navbar-link skewBg" data-nav-link>Login</a>
            </li>
          </ul>
        </nav>

        <div class="header-actions">

          <button class="cart-btn" aria-label="cart">
            <ion-icon name="cart"></ion-icon>

            <span class="cart-badge">0</span>
          </button>

          <button class="search-btn" aria-label="open search" data-search-toggler>
            <ion-icon name="search-outline"></ion-icon>
          </button>

          <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
            <ion-icon name="menu-outline" class="menu"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
          </button>

        </div>

      </div>
    </div>

  </header>





  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-box>

    <div class="input-wrapper">
      <input type="search" name="search" aria-label="search" placeholder="Search here..." class="search-field">

      <button class="search-submit" aria-label="submit search" data-search-toggler>
        <ion-icon name="search-outline"></ion-icon>
      </button>

      <button class="search-close" aria-label="close search" data-search-toggler></button>
    </div>

  </div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Learn More About Our Services</p>

            <h1 class="h1 hero-title">
              Games <span class="span">APIS</span> & More
            </h1>

            <p class="hero-text"></p>

            <button class="btn skewBg">Learn More</button>

          </div>

          <figure class="hero-banner img-holder" style="--width: 30; --height: 30;">
            <img src="./assets/images/hero-banner.svg" width="30" height="30" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #BRAND
      -->

      <section class="section brand" aria-label="brand">
        <div class="container">

          <ul class="has-scrollbar">

            <li class="brand-item">
              <img src="./assets/images/brand-1.svg" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-2.svg" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-3.svg" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-4.svg" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-5.svg" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-6.svg" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

          </ul>

        </div>
      </section>





      <div class="section-wrapper">

        <!-- 
          - #LATEST GAME
        -->

        <section class="section latest-game" aria-label="latest game">
          <div class="container">

            <p class="section-subtitle">Our Latest Releases</p>

            <h2 class="h2 section-title">
              Create & <span class="span">Play</span>
            </h2>

            <ul class="has-scrollbar">

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="./assets/images/brand-6.svg" width="400" height="470" loading="lazy"
                      alt="Battle Boss" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Video Game</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">Battle Boss: <span class="span">Preview</span></a>
                    </h3>

                    <p class="card-price">
                      Relese Price : <span class="span">Free</span>
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="./assets/images/latest-game-2.svg" width="400" height="470" loading="lazy"
                      alt="Public APIS" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Public API</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">Public <span class="span">APIS</span></a>
                    </h3>

                    <p class="card-price">
                      Starting Price : <span class="span">Free</span>
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="./assets/images/brand-6.svg" width="400" height="470" loading="lazy"
                      alt="Knolage Simulator" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Roblox Game</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">Knolage <span class="span">Simulator</span></a>
                    </h3>

                    <p class="card-price">
                      Price : <span class="span">FREE</span>
                    </p>

                  </div>

                </div>
              </li>
             <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="./assets/images/brand-3.svg" width="400" height="470" loading="lazy"
                      alt="Public APIS" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">???</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">??? <span class="span">???</span></a>
                    </h3>

                    <p class="card-price">
                      Price : <span class="span">???</span>
                    </p>

                  </div>

                </div>
              </li>
            </ul>

          </div>
        </section>





        <!-- 
          - #LIVE MATCH
        -->

        <section class="section live-match" id="live" aria-label="video">
          <div class="container">

            <h2 class="h2 section-title">
              Watch Our <span class="span">Launch Video</span>
            </h2>

            <figure class="live-match-banner img-holder" style="--width: 800; --height: 470;">

              <img src="./assets/images/live-match-banner.jpg" width="800" height="470" loading="lazy"
                alt="Live Match Video" class="img-cover">

              <button class="play-btn" aria-label="play video">
                <ion-icon name="play"></ion-icon>
              </button>

            </figure>

            <div class="live-match-player">

              <figure class="player player-1 img-holder" style="--width: 406; --height: 277;">
              
              </figure>
              <div class="live-match-detail">

                <p class="live-match-subtitle">Upcoming Updates</p>

                <time class="live-match-time" datetime="08:30">Saturday</time>

              </div>

              <figure class="player player-2 img-holder" style="--width: 400; --height: 305;">
               
              </figure>
            </div>

          </div>
        </section>

      </div>





      <!-- 
        - #FEATURED GAME
      -->

      <section class="section featured-game" id="features" aria-label="featured game">
        <div class="container">

          <h2 class="h2 section-title">
            All Of Our Relesed <span class="span">Games</span>
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-1.jpg" width="450" height="600" loading="lazy"
                    alt="Just for Gamers" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                       Battle <span class="span">Boss</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">PC</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/cloud.svg" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Battle <span class="span">Boss</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">PC</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-2.jpg" width="450" height="600" loading="lazy"
                    alt="Knolage Simulator" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Knolage <span class="span">Simulator</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">PC, Moble, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/cloud.svg" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                       Knolage <span class="span">Simulator</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">PC, Moble, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-3.jpg" width="450" height="600" loading="lazy"
                    alt="Egypt Hunting Gamers" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Crime <span class="span">City</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">PC, Moble, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/cloud.svg" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Crime <span class="span">City</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">PC, Moble, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      
      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <h2 class="h2 section-title">
            News <span class="span">Articles</span>
          </h2>

          <p class="section-text">We write some news and information in our blog</p>
          <ul class="blog-list">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="./assets/images/blog-3.jpg" width="400" height="290" loading="lazy"
                    alt="Defense Of The Ancients" class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Anonymous</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2023-03-24" class="item-text">March 24, 2023</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">Place Holder Article</a>
                  </h3>

                  <p class="card-text">
                    This article is a place holder, will be relpaced soon!
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Dont read more</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>
          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <h2 class="h2">
              Our <span class="span">Newsletter</span>
            </h2>

            <form action="" class="newsletter-form">

              <div class="input-wrapper skewBg">
                <input type="email" name="email_address" aria-label="email" placeholder="Enter your email..." required
                  class="email-field">

                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <button type="submit" class="btn newsletter-btn skewBg">
                <span class="span">Subscribe</span>

                <ion-icon name="paper-plane" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

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

          <a href="#" class="logo">MCX League</a>

          <p class="footer-text">
           MCX League is a new Up-and-Comming video game company.
          </p>

          <ul class="contact-list">

            <li class="contact-item">
              <div class="contact-icon">
                <ion-icon name="location"></ion-icon>
              </div>

              <address class="item-text">
                Address : ???
              </address>
            </li>

            <li class="contact-item">
              <div class="contact-icon">
                <ion-icon name="headset"></ion-icon>
              </div>

              <a href="tel:+241245654235" class="item-text">Phone : ???</a>
            </li>

            <li class="contact-item">
              <div class="contact-icon">
                <ion-icon name="mail-open"></ion-icon>
              </div>

              <a href="mailto:support@mcxleague.cf" class="item-text">Email : support@mcxleague.cf</a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Products</p>
          </li>

          <li>
            <a href="#" class="footer-link">Gamming</a>
          </li>

          <li>
            <a href="#" class="footer-link">For EDU</a>
          </li>

          <li>
            <a href="#" class="footer-link">API Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">MCX League BETA</a>
          </li>

          <li>
            <a href="#" class="footer-link">MCX League Projects</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Need Help?</p>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Refund Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Affiliate Program</a>
          </li>

          <li>
            <a href="#" class="footer-link">Use Cases</a>
          </li>

        </ul>

        <div class="footer-wrapper">

          <div class="social-wrapper">

            <p class="footer-list-title">For News And Updates find us on:</p>

            <ul class="social-list">

              <li>
                <a href="#" class="social-link" style="background-color: #55acee">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
            </ul>

          </div>

          <div class="footer-newsletter">

            <p class="footer-list-title">Newsletter Sign Up</p>

            <form action="" class="footer-newsletter">
              <input type="email" name="email_address" aria-label="email" placeholder="Enter your email" required
                class="email-field">

              <button type="submit" class="footer-btn" aria-label="submit">
                <ion-icon name="rocket"></ion-icon>
              </button>
            </form>

          </div>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 MCX League. All Right Reserved by <a href="#" class="copyright-link">MCX League</a>
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>