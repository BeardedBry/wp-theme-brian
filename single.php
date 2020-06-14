<!-- single blog post -->

<?php get_header();?>

<div class="page-wrap">
    <section class="frame-inner">
        <main>
            <h1><?php the_title();?></h1>

            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('blog-large');?>" 
                    alt="<?php the_title();?>" 
                    class="single-thumbnail"
                >
            <?php endif; ?>

            <?php get_template_part('includes/section', 'blogcontent');?>
            
            <?php wp_link_pages();?>
            
        </main>
    </section>
</div>
<?php get_footer();?>