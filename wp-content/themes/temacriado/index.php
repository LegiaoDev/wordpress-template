<?php get_header(); ?>
  <h1>Teste</h1>

  <?php if (have_posts() ) : while ( have_posts() ) : the_post();

    get_template_part('content', get_post_format() );

  endwhile; endif; ?>


  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

</body>
</html>
