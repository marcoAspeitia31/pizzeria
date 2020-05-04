<?php while(have_posts()): the_post(); /* Most of the times we need to write this code to show the content of WP pages */ ?>
    <h1><?php the_title(); /* bring us the title of the post if it exists */?></h1>
    <?php the_content(); /* bring us the content of the page */?>
<?php endwhile; ?>