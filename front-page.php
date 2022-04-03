<?php
get_header();
?>

<div class="wrapper">

        <div class="hero" style="background-image: url('<?= get_theme_file_uri('/img/laptopcoverimg.jpg') ?>')">
                <div class="hero__bg">
                    <div class="hero__logo">
                        <img src="<?= get_theme_file_uri('/img/imray-digital_Website-Header-Logo-White.png')?>" alt="" srcset="">
                    </div>
                    <div class="hero__info">
                    <div class="hero__info--item">
                        <p>Web</p>
                        <span><p>DESIGN</p></span>
                    </div>
                    <div class="hero__info--item">
                        <p>Web</p>
                        <span><p>DEVELOPMENT</p></span>
                    </div>
                    <div class="hero__info--item">
                        <p>Digital</p>
                        <span><p>MARKETING</p></span>
                    </div>
                    </div>
                </div>
        </div>

   
        <div class="portfolio">
            <h3>Recent Web Projects</h3>
            <?php

            $portfolioProjects = new WP_Query(array(
                'posts_per_page' => 4,
                'post_type' => 'portfolio'
            ));
            
            while($portfolioProjects->have_posts()){
                $portfolioProjects->the_post();?>

              
                    <div class="portfolio-item" style="background-image: url('<?= the_field('project_screenshot'); ?>">
               
                        <div class="portfolio-item__bg" >
                        <a href="<?php the_permalink();?>"><h3><?= the_title(); ?></h3></a>
                            <h5><?= the_field('project_type'); ?></h5>
                        <?php if(get_field('complete')){?>
                           
                            <button><a href="<?= the_field('project_url'); ?>" target="_blank">View Site</a></button>
                            
                            <?php }else{?>
                            <button>Coming Soon</button><?php }?>
                        </div>

                    </div>


            <?php
                }

            ?>
             <a href="<?= site_url('/portfolio'); ?>"><h3>View All</h3></a>
        </div>
 </div> <!-- Closing wrapper tag -->

        <?php

        $reviews = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type' => 'review'
        ));

        while($reviews->have_posts()){
            $reviews->the_post(); ?>

        <div class="reviews section">
            <h1 class="pb30">What are our customers saying?</h1>
            <div class="review-items">

                <div class="review-card">
                    <div class="review-card-top">
                        <div class="review-card-top__img">
                           
                        </div>
                        <div class="review-card-top__rating">
                        <p><span class="reviewInfo">Person A</span> reviewed <span class="reviewInfo">Product</span></p>
                        </div>
                    </div>
                    <div class="review-card-body">

                    </div>
                </div>
                
            </div>
        </div>

        <?php }; ?>



        <!--  REQUEST A QUOTE SECTION USING REACT  -->
       <!-- <div class="quote section">
            <p>quote</p>

        </div>

        -->



</div> <!-- Closing wrapper tag -->



<?php
get_footer();
?>