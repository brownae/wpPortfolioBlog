<!doctype html>
<html class="no-js" lang="en">
 <head>
    <!-- title and meta -->
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="description" name="Aaron Brown is a seattle based front end web developer">
    <!-- css -->
  <!--  <link rel="stylesheet" href="css/base.css"> -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nav.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/m_style.css">

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

<!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
   <?php wp_head(); ?>
</head>

<body>
<header>
<div id="cssmenu" class="align-center">
<ul>
   <li><a href="http://brownae.com/index.php"><span>Home</span></a></li>
   <li><a href="http://brownae.com/index.php#portfolio"><span>Portfolio</span></a></li>
   <li><a href="http://www.blog.brownae.com"><span>Blog</span></a></li>
   <li><a href="http://www.scc.brownae.com/seattlecentral/web205/a-brown-web-resume.pdf"><span>Resume</span></a></li>
   <li><a href="http://brownae.com/index.php#contact"><span>Contact</span></a></li>

   <li class="last">
    <a href="https://github.com/brownae"><span><img src="<?php echo get_template_directory_uri(); ?>/images/icons/github_badge.svg" alt="Github"></span></a>
    <a href="https://www.linkedin.com/in/aaron-brown-34b15b46"><span><img src="<?php echo get_template_directory_uri(); ?>/images/icons/LinkedIn.svg" alt="LinkedIn"></span></a>
    <a href="https://twitter.com/ABinDXB"><span><img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter.svg" alt="Twitter"></span></a>
    </li>
</ul>
</div>
</header>
