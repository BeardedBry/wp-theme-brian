<!-- used in index.php (Articles) and archive.php (category, tag) -->

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <?php $current = get_post() ?>

    <a role="button" href="<?php the_permalink()?>" class="archive-post-card">
        <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('blog-small');?>" 
                    alt="<?php the_title();?>" 
                    class="archive-thumbnail"
                >
        <?php endif; ?>
        <h3><?php the_title();?></h3>
        <h5><?php echo date('M d, Y',strtotime($post->post_date));?></h5>
        <!-- <?php the_excerpt(); ?> -->
    </a>
    <!--
    <pre>
    <?php var_dump($post); ?>
    </pre>
    -->

<?php endwhile; else: endif; ?>