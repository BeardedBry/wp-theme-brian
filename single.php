<!-- single blog post -->

<?php get_header('article');?>

<div class="page-wrap">
    <section class="frame-inner">
        <main>
            <h1><?php the_title();?></h1>

            <?php get_template_part('includes/section', 'blogcontent');?>
            
            <?php wp_link_pages();?>
            
        </main>
    </section>

    <!-- sidebar widget -->
    <section class="frame-sidebar">
        <!-- <p>Sidebar</p> -->
        <?php if( is_active_sidebar('page-sidebar')):?>
                <?php dynamic_sidebar('page-sidebar');?>
        <?php endif;?>
    </section>
</div>
<?php get_footer();?>