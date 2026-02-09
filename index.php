<?php  
require_once 'includes/core/db.php';
require_once 'includes/socials/socials_get.php';
require_once 'includes/navbar/navbar_get.php';
require_once 'includes/navbar/navbar_get_brand.php';
require_once 'includes/navbar/navbar_brand.php';
require_once 'includes/categories/categories_get.php';
require_once 'includes/skills/skills_get.php';

$link = getDbConnection();
$result = getAllSocials($link);
$navbar_list = getNavbarLinks($link);
$brandData = getNavbarBrand($link);
$site_brand = "";
if ($brandData && !empty($brandData['brand'])) {
    $site_brand = $brandData['brand'];
}
$categories = getCategories($link);
$skills_list = getSkills($link);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <!-- Basic Icons -->
        <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet">
        <!-- Filled Icons -->
        <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">
        <!-- Brand Icons -->
        <link href="https://cdn.boxicons.com/3.0.8/fonts/brands/boxicons-brands.min.css" rel="stylesheet">

        <title><?php echo htmlspecialchars($site_brand); ?> - Développeur Web</title>
    </head>
    <body>
        <!--===== HEADER =====-->
       <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo"><?php echo htmlspecialchars($site_brand); ?></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <?php 
                                $is_first = true;

                                foreach ($navbar_list as $nav) {
                                    $label = htmlspecialchars($nav['label']);
                                    $target = htmlspecialchars($nav['target']);
                                    
                                    if ($is_first) {
                                        $active_class = "active-link";
                                        $is_first = false;
                                    } else {
                                        $active_class = "";
                                    }

                                    echo '<li class="nav__item">
                                            <a href="' . $target . '" class="nav__link ' . $active_class . '">' . $label . '</a>
                                        </li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Bonjour,<br>je suis <span class="home__title-color"><?php echo htmlspecialchars($site_brand); ?></span><br> Développeur Web</h1>

                    <a href="assets/pdf/Bassem MEGHICHE.pdf" class="button">Voir mon CV</a>
                </div>

                <div class="home__social">
                    <?php 
                        foreach ($result as $row) {
                            $social_link = htmlspecialchars($row["link"]);
                            $name = htmlspecialchars($row["icon_class"]);
                            echo '<a href="' . $social_link . '" class="home__social-icon" target="_blank"><i class="' . $name . '"></i></a>';
                        }
                    ?>   
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
                        <img src="assets/img/about.jpg" alt="logo B4SSEM, texte blanc en majuscules sur un fond noir">
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
                        <?php 
                        
                        foreach($categories as $category){
                            echo '<div>
                                <h3 class="skills__subtitle">'. $category['title'] . '</h3>';
                            foreach($skills_list as $skill){
                                if ($skill['category_id'] == $category['id']){
                                    echo '
                                    <div class="skills__data">
                                        <div class="skills__names">
                                            <i class="'. $skill['icon_class'] .' skills__icon"></i>
                                            <span class="skills__name">'. $skill['name'] .'</span>
                                        </div>
                                        <div class="skills__bar" style="width: '. $skill['percentage'] .'%; background-color: var(--first-color); height: .25rem; border-radius: .5rem;">
                                        </div>
                                        <div>
                                            <span class="skills__'. $skill['name'] .'">'. $skill['percentage'] .'%</span>
                                        </div>
                                    </div>';
                                }
                            }
                            echo '</div>';
                        }
                        
                        ?>
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
