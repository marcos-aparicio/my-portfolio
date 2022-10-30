<?php 

require("db.php");
$my_projects = $conn->query('SELECT * FROM github_projects')->fetchAll();

?>
<!doctype html>
<html lang="en">    
<head>
    <title>Marcos Aparicio's Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/92b62ee1cc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header class = "container-fluid " id = "header">
        <nav class="navbar navbar-expand-lg navbar-dark justify-content-between px-5 py-3">
            <span class="col-2 logo">&lt;/&gt;</span>
            <div class = "d-flex flex-column">
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarToggler">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#about">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#languages">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li>
                    </ul>
                </div>
             </div>
        </nav>
        <div class="wave1">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" fill = "#3C78EE">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </header>
    
    <main>
        <section id = "home" class="home container d-flex flex-column justify-content-center align-items-center">
            <article class="text text-center">
                <h1 class="title">Marcos Aparicio</h1>
                <h2 class="sub-title">Web Developer</h2>
            </article>
            <figure class = "d-flex justify-content-center">
                <img src="./images/devLogo.png" alt="Developer Logo" class ="rounded logo-image">
            </figure>
            <div class="social-media d-flex justify-content-center">
                <a href="https://github.com/marcos-aparicio"><i class="fa-brands fa-square-github social-media__icon"></i></a>
                <a href="https://www.linkedin.com/in/marcos-aparicio-74412822b/"><i class="fa-brands fa-linkedin social-media__icon"></i></a>
            </div>
        </section>
        <section id="about" class = "about container-fluid row ">
            <article class="about-me col-md-6 col-12">
                <div class="bubble-cont">
                    <p class="title text-center">About me</p>
                    <img src="./images/bubble1.png" alt="Bubble for Decoration" class = "bubble">
                </div>
                <p class ="about-me__info">I'm passionate about coding. Always looking for the opportunity to learn something more whether is a new programming language, framework or anything that relates to computer science! Been exploring tiling window managers and Vim recently.</p>
            </article>
            <div class="languages col-md-6 col-12 flex-md-column-reverse flex-column d-flex justify-content-evenly" id="languages">
                <article class="languages__info bubble-cont text-center">
                    <img src="./images/bubble2.png" alt="Bubble for Decoration" class = "bubble d-sm-block d-md-block d-lg-block d-xl-block d-xxl-block">
                    <p class="title text-center">Skills</p>
                </article>
                <div class="languages__skills" >
                    <a data-bs-toggle="tooltip" data-bs-title="Javascript, 1st language I learned" ><i class="fa-brands fa-square-js" style="color:#f7e018"></i></a>
                    <a data-bs-toggle="tooltip" data-bs-title="HTML, the structure for websites"><i class="fa-brands fa-html5" style="color:#ff5722"></i></a> 
                    <a data-bs-toggle="tooltip" data-bs-title="CSS, the styles for websites"><i class="fa-brands fa-css3-alt" style="color:#214ce5"></i></a>
                    <a data-bs-toggle="tooltip" data-bs-title="Intermediate usage of SQL"><i class="fa-solid fa-database" style="color:#feb300"></i></a>
                    <a data-bs-toggle="tooltip" data-bs-title="Intermediate usage of PHP"><i class="fa-brands fa-php" style="color:#5B54F2"></i></a>
                    <a data-bs-toggle="tooltip" data-bs-title="Git, version-control software"><i class="fa-brands fa-git-alt" style="color:#E44C30"></i></a>
                    <a data-bs-toggle="tooltip" data-bs-title="Bootstrap, CSS Framework"><i class="fa-brands fa-bootstrap" style="color:#7A09F7"></i></a>
                </div>
            </div>
        </section>
        <section class="projects container" id = "projects">
            <p class="title text-center">Some of my Projects</p>
            <div id="carouselProjects" class="carousel carousel-dark slide mx-auto" data-bs-ride="carousel">
                <div class="carousel-indicators mt-4 pt-4">
                    <!--first element will be active !-->
                    <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
                <?php for($i = 1; $i < count($my_projects);$i++): ?>
                    <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="<?=$i?>" aria-label="Slide <?=$i+1?>"></button>
                <?php endfor ?>
                </div>
                <div class="carousel-inner">
                <?php 
                    $active = 1; 
                    foreach($my_projects as $project): ?>
                    <div class="carousel-item <?php if(1 == $active++) print('active'); ?>">
                        <div class="carousel-item__project d-flex flex-column justify-content-center align-items-center text-center">

                            <h3 class = "text-capitalize"><?= $project['name'] ?></h3>
                            <a href="<?= $project['url']?>" class = "btn btn-primary">See the code!</a>
                            <?php if($project['deploy_url'] != ""): ?>
                                <a href="<?=$project['deploy_url']?>" class = "btn btn-success">See project!</a>
                            <?php endif ?>
                            <p>Language: <?= $project['language'] ?></p>
                            <p>Description: <?= $project['description'] ?></p>
                        </div>

                    </div>
                <?php endforeach ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjects" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselProjects" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        
    </main>
    <footer id = "footer">
        <div class="wave2">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" >
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </footer>
    <script src="./script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>