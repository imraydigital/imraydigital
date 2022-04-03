<? get_header();

while(have_posts()){
    the_post();?>

<div class="singlePortfolioFeatured">
        <div class="singlePortfolioFeatured--image">

        </div>
        <div class="singlePortfolioFeatured--details">
            
        </div>
</div>

<?php
}

get_footer();?>