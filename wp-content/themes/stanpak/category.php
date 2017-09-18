<?php get_header(); ?>

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
                  foreach (get_posts(array('category' => 1 )) as $post) :
                    $desc = get_post_meta($post->ID,'description', true);
                 ?>

                  <a href="<?=get_permalink($post->ID,false)?>" class="wow fadeIn" data-featherlight="image" data-wow-delay="0.1s"><div class="item"><img src="<?=get_the_post_thumbnail_url( $post->ID)?>" alt=""><div class="item-info"><h3><?=$post->post_title?></h3><p><?=$desc?></p></div></div></a>

                <?php endforeach ?>

            </div>
    </section>

<?php get_footer(); ?>
