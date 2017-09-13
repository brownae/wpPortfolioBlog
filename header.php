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
   <li><a href="http://browniewd.com/index.php"><span>Home</span></a></li>
   <li><a href="http://browniewd.com/index.php#portfolio"><span>Portfolio</span></a></li>
   <li><a href="http://www.blog.browniewd.com"><span>Blog</span></a></li>
   <li><a href="https://indd.adobe.com/view/1bc7547d-3965-4a7b-86ce-277aa888379c"><span>Resume</span></a></li>
   <li><a href="http://browniewd.com/index.php#contact"><span>Contact</span></a></li>

   <li class="last">
    <a href="https://github.com/brownae" target="_blank">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
        <path id="Github" fill="#fff" d="M16 5.343c-6.196 0-11.219 5.023-11.219 11.219 0 4.957 3.214 9.162 7.673 10.645 0.561 0.103 0.766-0.244 0.766-0.54 0-0.267-0.010-1.152-0.016-2.088-3.12 0.678-3.779-1.323-3.779-1.323-0.511-1.296-1.246-1.641-1.246-1.641-1.020-0.696 0.077-0.682 0.077-0.682 1.126 0.078 1.72 1.156 1.72 1.156 1.001 1.715 2.627 1.219 3.265 0.931 0.102-0.723 0.392-1.219 0.712-1.498-2.49-0.283-5.11-1.246-5.11-5.545 0-1.226 0.438-2.225 1.154-3.011-0.114-0.285-0.501-1.426 0.111-2.97 0 0 0.941-0.301 3.085 1.15 0.894-0.25 1.854-0.373 2.807-0.377 0.953 0.004 1.913 0.129 2.809 0.379 2.14-1.453 3.083-1.15 3.083-1.15 0.613 1.545 0.227 2.685 0.112 2.969 0.719 0.785 1.153 1.785 1.153 3.011 0 4.31-2.624 5.259-5.123 5.537 0.404 0.348 0.761 1.030 0.761 2.076 0 1.5-0.015 2.709-0.015 3.079 0 0.299 0.204 0.648 0.772 0.538 4.455-1.486 7.666-5.69 7.666-10.645 0-6.195-5.023-11.219-11.219-11.219z"></path>
        </svg>
    </a>

    <a href="https://www.linkedin.com/in/aaron-brown-34b15b46" target="_blank">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 36.1 35.9" style="enable-background:new 0 0 36.1 35.9;" xml:space="preserve">
            <style type="text/css">
        	    .st0{fill:#fff;}
            </style>
            <title>Asset 2</title>

			<path id="LinkedIn" class="st0" d="M30.7,3.3H5.1c-1.2,0-2.2,0.9-2.2,2.1c0,0,0,0,0,0v25.7c0,1.2,1,2.2,2.2,2.2
				c0,0,0,0,0,0h25.6c1.2,0,2.2-0.9,2.2-2.1c0,0,0,0,0,0V5.5C32.9,4.3,31.9,3.3,30.7,3.3C30.7,3.3,30.7,3.3,30.7,3.3z M12,28.4
				H7.4V14.9H12V28.4z M9.7,13L9.7,13c-1.3,0-2.4-1.1-2.3-2.4c0-1.3,1.1-2.4,2.4-2.3c1.3-0.1,2.4,0.8,2.6,2.1
				c0.1,1.3-0.8,2.4-2.1,2.6C10,13,9.9,13,9.7,13L9.7,13z M28.3,28.4h-4.5v-7.2c0-1.8-0.7-3.1-2.3-3.1c-1,0-2,0.7-2.3,1.6
				C19,20.1,19,20.5,19,20.9v7.6h-4.5c0,0,0.1-12.3,0-13.5H19v1.9c0.8-1.4,2.4-2.3,4.1-2.2c3,0,5.2,1.9,5.2,6.1V28.4z M19,16.8
				L19,16.8L19,16.8z"/>
        </svg>
    </a>
    <a href="https://twitter.com/ABinDXB" target="_blank">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 33.3 33.3" style="enable-background:new 0 0 33.3 33.3;" xml:space="preserve">
        <style type="text/css">
        	.st0{fill:#fff;}
        </style>
        <title>Asset 3</title>
			<path id="Twitter" class="st0" d="M24.1,24.1h-7.4c-2,0-3.7-1.6-3.7-3.7c0,0,0,0,0,0v-2.6h10.5c1.9,0,3.5-1.6,3.5-3.5
				c0-1.9-1.6-3.5-3.5-3.5H12.9V5.4c0-1-0.4-2-1.1-2.6C11.2,2,10.2,1.6,9.2,1.6c-1,0-2,0.4-2.7,1.1C5.8,3.4,5.4,4.4,5.5,5.4v15
				c0,3,1.1,5.8,3.3,7.9c2.1,2.2,4.9,3.4,7.9,3.3h7.4c2.1,0,3.7-1.7,3.7-3.8c0-1-0.4-1.9-1.1-2.6C26,24.5,25.1,24.1,24.1,24.1z"/>
        </svg>
    </a>
    </li>
</ul>
</div>
</header>
