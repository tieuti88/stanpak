<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stanpak</title>
    <?php wp_head(); $post_detail = get_post(); ?>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">
          <img src="<?=get_template_directory_uri()?>/img/logo.png" > 
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="navbar-toggle-desktop">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/blog">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="head_single scrollto clearfix " style="background: url(<?=get_the_post_thumbnail_url( $post_detail->ID)?>) no-repeat center ;     background-size: cover;" data-enllax-ratio="0.8">
    	
    </header>

    <section class="project-detail bg-pattent text-center scrollto" id="project">
    	<div class="container">
    		<?=$post_detail->post_content?>
        </div>
    </section>

    <section class="more-project" id="clients">
      <div class="clients-content">
        <div class="container">
            <div class="section-heading">
              <h2>MORE PROJECT</h2>
            </div>
            <div class="img-project-thumb " >

                 <?php

                  foreach (get_projects() as $post) :
                    $desc = get_post_meta($post->ID,'description', true);
                	if($post->ID == $post_detail->ID ) continue;
                 ?>

                  <a href="<?=get_permalink($post->ID,false)?>" class="wow fadeIn" data-featherlight="image" data-wow-delay="0.1s"><div class="item"><img src="<?=get_the_post_thumbnail_url( $post->ID)?>" alt=""><div class="item-info"><h3><?=$post->post_title?></h3><p><?=$desc?></p></div></div></a>

                <?php endforeach ?>

            </div>

        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact bg-pattent" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <form id="from-contact">
              <input type="text" name="name" placeholder="Name" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="text" name="subject" placeholder="Subject" required>
              <textarea required placeholder="Messeage" name="message" rows="6"></textarea>
            </form>
          </div>
          <div class="col-sm-6">
            <h2>We
              <i class="fa fa-heart"></i>
              new friends!</h2>
            <p>
              <strong>HOP LONG COMPANY</strong><br/>
              323 Le Quang Dinh street, 9 ward, Ho Chi Minh city.<br>
              08 888 345 89<br>
              cskh@stanpak.vn
            </p>
            <ul class="list-inline list-social">
              <li class="list-inline-item social-twitter">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item social-facebook">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item social-google-plus">
                <a href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
      </div>
    </section>
<?php get_footer(); ?>
