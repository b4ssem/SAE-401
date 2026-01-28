<?php  
require_once 'db.php';
$req = mysqli_query($link, "SELECT * FROM socials");
$data = mysqli_fetch_assoc($req);
foreach ($data as $key => $value) {
            $icon = ($class === "twitter") ? "bi bi-twitter-x" : "bi bi-$class";
            echo '<a href="' . $url . '" class="' . $class . '" target="_blank">
                    <i class="' . $icon . '"></i>
                  </a>';
          }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title>Bassem MEGHICHE</title>
    </head>
    <body>
        <!--===== HEADER =====-->
       

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Bonjour,<br>je suis <span class="home__title-color">Bassem</span><br> Développeur Web</h1>

                    <a href="assets/pdf/Bassem MEGHICHE.pdf" class="button">Voir mon CV</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/b4ssem/" target="_blank" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://github.com/b4ssem" target="_blank" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="10" y="-10" href="assets/img/profil.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">A propos</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">Je suis Bassem MEGHICHE</h2>
                        <p class="about__text">Développeur web fullstack en formation (BUT2 MMI). J’aime concevoir des expériences simples et efficaces, du design à la logique serveur.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">
                    <div class="skills__title">
                        <h2 class="skills__subtitle">Hardskills</h2>
                        <p class="skills__text">Passionné par la technique autant que par l'expérience utilisateur, je développe mes projets avec une stack moderne et polyvalente</p>
                    </div>     
                    <div>
                        <h3 class="skills__subtitle">Frontend</h3>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-tailwind-css skills__icon'></i> 
                                <span class="skills__name">TailwindCSS</span>
                            </div>
                            <div class="skills__bar skills__tailwind">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-figma skills__icon'></i> 
                                <span class="skills__name">Figma</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skills__container">          
                    <div>
                        <h3 class="skills__subtitle">Backend</h3>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-php skills__icon'></i>
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <svg  xmlns="http://www.w3.org/2000/svg" fill ="#3e6ff4" width="2rem" height="2rem" viewBox="0 0 24 24" class="skills__icon">
                                <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                <path d="M15.44 6.61c.05.08.13.15.18.22s.09.18.13.27a.31.31 0 0 0 .12-.28s0-.08-.07-.12-.1-.08-.15-.12zM5.54 13l-1.12 3.36L3.3 13h-1c-.18 1.44-.29 3-.34 4.61h.7c0-1.35.08-2.57.17-3.67L4 17.58h.59l1.21-3.67c.12 1.15.2 2.37.23 3.67h.77c0-1.39-.16-2.93-.36-4.61zm3.19 4.08a2.9 2.9 0 0 0-.17-.93l-.61-2h-.76L8 16.81a3.2 3.2 0 0 1 .19.79.66.66 0 0 1-.25.5.77.77 0 0 1-.54.19h-.32v.41a1.5 1.5 0 0 0 .47.11 1.66 1.66 0 0 0 1.32-.89 10.4 10.4 0 0 0 1.25-3.72h-.7a12.7 12.7 0 0 1-.69 2.88m10.24-4.11h-.73v4.61h2.19v-.56h-1.46zM17 17.07a2.83 2.83 0 0 0 .54-1.88c0-1.52-.6-2.29-1.8-2.29a1.7 1.7 0 0 0-1.37.58 2.85 2.85 0 0 0-.54 1.88 2.72 2.72 0 0 0 .48 1.78 1.63 1.63 0 0 0 1.31.51 2.4 2.4 0 0 0 .61-.08l1.1.64.3-.52-.85-.41a2 2 0 0 0 .22-.21m-1.3 0a.88.88 0 0 1-.81-.42 2.8 2.8 0 0 1-.28-1.45q0-1.74 1-1.74a.9.9 0 0 1 .82.42 2.9 2.9 0 0 1 .28 1.43c.08 1.18-.28 1.77-.98 1.77zM13 15.33l-1-.56c-.36-.2-.56-.43-.56-.71a.56.56 0 0 1 .21-.43.76.76 0 0 1 .54-.17 2.2 2.2 0 0 1 .89.19l.18-.4a2.1 2.1 0 0 0-1.17-.34 1.48 1.48 0 0 0-1 .35 1.14 1.14 0 0 0-.39.9 1.09 1.09 0 0 0 .52 1l1 .55c.35.2.54.43.54.7a.64.64 0 0 1-.25.52 1 1 0 0 1-.65.18 2.24 2.24 0 0 1-1-.27l-.2.39a2.3 2.3 0 0 0 1.31.43 1.72 1.72 0 0 0 1.16-.37 1.24 1.24 0 0 0 .43-1 1.09 1.09 0 0 0-.56-.96"></path><path d="M21.74 12.89a2.8 2.8 0 0 0-.58-.56c-.17-.12-.56-.29-.64-.5a1.7 1.7 0 0 0 .39-.09c.19-.05.36 0 .55-.09l.27-.07v-.05c-.1-.1-.17-.24-.28-.33a6.3 6.3 0 0 0-.92-.69c-.17-.11-.39-.18-.58-.28s-.17-.05-.21-.1a2.2 2.2 0 0 1-.23-.43c-.16-.31-.32-.65-.46-1s-.16-.43-.28-.64A5.7 5.7 0 0 0 16.6 6a2.5 2.5 0 0 0-.71-.23h-.42a3 3 0 0 1-.26-.19c-.31-.21-1.13-.64-1.37-.07-.15.37.23.72.36.91a3 3 0 0 1 .28.41c0 .1 0 .2.09.3a7 7 0 0 0 .29.75 4 4 0 0 0 .2.34c0 .06.13.09.14.19a1.7 1.7 0 0 0-.12.42 2.38 2.38 0 0 0 .16 1.87c.09.14.3.45.58.33s.2-.42.27-.7v-.15c.08.15.15.3.23.46a3.2 3.2 0 0 0 .72.75c.13.1.24.27.41.33a1 1 0 0 0-.13-.11 3 3 0 0 1-.29-.33 7.4 7.4 0 0 1-.63-1l-.2-.58c0-.07 0-.17-.09-.2a1.7 1.7 0 0 0-.27.38 3 3 0 0 0-.16.84c-.18 0-.24-.23-.31-.38a2.5 2.5 0 0 1 0-1.49c0-.12.21-.49.14-.6s-.14-.16-.2-.25a1.8 1.8 0 0 1-.2-.35c-.14-.32-.2-.66-.35-1a2.4 2.4 0 0 0-.28-.43 3 3 0 0 1-.3-.44.27.27 0 0 1 0-.23.1.1 0 0 1 .08-.07c.07-.06.28 0 .35.05a3 3 0 0 1 .55.28 1 1 0 0 0 .27.19h.11c.18 0 .38 0 .55.06a4 4 0 0 1 .8.39 5 5 0 0 1 1.74 1.9c.07.13.09.25.16.38s.26.55.37.82a4 4 0 0 0 .4.75c.08.11.42.17.57.24s.28.09.38.15l.56.38c.09.07.37.21.38.32a2.7 2.7 0 0 0-1.08.15c-.08 0-.21 0-.23.14s.05.12.09.18a1.6 1.6 0 0 0 .29.34l.36.26c.22.13.46.21.67.34s.25.18.37.26.1.12.18.15c0-.05-.05-.12-.09-.18zm-.95 4.22h.16v.47h.13v-.47h.16v-.09h-.45zm.9.29-.16-.38h-.17v.56h.11v-.43h.01l.16.43h.08l.17-.43v.43H22v-.56h-.17z"></path>
                                </svg> 
                                <span class="skills__name">MySQL</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-python skills__icon'></i> 
                                <span class="skills__name">Python</span>
                            </div>
                            <div class="skills__bar skills__tailwind">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Projets</h2>

                <div class="work__container">
        <div class="project-card">
          <img src="images/Cleveroad.jpg" alt="E-Commerce Website">
          <h3>RadarFR - Application interactive JS</h3>
          <p>Application interactive en Javascript permettant de visualiser sur une carte les radars en France. Utilisation de l'API fetch.</p>
          <div class="skills">
            <a href="#">HTML</a>
            <a href="#">TailwindCSS</a>
            <a href="#">JavaScript</a>
            <a href="#">Leaflet</a>
            <a href="#">Google Fonts</a>
            <a href="#">Fontawesome</a>
          </div>
          <div class="btns">
            <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18"  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path fill-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.6 9.6 0 0 1 2.496-.336 9.6 9.6 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2" clip-rule="evenodd"></path>
