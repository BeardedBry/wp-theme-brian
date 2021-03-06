<?php get_header();?>

<div class="page-wrap">
    <section class="frame-inner">
        <div class="callout">
            <h4>Special headline here</h4>
        </div>
        <main>
            <h1><?php the_title();?></h1>

            <?php get_template_part('includes/section', 'content');?>
            
            <?php if( is_active_sidebar('page-sidebar')):?>
                <?php dynamic_sidebar('page-sidebar');?>
            <?php endif;?>

        </main>
    </section>
</div>
<?php get_footer();?>