<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jake Wood | Front-End Developer</title>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar container">
        <a href="">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg" alt="site logo">
        </a>
        <ul class="navbar__nav-links">
            <li class="navbar__nav-link">
                <a href="">Work</a>
            </li>
            <li class="navbar__nav-link">
                <a href="">About</a>
            </li>
            <li class="navbar__nav-link">
                <a href="">Contact</a>
            </li>
            <li class="navbar__nav-link">
                <a target="_blank" href="">Resume</a>
            </li>
        </ul>
        <ul role="list" class="navbar__social-links">
            <li class="navbar__social-link">
                <a href="#">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/linkedin.svg" alt="linkedin logo">
                </a>
            </li>
            <li class="navbar__social-link">
                <a href="#">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/github.svg" alt="github logo">
                </a>
            </li>
        </ul>
    </nav>
    <header class="hero container">
        <h1 class="hero__main-heading">
            <span>Hello. I'm Jake.</span>
            <span>A Web Developer.</span>
        </h1>
        <p class="hero__description">Who loves nothing more than designing and developing beautiful, engaging websites and applications.</p>
        <a href="">
            <button class="hero__btn primary-btn">View My Work</button>
        </a>
        <div class="hero__planet hero__planet--one"></div>
        <div class="hero__planet hero__planet--two"></div>
        <div class="hero__planet hero__planet--three"></div>
    </header>
