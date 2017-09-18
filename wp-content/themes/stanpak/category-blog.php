<?php get_header(); ?>
<?php $post_detail = get_post(); ?>

    <section class="project bg-pattent text-center scrollto" id="project">
      <div class="section-heading text-center">
        <h2 class="section-heading">BLOG</h2>
        
       <hr>
      </div>
            <div class="img-project " data-featherlight-gallery
                 data-featherlight-filter="a">

                 <?php
                 $category = get_category(get_query_var('cat'));
                  foreach (get_posts(array('category' => $category->cat_ID )) as $post) :
                    $desc = get_post_meta($post->ID,'description', true);
                 ?>

                  <a href="<?=get_permalink($post->ID,false)?>" class="wow fadeIn" data-featherlight="image" data-wow-delay="0.1s"><div class="item"><img src="<?=get_the_post_thumbnail_url( $post->ID)?>" alt=""><div class="item-info"><h3><?=$post->post_title?></h3><p><?=$desc?></p></div></div></a>

                <?php endforeach ?>

            </div>
    </section>

<?php get_footer(); ?>
