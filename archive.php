<!-- using index.php for articles page -->
<!-- This is used for specific categories AND specific tags. -->

<?php get_header();?>

<div class="page-wrap">
    <section class="frame-inner">

        <h1 class="archive-title"><?php echo single_cat_title();?></h1> 
        
        <div class="archive-post">
            <?php get_template_part('includes/section', 'archive');?>    
        </div>
        <div class="archive-pagination">
            <?php echo paginate_links();?>
        </div>
    </section>
</div>
<?php get_footer();?>