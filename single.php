<?php get_header(); ?>




 <section class="theContent">
    <div class="container">
        <div class="theContent_wrapper">
            <div class="title">
                <h1><?php echo the_title() ?></h1>
            </div>
            <div class="text">
            <div class="img">
           <?php echo get_the_post_thumbnail()?>
           </div>
            
            <div class="date">
            <?php echo get_the_date('M-d-Y')?>
            <p><?php echo get_the_excerpt() ?></p>
            <?php echo the_content() ?>
            </div>
            </div>
        </div>
    </div>
 </section>

 <section class="insideBanner">
    <div class="container">
        <div class="insideBanner_wrapper">
            <div class="insideBanner_grid">
                <div class="insideBanner_main">
                 
                </div>
            </div>
        </div>
    </div>
 </section>



<?php get_footer(); ?>