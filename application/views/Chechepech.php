<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="application-name" content="Portfolio Cheche Pech">
    <meta name="description" content="A website portfolio of my lastest projects, as web developer and designer, I work whith php, python and ruby on rails also I make small graphic designs">
    <meta name="keywords" content="HTML5,CSS3,JavaScript,Python,PHP,Ruby on Rails,SASS,Grunt,Gulp">
    <meta name="author" content="Cheche Pech, chepseyer@gmail.com">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Cheche Pech | Portfolio | Web Developer and Designer</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- [if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif] -->
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"/>
<link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css');?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>"/>
</head>
<body>
    <a class="top-link hide" href="#" id="js-top"><i class="fas fa-rocket fa-1x irotate" aria-hidden="true"></i></a>
       <header>
            <h2><a href="">CP</a></h2>
            <nav>
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="#work">PORTFOLIO</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
        </header>
        <section class="banner-area">
            <div class="img-area"></div>
            <h1>CHECH&Eacute; PECH</h1>
            <h2>Web Developer & Designer</h2>
            <a href="#contact" class="btn">CONTACT ME</a>
        </section>
        <section id="about" class="about-area">
            <h3 class="header-text">ABOUT ME</h3>
            <p>Hi, I'm Chech&eacute; I'm full-stack developer specialised in frontend and backend for complex scalable web apps.</p>
        </section>
        <section id="services" class="services-area">
            <h3 class="header-text">MY SKILLS</h3>
            <p>I have more than 5 years experience building web applications beautiful, below is quick overview of my tecnical skills sets and tools I use.</p>
            <ul class="grid">
                <li>
                    <i class="fa fa-laptop fa-2x"></i>
                    <h5>WEB DESIGN</h5>
                    <p>HTML5, CSS3, Javascript, preprocessor SASS, tools Gulp/Grunt, frameworks bootstrap;  for exciting interactive sites!</p>
                </li>
                <li>
                    <i class="fa fa-cogs fa-2x"></i>
                    <h5>WEB DEVELOPMENT</h5>
                    <p>PHP, Python, Ruby on Rails.</p>
                </li>
                <li>
                    <i class="fa fa-palette fa-2x"></i>
                    <h5>GRAPHIC DESIGN</h5>
                    <p>Graphic Design Software: Illustrator and Photoshop, creation of image vectors, web illustrations, graphics.</p>
                </li>
            </ul>
        </section>
        <section id="work" class="work-area">
            <h3 class="header-text">MY WORKS</h3>
            <p>Here some of my projects</p>
            <ul class="grid">
                <li><img src="<?php echo base_url('assets/img/project.jpg');?>" alt=""></li>
                <li><img src="<?php echo base_url('assets/img/project-2.jpg');?>" alt=""></li>
                <li><img src="<?php echo base_url('assets/img/project-3.jpg');?>" alt=""></li>
                <li><img src="<?php echo base_url('assets/img/aside.jpg');?>" alt=""></li>
            </ul>
        </section>
        <section class="newsletter">
            <h3 class="header-text">SUBSCRIBE</h3>
            <p>Subscribe for exclusive bonuses, free tips and news</p>
            <form action="<?php echo base_url('Portfolio/subscribe');?>" method="post">
                <input type="email" name="email-subs" id="email-text" placeholder="Enter your email address" required>
                <input type="submit" name="submit" id="btn-submit" value="SUBSCRIBE">
            </form>
        </section>
        <section class="contact" id="contact">
            <h3 class="header-text">CONTACT ME</h3>
            <p>Got a question? I'd love hear from you, Send me a message and I'll respond as soon as posible</p>
            <?php echo validation_errors('<span class="error">', '</span>');?>
            <form action="<?php echo base_url('Portfolio/contact');?>" method="post">
                <input type="text" name="name" id="name-txt" placeholder="Enter your name" required><br>
                <input type="email" name="email" id="email-txt" placeholder="Enter your email address" required><br>
                <textarea name="message" id="message-txt" rows="10" draggable="false" placeholder="&nbsp;&nbsp;Start typing your message..."></textarea>
                <input type="submit" id="submit-btn" value="SEND">
            </form>
            <ul class="grid">
                <li>
                    <i class="fab fa-whatsapp fa-2x"></i>
                    <p><a href="https://wa.me/+5219995053419?text=Hello!,%20I%27m%20interested%20in...">PM me</a></p>
                </li>
                <li>
                    <i class="fa fa-envelope fa-2x"></i>
                    <p><a href="mailto:bboy_rys@hotmail.com?subject=Hello%20Cheche%20Pech!">chepseyer[at]gmail[dot]com</a></p>
                </li>
                <li>
                    <i class="fab fa-skype fa-2x"></i>
                    <p><a href="skype:pech_cheche?chat">PM me</a></p>
                </li>
            </ul>            
        </section>
        <section class="social" id="social-area">
            <h3 class="header-text">I AM SOCIAL</h3>
            <ul class="grid">
                <li>                    
                    <a href="https://www.linkedin.com/in/chechepech" target="_blank">
                        <i class="fab fa-linkedin-in fa-1x"></i>
                    </a>
                </li>
                <li>                    
                    <a href="https://github.com/chechepech" target="_blank">
                        <i class="fab fa-github fa-1x"></i>
                    </a>
                </li>
                <li>                    
                    <a href="https://www.facebook/chechepech" target="_blank">
                        <i class="fab fa-facebook-f fa-1x"></i>
                    </a>
                </li>
                <li>                    
                    <a href="https://twitter.com/chechepech" target="_blank">
                        <i class="fab fa-twitter fa-1x"></i>
                    </a>
                </li>
                <li>                    
                    <a href="https://www.instagram.com/cheche_pech" target="_blank">
                        <i class="fab fa-instagram fa-1x"></i>
                    </a>
                </li>
                <li>                    
                    <a href="https://www.youtube.com/c/chechepech" target="_blank">
                        <i class="fab fa-youtube fa-1x"></i>
                    </a>
                </li>
            </ul>
        </section>
    <footer>
        <p>Web design & Development by <a href="https://www.facebook/chechepech" target="_blank">Chech&eacute; Pech</a> - Copyright &copy; 2019</p>
    </footer>
</body>
<script src="assets/js/scroll.js" type="text/javascript"></script>
</html>

