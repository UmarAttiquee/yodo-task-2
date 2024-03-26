<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">

            <?php
            // Start the loop
            while (have_posts()) :
                the_post();

                // Display post content
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        the_content();
                       
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail', ['class' => 'card-img-top']);
                        }
                       

                        // Display ACF fields if needed
                        $tags = get_field('tags');
                        $job = get_field('job');
                        $image = get_field('img');

                        if ($tags) {
                            echo '<p><strong>Tags:</strong> ' . esc_html($tags) . '</p>';
                        }
                        if ($job) {
                            echo '<p><strong>Job:</strong> ' . esc_html($job) . '</p>';
                        }
                        if ($image) {
                            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                        }
                        ?>
                    </div><!-- .entry-content -->

                </article><!-- #post-<?php the_ID(); ?> -->

            <?php endwhile; ?>

        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
