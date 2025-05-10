<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wyn Foods Pte Ltd</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn PHP, HTML, and web development with beginner tutorials.">
    <meta name="author" content="Your Name">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Styles/header.css">
    <link rel="stylesheet" href="Styles/footer.css">
    <link rel="stylesheet" href="Styles/form.css">
  </head>
  
  <body>
    
    <header>
      <div class="logo">
        <img class="img-logo" src="Image/Logo/logo-1.png" alt="wyn foods logo">
      </div>

      <nav>
        <input type="checkbox" id="sidebar-active">
        <label for="sidebar-active" class="open-sidebar-button">
          <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#FFFFFF"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </label>
        <label id="overlay" for="sidebar-active"></label>
        <div class="links-container">
          <label for="sidebar-active" class="close-sidebar-button">
            <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#FFFFFF"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
          </label>

          <a href="index.html">Home</a>
          <a href="#">Our Products</a>
          <a href="#">About Us</a>
          <a href="#">中文</a>
        </div>
      </nav>  
    </header>

    <main>
      <div class="container-form">
        <form action="">
          <input type="text" placeholder="Full Name">
          <input type="text" placeholder="Email">
          <input type="text" placeholder="Comapany">
          <input type="text" placeholder="Country">
        </form>
      </div>
    </main>
    
    <footer>
      <div class="footer-grid">
        <div class="footer-section">
          <img src="Image/Logo/logo-1.png" alt="">
          <h3>
            Wyn Foods Pte Ltd
          </h3>
          <div class="icon-text">
            <p>
              We are a Singapore-based food company specializing in high-quality cooking oils and creamers, proudly serving local and international markets since 2014.
            </p>
          </div>
        </div>
        <div class="footer-section-browse">
          <h3>
            Browse
          </h3>
          <ul>
            <li>Home</li>
            <li>About Us</li>
            <li>Our Products</li>
            <li>中文</li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>
            What We Offer
          </h3>
          <ul>
            <li>Pure Vegetable Oil</li>
            <li>Soft Oil</li>
            <li>Creamer</li>
            <li>Packagings</li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>
            Contact Us
          </h3>
          <div class="container-icon-text">
            <svg class="footer-icons" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#FFFFFF"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280 320-200v-80L480-520 160-720v80l320 200Z"/></svg>
            <p>
              wynfoods@wynfoods.com.sg
            </p>
          </div>
          <div class="container-icon-text">
            <svg class="footer-icons" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#FFFFFF"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12Z"/></svg>
            <p>
              +65 62829901
            </p>
          </div>
          <div class="container-icon-text">
            <div>
              <svg class="footer-icons" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#FFFFFF"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 400Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Z"/></svg>
            </div>
            <p>
              5 Upper Aljunied Link #07-06
              Quartz Industrial Building
              Singapore 367903
            </p>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>
          &#169; 2025 WYN FOODS PTE LTD
        </p>
      </div>
    </footer>
  </body>
</html>