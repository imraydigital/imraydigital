<?php
get_header();

while(have_posts()){
    the_post();
    ?>

<div class="page-wrapper">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>

<?php

}

get_footer();
?>