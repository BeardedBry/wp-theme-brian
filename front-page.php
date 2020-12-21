<?php get_header();?>


<section class="page-wrap frame-inner">
    <main class="about">
        <!-- <h1><?php the_title();?></h1> -->
        <?php the_post_thumbnail( 'medium' ); ?>
        <div>
            <?php get_template_part('includes/section', 'content');?>
        </div>
         <!-- <div class="form">
        <?php get_template_part('includes/form','inquiry');?>
    </div> -->
    </main>
</section>


<?php get_footer();?>