</svg> GitHub</a>
            <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18  "  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path d="M9.88 18.36a3 3 0 0 1-4.24 0 3 3 0 0 1 0-4.24l2.83-2.83-1.41-1.41-2.83 2.83a5.003 5.003 0 0 0 0 7.07c.98.97 2.25 1.46 3.54 1.46s2.56-.49 3.54-1.46l2.83-2.83-1.41-1.41-2.83 2.83Zm2.83-14.14L9.88 7.05l1.41 1.41 2.83-2.83a3 3 0 0 1 4.24 0 3 3 0 0 1 0 4.24l-2.83 2.83 1.41 1.41 2.83-2.83a5.003 5.003 0 0 0 0-7.07 5.003 5.003 0 0 0-7.07 0Z"></path><path d="m16.95 8.46-.71-.7-.7-.71-4.25 4.24-4.24 4.25.71.7.7.71 4.25-4.24z"></path>
</svg>  Live Demo</a>
          </div>
        </div>
      <div class="project-card">
        <img src="images/Capture d'écran 2025-10-22 182207.png" alt="Portfolio Website">
        <h3>ApiGen</h3>
        <p>Programme python permettant de récupérer une information sur un site web et la tester sur l'api de ce dernier jusqu'à ce que l'api renvoie un code "200". Utilisation de Selenium</p>
        <div class="skills">
          <a href="#">Python</a>
          <a href="#">Selenium</a>
        </div>
        <div class="btns">
          <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18"  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path fill-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.6 9.6 0 0 1 2.496-.336 9.6 9.6 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2" clip-rule="evenodd"></path>
