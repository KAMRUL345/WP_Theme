<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset = "<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>

<h1><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
    <h3><?php bloginfo('description');?></h3>

    <!-- POST SECtion -->
     <?php
     if(have_posts()) :
      while(have_posts()) : the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_content(); ?></p>

      <?php endwhile;

      else :
         echo 'Sorry nothing found';

      endif;


     ?>
    
</body>
</html>