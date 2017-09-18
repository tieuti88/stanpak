<?php get_header(); ?>
<?php wp_head(); $post_detail = get_post(); ?>

    <header class="head_single scrollto clearfix " style="background: url(<?=get_the_post_thumbnail_url( $post_detail->ID)?>) no-repeat center ;     background-size: cover;" data-enllax-ratio="0.8">
    	
    </header>

    <section class="project-detail bg-pattent text-center scrollto" id="project">
    	<div class="container">
    		<?=$post_detail->post_content?>
        </div>
    </section>
    <!-- <section>
      <div class="container">
        <?php 
          if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
        ?> 
      </div>
    </section> -->
    <section class="more-project" id="clients">
      <div class="clients-content">
        <div class="container">
            <div class="section-heading">
              <h2>MORE PROJECT</h2>
            </div>
            <div class="img-project-thumb " >

                 <?php

                  foreach (get_posts(array('category' => 1 )) as $post) :
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
<?php get_footer(); ?>
