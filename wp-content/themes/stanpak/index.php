<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stanpak</title>
    <?php wp_head(); 
      $id_cat_project = get_cat_ID( 'project' );
      $id_cat_blog = get_cat_ID( 'blog' );
          ?>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
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
          <div class="bg_menu">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#project"><?=pll__('Works')?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#features"><?=pll__('Features')?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services"><?=pll__('Services')?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#clients"><?=pll__('Clients')?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?=get_category_link($id_cat_blog)?>"><?=pll__('Blog')?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact"><?=pll__('Contact')?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <header class="masthead scrollto clearfix" >
    <!-- Indicators -->
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/1_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2><?=pll__('THIẾT KẾ & IN ẤN - BAO BÌ')?> </h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/2_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2><?=pll__('THIẾT KẾ & IN ẤN - BAO BÌ')?> </h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/3_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2><?=pll__('THIẾT KẾ & IN ẤN - BAO BÌ')?> </h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/4_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2><?=pll__('THIẾT KẾ & IN ẤN - BAO BÌ')?> </h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/5_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2><?=pll__('THIẾT KẾ & IN ẤN - BAO BÌ')?> </h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/6_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2><?=pll__('THIẾT KẾ & IN ẤN - BAO BÌ')?> </h2>
                </div>
            </div>
        </div>

    </header>

    <section class="project bg-pattent text-center scrollto" id="project">
        <?php
          $ourWork = get_page_by_path('our-work');
         ?>
      <div class="section-heading text-center">
        <h2 class="section-heading"><?=$ourWork->post_title?></h2>
        <p><?=$ourWork->post_content?></p>
       <hr>
      </div>
            <div class="img-project " data-featherlight-gallery
                 data-featherlight-filter="a">

                 <?php
                  /*echo "<pre>";
                    print_r( get_projects() );
                  echo "</pre>";*/
                  foreach (get_projects() as $post) :
                    $desc = get_post_meta($post->ID,'description', true);
                 ?>

                  <a href="<?=get_permalink($post->ID,false)?>" class="wow fadeIn" data-featherlight="image" data-wow-delay="0.1s"><div class="item"><img src="<?=get_the_post_thumbnail_url( $post->ID)?>" alt=""><div class="item-info"><h3><?=$post->post_title?></h3><p><?=$desc?></p></div></div></a>

                <?php endforeach ?>
                <a href="<?=get_category_link($id_cat_project)?>"  class="btn btn-outline btn-xl js-scroll-trigger"><?=pll__('See more')?></a>
            </div>
    </section>

    <section class="features bg-pattent scrollto" id="features" >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="section-heading">
              <h2><?=get_page_by_path('who-we-are')->post_title?></h2>
              <p class="text-muted"><?=get_page_by_path('who-we-are')->post_content?></p>
              <hr>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            <div class="row avatar">
              <div class="col-sm-6 wow bounceIn" data-wow-delay="0.3s">
                <img src="<?=get_template_directory_uri()?>/img/Trung-uno.jpg">
              </div>
              <div class="col-sm-6 wow bounceIn" data-wow-delay="0.5s">
                <img src="<?=get_template_directory_uri()?>/img/truonggiang.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta scrollto " data-enllax-ratio=".5">
      <div class="cta-content">
        <div class="container">
          <!-- <h2>Stop waiting.<br>Start building.</h2>
          <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a> -->
          <div class="row">
            <div class="col-sm-8 wow fadeInLeft" data-wow-delay="0.1s">
              <div class="section-heading">
                <h2 style=""><?=get_page_by_path('why-stanpak')->post_title?></h2>
                <p class="text-muted"><?=get_page_by_path('why-stanpak')->post_content?> </p>
                <hr>
              </div>
            </div>
            <div class="col-sm-4">
              
            </div>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="services scrollto" id="services">
      <div class="services-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="row">
                <div class="col-sm-12 section-heading">
                  <h2><?=get_page_by_path('our-services')->post_title?></h2>
                  <hr>
                </div>
              </div>
              <div class="row">
                <?=get_page_by_path('our-services')->post_content?>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 video">
              <video id="video" class="video-js" poster="<?=get_template_directory_uri()?>/img/placeholder.png">
                <source src="http://stanpak.vn/assets/images/intro-stanpak.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            </div>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="clients" id="clients">
      <div class="clients-content">
        <div class="container">
            <div class="section-heading">
              <h2><?=get_page_by_path('our-clients')->post_title?></h2>
            </div>
            <?=get_page_by_path('our-clients')->post_content?>

        </div>
      </div>
      <div class="overlay"></div>
    </section>
<?php get_footer(); ?>
