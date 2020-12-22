<?php get_header();?>


<section class="page-wrap frame-inner">
    <main class="about">
        <!-- <h1><?php the_title();?></h1> -->
        <div class="round-image">
            <?php the_post_thumbnail( 'medium' ); ?>
        </div>
        <div>
            <?php get_template_part('includes/section', 'content');?>
        </div>
    </main>
</section>


<?php get_footer();?>