</svg> GitHub</a>
            <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18  "  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path d="M9.88 18.36a3 3 0 0 1-4.24 0 3 3 0 0 1 0-4.24l2.83-2.83-1.41-1.41-2.83 2.83a5.003 5.003 0 0 0 0 7.07c.98.97 2.25 1.46 3.54 1.46s2.56-.49 3.54-1.46l2.83-2.83-1.41-1.41-2.83 2.83Zm2.83-14.14L9.88 7.05l1.41 1.41 2.83-2.83a3 3 0 0 1 4.24 0 3 3 0 0 1 0 4.24l-2.83 2.83 1.41 1.41 2.83-2.83a5.003 5.003 0 0 0 0-7.07 5.003 5.003 0 0 0-7.07 0Z"></path><path d="m16.95 8.46-.71-.7-.7-.71-4.25 4.24-4.24 4.25.71.7.7.71 4.25-4.24z"></path>
</svg>  Live Demo</a>
        </div>
      </div>

      <div class="project-card">
        <img src="images/Weather Forecast Dashboard.jpg" alt="Weather App">
        <h3>Weather App</h3>
        <p>Responsive app showing real-time weather data using API integration.</p>
        <div class="skills">
          <a href="#">HTML</a>
          <a href="#">CSS</a>
          <a href="#">API</a>
        </div>
        <div class="btns">
          <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18"  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path fill-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.6 9.6 0 0 1 2.496-.336 9.6 9.6 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2" clip-rule="evenodd"></path>
</svg> GitHub</a>
            <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18  "  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path d="M9.88 18.36a3 3 0 0 1-4.24 0 3 3 0 0 1 0-4.24l2.83-2.83-1.41-1.41-2.83 2.83a5.003 5.003 0 0 0 0 7.07c.98.97 2.25 1.46 3.54 1.46s2.56-.49 3.54-1.46l2.83-2.83-1.41-1.41-2.83 2.83Zm2.83-14.14L9.88 7.05l1.41 1.41 2.83-2.83a3 3 0 0 1 4.24 0 3 3 0 0 1 0 4.24l-2.83 2.83 1.41 1.41 2.83-2.83a5.003 5.003 0 0 0 0-7.07 5.003 5.003 0 0 0-7.07 0Z"></path><path d="m16.95 8.46-.71-.7-.7-.71-4.25 4.24-4.24 4.25.71.7.7.71 4.25-4.24z"></path>
</svg>  Live Demo</a>
        </div>
    </div>

    <div class="project-card">
      <img src="images/WordPress dashboard design concept.jpg" alt="Blog Website">
      <h3>Blog Website</h3>
      <p>Clean and simple blogging platform with markdown support.</p>
      <div class="skills">
        <a href="#">HTML</a>
        <a href="#">Tailwind</a>
        <a href="#">JavaScript</a>
      </div>
      <div class="btns">
        <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18"  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path fill-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.6 9.6 0 0 1 2.496-.336 9.6 9.6 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2" clip-rule="evenodd"></path>
</svg> GitHub</a>
            <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18  "  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path d="M9.88 18.36a3 3 0 0 1-4.24 0 3 3 0 0 1 0-4.24l2.83-2.83-1.41-1.41-2.83 2.83a5.003 5.003 0 0 0 0 7.07c.98.97 2.25 1.46 3.54 1.46s2.56-.49 3.54-1.46l2.83-2.83-1.41-1.41-2.83 2.83Zm2.83-14.14L9.88 7.05l1.41 1.41 2.83-2.83a3 3 0 0 1 4.24 0 3 3 0 0 1 0 4.24l-2.83 2.83 1.41 1.41 2.83-2.83a5.003 5.003 0 0 0 0-7.07 5.003 5.003 0 0 0-7.07 0Z"></path><path d="m16.95 8.46-.71-.7-.7-.71-4.25 4.24-4.24 4.25.71.7.7.71 4.25-4.24z"></path>
