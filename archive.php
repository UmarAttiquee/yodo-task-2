<?php
get_header();

if (have_posts()) : ?>

   <header class="page-header">
      <h1 class="page-title"><?php printf(__('Category Archives: %s', 'your-theme'), single_cat_title('', false)); ?></h1>
      <?php
      the_archive_description('<div class="taxonomy-description">', '</div>');
      ?>
   </header>

   <?php
   while (have_posts()) : the_post();
      get_template_part('template-parts/content', get_post_format());
   endwhile;

   the_posts_navigation();

else :

   get_template_part('template-parts/content', 'none');

endif;

get_footer();
