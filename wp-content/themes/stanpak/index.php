<?php get_header(); ?>


    <header class="masthead scrollto clearfix" >
    <!-- Indicators -->
<?php
  // print_r(wp_upload_dir('2017/09',true,true));
?>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/1_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/2_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/3_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/4_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2>Caption 4</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" ><img src="<?=wp_upload_dir('2017/09',true,true)['url']?>/5_1024x550px.jpg"></div>
                <div class="carousel-caption">
                    <h2>Caption 5</h2>
                </div>
            </div>
        </div>

    </header>

    <section class="project bg-pattent text-center scrollto" id="project">
        <?php
          $cat_id = get_category_by_slug('project')->cat_ID;
          $cat_link = get_category_link($cat_id);
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
                <a href="<?=$cat_link?>"  class="btn btn-outline btn-xl js-scroll-trigger">View more</a>
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
                <img src="<?=get_template_directory_uri()?>/img/truonggiang.jpg">
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
                <h2><?=get_page_by_path('why-stanpak')->post_title?></h2>
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
              <video controls id="video" class="video-js">
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
              <h2>OUR CLIENTS</h2>
            </div>
            <div class="row img-clients">
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
            </div>
            <div class="row img-clients">
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
            </div>
            <div class="row img-clients">
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
            </div>
            <div class="row img-clients">
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
              <div class="item"><img src="/img/client1.png"></div>
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