</svg>  Live Demo</a>
      </div>
    </div>

    <div class="project-card">
      <img src="images/Game Dashboard Design.jpg" alt="Game Landing Page">
      <h3>Game Landing Page</h3>
      <p>Landing page for a game with animations and parallax effects.</p>
      <div class="skills">
        <a href="#">HTML</a>
        <a href="#">CSS</a>
        <a href="#">GSAP</a>
      </div>
      <div class="btns">
        <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18"  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path fill-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.6 9.6 0 0 1 2.496-.336 9.6 9.6 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2" clip-rule="evenodd"></path>
</svg> GitHub</a>
            <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18  "  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path d="M9.88 18.36a3 3 0 0 1-4.24 0 3 3 0 0 1 0-4.24l2.83-2.83-1.41-1.41-2.83 2.83a5.003 5.003 0 0 0 0 7.07c.98.97 2.25 1.46 3.54 1.46s2.56-.49 3.54-1.46l2.83-2.83-1.41-1.41-2.83 2.83Zm2.83-14.14L9.88 7.05l1.41 1.41 2.83-2.83a3 3 0 0 1 4.24 0 3 3 0 0 1 0 4.24l-2.83 2.83 1.41 1.41 2.83-2.83a5.003 5.003 0 0 0 0-7.07 5.003 5.003 0 0 0-7.07 0Z"></path><path d="m16.95 8.46-.71-.7-.7-.71-4.25 4.24-4.24 4.25.71.7.7.71 4.25-4.24z"></path>
</svg>  Live Demo</a> 
      </div>
    </div>

    <div class="project-card">
      <img src="images/Task manager app.jpg" alt="Task Manager">
      <h3>Task Manager</h3>
      <p>Task tracking web app with CRUD features and clean UI.</p>
      <div class="skills">
        <a href="#">HTML</a>
        <a href="#">CSS</a>
        <a href="#">JS</a>
      </div>
      <div class="btns">
        <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18"  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path fill-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.6 9.6 0 0 1 2.496-.336 9.6 9.6 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2" clip-rule="evenodd"></path>
</svg> GitHub</a>
            <a href="#" class="btn"><svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18  "  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path d="M9.88 18.36a3 3 0 0 1-4.24 0 3 3 0 0 1 0-4.24l2.83-2.83-1.41-1.41-2.83 2.83a5.003 5.003 0 0 0 0 7.07c.98.97 2.25 1.46 3.54 1.46s2.56-.49 3.54-1.46l2.83-2.83-1.41-1.41-2.83 2.83Zm2.83-14.14L9.88 7.05l1.41 1.41 2.83-2.83a3 3 0 0 1 4.24 0 3 3 0 0 1 0 4.24l-2.83 2.83 1.41 1.41 2.83-2.83a5.003 5.003 0 0 0 0-7.07 5.003 5.003 0 0 0-7.07 0Z"></path><path d="m16.95 8.46-.71-.7-.7-.71-4.25 4.24-4.24 4.25.71.7.7.71 4.25-4.24z"></path>
</svg>  Live Demo</a>
      </div>
    </div>
  </div>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="" class="contact__form">
                        <input type="text" placeholder="Nom" class="contact__input">
                        <input type="mail" placeholder="Email" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <button type="button" class="btn">Envoyer <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
fill="currentColor" viewBox="0 0 24 24" >
<!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
<path d="M20.56 3.17c-.29-.2-.67-.23-.99-.08l-17 8.01a.999.999 0 0 0 .03 1.82L8 15.28V22l5.84-4.17 4.76 2.08c.13.06.26.08.4.08.18 0 .36-.05.52-.15a.99.99 0 0 0 .48-.79l1-15c.02-.35-.14-.69-.43-.89Zm-2.47 14.34-5.21-2.28L16 9l-7.65 4.25-2.93-1.28 13.47-6.34-.79 11.89Z"></path>
</svg></button>
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">B4ssem</p>
            <div class="footer__social">
                <a href="https://www.linkedin.com/in/b4ssem/" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="https://github.com/b4ssem" class="footer__icon"><i class='bx bxl-github' ></i></a>
            </div>
            <p class="footer__copy">&#169; Bedimcode. All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
