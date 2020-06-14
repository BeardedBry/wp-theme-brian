<!-- Articles Page -->
<?php get_header();?>

<div class="page-wrap">
    <section class="frame-inner">

        <h1 class="archive-title">Articles</h1>

        <div class="archive-post">
            <?php get_template_part('includes/section', 'archive');?>    
        </div>
        <div class="archive-pagination">
            <?php echo paginate_links();?>
        </div>
    </section>
</div>
<?php get_footer();?>