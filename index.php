<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio website</title>
    <link rel="stylesheet" href="css/style.css" />
    <!--======== BOX ICONS ==========-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <!--======== HEADER ==========-->
    <header class="l-header">
      <nav class="nav bd-grid">
        <div class="logo">
          <a href="#about" class="nav__logo">Karl Mekuie</a>
        </div>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item"><a href="#home" class="nav__link active">Accueil</a></li>
            <li class="nav__item"><a href="#about" class="nav__link">Profil</a></li>
            <li class="nav__item"><a href="#skills" class="nav__link">Compétences</a></li>
            <li class="nav__item"><a href="#work" class="nav__link">Projets</a></li>
            <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
          </ul>
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class='bx bx-menu'></i>
        </div>
      </nav>
    </header>

    <main class="l-main">
      <!--========== HOME =========-->
      <section class="home bd-grid" id="home">
        <div class="home__data">
          <h1 class="home__title">Bonjour, <br>Je suis <span class="home__title-color">Karl Mekuie</span><br> Développeur<br>Web fullstack</h1>
          <a href="#contact" class="button">Contact</a>
        </div>
        <div class="home__social">
          <a href="https://www.linkedin.com/in/karl-joris-mekuie-m-obiang-a90a27251/" class="home__social-icon"><i class='bx bxl-linkedin' ></i></a>
          <a href="https://app.netlify.com/teams/devon75/overview" class="home__social-icon"><i class='bx bxl-netlify' ></i></a>
          <a href="https://github.com/Devon75" class="home__social-icon"><i class='bx bxl-github'></i></a>
        </div>

        <div class="home__img">
          <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <mask id="mask0" mask-type="alpha">
              <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
            </mask>
            <g mask="url(#mask0)">
              <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
              <image class="home__blob-img" x="50" y="60" href="picture/photo_karl.png" alt="portrait">
            </g>
          </svg>
          
        </div>
      </section>

      <!--========== ABOUT =========-->
      <section class="about section" id="about">
        <h2 class="section-title">A propos de moi</h2>

        <div class="about__container bd-grid">
         <div class="about__img">
            <h2 class="about__subtitle">Karl Mekuie</h2>
            <p class="about__text">23 ans et actuellement en formation BTS SIO option SLAM par l'intermédiaire le CNED. Je vous présente mon portfolio qui retrace mon parcours scolaire.</p>
          </div>
        </div>
      </section>

      <!--========== SKILLS =========-->
      <section class="skills section" id="skills">
        <h2 class="section-title">Compétences</h2>

        <div class="skills__container bd-grid">
          <div>
            <h2 class="skills__subtitle">Compétences professionnelles</h2>
            <p class="skills">Maîtrise du HTML pour la structure, du CSS pour la présentation, et du JavaScript pour l'interaction utilisateur
              et les fonctionnalités dynamiques.<br>Compétent dans plusieurs langages de programmation back-end, tels que PHP, Python, Java et C#.</p>
            
            <div class="skills__data">
              <div class="skills__names">
                <i class='bx bxl-html5'></i>
                <span class="skills__name">HTML5</span>
              </div>

              <div>
                <span class="skills__percentage">95%</span>
              </div>
              
              <div class="skills__bar skills__html"></div>
            </div>
            <div class="skills__data">
              <div class="skills__names">
                <i class='bx bxl-css3' ></i>
                <span class="skills__name">CSS3</span>
              </div>

              <div>
                <span class="skills__percentage">85%</span>
              </div>
              
              <div class="skills__bar skills__css"></div>
            </div>
            <div class="skills__data">
              <div class="skills__names">
                <i class='bx bxl-javascript' ></i>
                <span class="skills__name">JAVASCRIPT</span>
              </div>

              <div>
                <span class="skills__percentage">75%</span>
              </div>
              
              <div class="skills__bar skills__js"></div>
            </div>
            <div class="skills__data">
              <div class="skills__names">
                <i class='bx bxl-java' ></i>
                <span class="skills__name">JAVA</span>
              </div>

              <div>
                <span class="skills__percentage">65%</span>
              </div>
              
              <div class="skills__bar skills__java"></div>
            </div>
          </div>

          <div class="skills__img">
            <img src="picture/photo_karl.png" x="50" y="60" alt="">
          </div>
        </div>
      </section>

      <!--========== WORK =========-->
      <section class="work section" id="work">
        <h2 class="section-title">Mes projets</h2>

        <div class="work__container bd-grid">
          <a href="projets\weathernodeapp\public\index.html" class="work__img">
            <img src="picture/Capture.PNG" alt="application météo">
          </a>
          <a href="projets\taskrecorder\index.html" class="work__img">
            <img src="picture/image2.PNG" alt="enregistreur de tâches">
          </a>
          <a href="projets\quotegenerator\index.html" class="work__img">
            <img src="picture/JS_quote_generator.PNG" alt="générateur de citations">
          </a>
          <a href="projets\animejsbackground\index.html" class="work__img">
            <img src="picture/animeJS.PNG" alt="fond d'écran en animation avec JS">
          </a>
          <a href="projets\froggerjs\index.html" class="work__img">
            <img src="picture/frogger_JS.PNG" alt="jeu du frogger">
          </a>
          <a href="" class="work__img">
            <img src="picture/20230705_121020.jpg" alt="">
          </a>
        </div>
      </section>

      <!--========== CONTACT =========-->
      <section class="contact section" id="contact">
        <h2 class="section-title">Contact</h2>

        <div class="contact__container bd-grid">
          <form method="post" action="http://localhost/ProjetsiteArmee/send_email.php" class="contact__form">
            <input type="text" name="name" placeholder="Name" class="contact__input" required>
            <input type="text" name="email" placeholder="Email" class="contact__input" required>
            <textarea cols="0" rows="10" name="contact" placeholder="Ecrivez votre message" class="contact__input" required></textarea>

            <input type="submit" value="Envoyer" class="contact__button button">
          </form>
        </div>
      </section>
    </main>

    <!--======== FOOTER ==========-->
    <footer class="footer">
      <p class="footer__title">Karl</p>

      <div class="footer__social">
        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" class="footer__icon"><i class='bx bxl-gmail' ></i></a>
        <a href="#" class="footer__icon"><i class='bx bxl-youtube' ></i></a>
        <a href="https://twitter.com/JoRag75" class="footer__icon"><i class='bx bxl-twitter'></i></a>
      </div>
      <p class="footer__copy">&#169; 2024 copyright all right reserved</p>
    </footer>
    
    <!--======== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--======== MAIN JS ==========-->
    <script src="js/main.js"></script>
  </body>
</html>
