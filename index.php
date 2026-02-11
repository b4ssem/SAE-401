<?php  
require_once 'includes/core/db.php';
require_once 'includes/socials/socials_get.php';
require_once 'includes/navbar/navbar_get.php';
require_once 'includes/navbar/navbar_get_brand.php';
require_once 'includes/navbar/navbar_brand.php';
require_once 'includes/categories/categories_get.php';
require_once 'includes/skills/skills_get.php';
require_once 'includes/projects/projects_get.php';
require_once 'includes/form/form_get.php';

$link = getDbConnection();
$result = getAllSocials($link);
$navbar_list = getNavbarLinks($link);
$brandData = getNavbarBrand($link);
$site_brand = "";
if ($brandData && !empty($brandData['brand'])) {
    $site_brand = $brandData['brand'];
}
$categories = getCategories($link);
$forms_list = getForm($link);
$skills_list = getSkills($link);
$projects_list = getProjects($link);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet">
        <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">
        <link href="https://cdn.boxicons.com/3.0.8/fonts/brands/boxicons-brands.min.css" rel="stylesheet">

        <title><?php echo htmlspecialchars($site_brand); ?> - Développeur Web</title>
    </head>
    <body>
       <header class="l-header">
            <nav class="nav bd-container">
                <div>
                    <a href="#" class="nav__logo"><?php echo htmlspecialchars($site_brand); ?></a>
                </div>

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

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
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

            <section class="about section" id="about">
                <h2 class="section-title">A propos</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="logo B4SSEM, texte blanc en majuscules sur un fond noir">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">Je suis Bassem MEGHICHE</h2>
                        <p class="about__text">Développeur web fullstack en formation (BUT2 MMI). J'aime concevoir des expériences simples et efficaces, du design à la logique serveur.</p>           
                    </div>                                   
                </div>
            </section>

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

            <section class="work section" id="work">
                <h2 class="section-title">Projets</h2>
                <div class="work__container bd-grid">
                <?php 
                
                foreach($projects_list as $project){

                    $tech_stack = explode(", ", $project['tech_stack']);
                    $stack_html = "";
                    foreach($tech_stack as $stack){
                        $stack_html .= '<a href="#">'. $stack .'</a>';
                    }
                    $github_btn = "";
                    $demo_btn = "";
                    if (!empty($project['github_url'])){
                        $github_btn = '<a href="'. $project['github_url'] .'" target="_blank" class="btn"><i class="bxl bx-github"></i> GitHub</a>';
                    }
                    if(!empty($project['demo_url'])){
                        $demo_btn = '<a href="'. $project['demo_url'] .'" target="_blank" class="btn"><i class="bx bx-link"></i> Live Demo</a>';
                    }
                     
                    echo '
                    <div class="project-card">
                        <h3>'. $project['title'] .'</h3>
                        <img src="'. $project['image_url'] .'" alt="E-Commerce Website">
                        <div class="project-card-text">
                            <p>'. $project['description'] .'</p>
                            <div class="skills">
                                '. $stack_html .'
                            </div>
                        </div>
                        <div class="btns">
                            '. $github_btn .'
                            '. $demo_btn .'
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
            </section>

            <section class="contact__section" id="contact">
                <h2 class="section-title">Contact</h2>
                <div class="contact__data bd-grid">
                    <h3 class="contact__subtitle">Parlons de votre projet</h3>
                    <p class="contact__text">Vous avez une idée de projet ou une opportunité professionnelle ? N'hésitez pas à me contacter pour en discuter !</p>
                </div>
                <div class="contact__container bd-grid">
                    <div>
                        <p><span>*</span>Champ requis</p>
                        <form action="" class="contact__form">
                            <?php 
                            
                            foreach($forms_list as $form){
                                $required_attr = ($form['is_required'] == 1) ? 'required' : '';
                                $field_html = '';
                                if ($form['type'] === 'textarea' && $required_attr === 'required') {
                                    $field_html = '
                                    <label><span>* </span>'. htmlspecialchars($form['label']) .'</label>
                                    <textarea name="'. htmlspecialchars($form['name_attribute']) .'" cols="0" rows="10" class="contact__input" placeholder="'. htmlspecialchars($form['label']) .'" '. $required_attr .'></textarea>';
                                } elseif ($form['type'] === 'textarea') {
                                    $field_html = '
                                    <label>'. htmlspecialchars($form['label']) .'</label>
                                    <textarea name="'. htmlspecialchars($form['name_attribute']) .'" cols="0" rows="10" class="contact__input" placeholder="'. htmlspecialchars($form['label']) .'"></textarea>';
                                } elseif ($required_attr === 'required') {
                                    $field_html = '
                                    <label><span>* </span>'. htmlspecialchars($form['label']) .'</label>
                                    <input type="'. htmlspecialchars($form['type']) .'" name="'. htmlspecialchars($form['name_attribute']) .'" class="contact__input" placeholder="'. htmlspecialchars($form['label']) .'" '. $required_attr .'>';
                                }
                                else {
                                    $field_html = '
                                    <label><span>* </span>'. htmlspecialchars($form['label']) .'</label>
                                    <input type="'. htmlspecialchars($form['type']) .'" name="'. htmlspecialchars($form['name_attribute']) .'" class="contact__input" placeholder="'. htmlspecialchars($form['label']) .'" '. $required_attr .'>';
                                }
                                echo $field_html;
                            }

                            ?>
                            <button type="submit" class="btn">Envoyer <i class='bx bx-paper-plane'></i></button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <p class="footer__title">B4ssem</p>
            <div class="footer__social">
                <a href="https://www.linkedin.com/in/b4ssem/" class="footer__icon"><i class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/b4ssem" class="footer__icon"><i class='bx bxl-github'></i></a>
            </div>
            <p class="footer__copy">&#169; Bedimcode. All rigths reserved</p>
        </footer>

        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>