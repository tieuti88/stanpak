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
          <div class="bg_menu">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/"><?=pll__('Home')?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?=get_category_link($id_cat_project)?>"><?=pll__('Works')?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?=get_category_link($id_cat_blog)?>"><?=pll__('Blog')?> </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>