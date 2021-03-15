<?php get_header(); ?>
  <body>
    <div class="header">
      <div class="container">
        <h1>
          <?php the_field('header_heading'); ?>
        </h1>
        <p>
          <?php the_field('header_description'); ?>
        </p>
        <a class="btn" href="<?php the_field('header_button_link'); ?>" target="_blank"><?php the_field('header_button_text'); ?></a>
      </div>
    </div>
    

    <div class="main">      
      <div class="container">
        <img src="<?php the_field('image_url'); ?>" height="128" width="196"/>

        <h2><?php the_field('main_content_header'); ?></h2>
        <?php the_field('main_content_description'); ?>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container"> 
      
      <h1>
          <?php the_field('stay_connected_header_text'); ?>
        </h1>
        <p>
          <?php the_field('stay_connected_description'); ?>
        </p>
        <a class="btn" href="<?php the_field('stay_connected_button_link'); ?>"><?php the_field('stay_connected_button_text'); ?></a>
      </div>
    </div>
  <?php get_footer(); ?>
  </body>
</html>