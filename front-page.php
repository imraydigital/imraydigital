<?php
get_header();
?>

<div class="wrapper">

        <div class="hero">


        </div>

   
        <div class="portfolio">
            <h3>Our Recent Projects</h3>
            <?php
            
            while(have_posts()){
                the_post(); ?>

              
                    <div class="portfolio-item">
                        <h3><?= the_title(); ?></h3>
                        <h5>Website Type</h5>
                        <button>View Site</button>
                    </div>


            <?php
            }

            ?>
             <h3>View All</h3>
        </div>
 </div> <!-- Closing wrapper tag -->

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
                    <div class="review-card-body"></div>
                </div>

                <div class="review-card">
                    <div class="review-card-top">
                        <div class="review-card-top__img">
                           
                        </div>
                        <div class="review-card-top__rating">
                        <p><span class="reviewInfo">Person A</span> reviewed <span class="reviewInfo">Product</span></p>
                        </div>
                    </div>
                    <div class="review-card-body"></div>
                </div>
                <div class="review-card">
                    <div class="review-card-top">
                        <div class="review-card-top__img">
                           
                        </div>
                        <div class="review-card-top__rating">
                        <p><span class="reviewInfo">Person A</span> reviewed <span class="reviewInfo">Product</span></p>
                        </div>
                    </div>
                    <div class="review-card-body"></div>
                </div>

                <div class="review-card">
                    <div class="review-card-top">
                        <div class="review-card-top__img">
                           
                        </div>
                        <div class="review-card-top__rating">
                        <p><span class="reviewInfo">Person A</span> reviewed <span class="reviewInfo">Product</span></p>
                        </div>
                    </div>
                    <div class="review-card-body"></div>
                </div>

                <div class="review-card">
                    <div class="review-card-top">
                        <div class="review-card-top__img">
                           
                        </div>
                        <div class="review-card-top__rating">
                        <p><span class="reviewInfo">Person A</span> reviewed <span class="reviewInfo">Product</span></p>
                        </div>
                    </div>
                    <div class="review-card-body"></div>
                </div>

                
            </div>
        </div>

        <!--  REQUEST A QUOTE SECTION USING REACT  -->
        <div class="quote section">
            <p>quote</p>

        </div>



</div> <!-- Closing wrapper tag -->



<?php
get_footer();
?>