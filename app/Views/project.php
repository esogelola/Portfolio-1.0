<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <title><?= $project['project_name'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"ref="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    

    <link rel="stylesheet" href="<?= base_url() ?>/static/css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="<?= base_url() ?>/static/css/cayman.css">
    <style>
    nav a{
      color: black !important;
    }
    nav a:hover{
    color: #f44336 !important;
    text-decoration: none !important;
    outline: none !important;
    }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg  main-nav nav-down " id="mainNav">
        <div class="container-fluid">

            <!--<img src="static/img/" alt="" class="img-fluid"> -->
            <a class="navbar-brand" href="<?= base_url('/') ?>#">E/S</a>


            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-align-justify"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-main">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" data-scroll href="<?= base_url('/') ?>#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" data-scroll href="<?= base_url('/') ?>#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" target="_blank" data-scroll href="<?= base_url('/') ?>static/Emmanuel-Sogelola-Resume.pdf">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" data-scroll href="<?= base_url('/') ?>#Contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-header">
      <h1 class="project-name"><?= $project['project_name'] ?></h1>
      <h2 class="project-tagline"><?= $project['project_subtitle'] ?></h2>
      <a href="<?= prep_url($project['github_link']) ?>" target="_blank" class="btn  <?= $project['github_link'] == ' ' || $project['github_link'] == '' ? 'd-none' : '' ; ?>">View on GitHub</a>
      <a href="<?= prep_url($project['github_zip_link']) ?>" target="_blank" class="btn  <?= $project['github_zip_link'] == ' ' || $project['github_zip_link'] == '' ? 'd-none' : '' ; ?>">Download .zip</a>
      <a  href="<?= prep_url($project['github_tarball_link']) ?>" target="_blank" class="btn <?= $project['github_tarball_link'] == ' ' || $project['github_tarball_link'] == '' ? 'd-none' : '' ; ?>">Download .tar.gz</a>
    </section>

    <section class="main-content">
        
      <?= $description ?>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/5.2.3/shuffle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="https://raw.githubusercontent.com/creativelive/appear/master/dist/appear.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
        <script src="<?= base_url('/') ?>/static/js/main.js"></script>
      <footer class="site-footer">
        <span class="site-footer-owner">Emmanuel Sogelola.</span>
        <span class="site-footer-credits">This page theme was created by <a href="https://github.com/jasonlong">jasonlong</a></span>
      </footer>

    </section>

  </body>
</html>