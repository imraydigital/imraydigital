<? get_header();

?>


<div class="portfolioFeatured">
        <div class="portfolioFeatured--image" style="background-image: url('<?= get_theme_file_uri('/img/laptopcoverimg.jpg');?>')">

        </div>
        <div class="portfolioFeatured--details">
            
        </div>
</div>

<div class="portfolioListItems">

        <?php

        while(have_posts()){

            the_post();
            $languages = get_field('languages');?>

            <div class="portfolioListItems--item">
                <div class="portfolioListItems--item-image" style="background-image: url('<?= the_field('project_screenshot'); ?>">

                </div>
                <div class="portfolioListItems--item-desc">
                    <div class="portfolioListItems--item-desc-title">
                        <h4><?= the_title();?></h4>
                        <ul class="portfolioListItems--item-desc-title-icons">
                            <?php
                                if($languages){
                                    foreach($languages as $skill) {
                                        echo "<li><i class='fa-brands fa-$skill'></i></li>";
                                    };
                                }
                                    
                            ?>
                        </ul>
                    </div>
                    <div class="portfolioListItems--item-desc-body">
                        <p>Project details go here</p>
                    </div>
                </div>
                
            </div>

        <?php }?>
</div>
  
<?php
    get_footer();
?>