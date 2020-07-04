<!-- single blog post -->


<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <div class="post">
        <h4 class="post-date"><?php echo get_the_date(); ?></h4>
        <?php the_content(); ?>

        <!-- Display Author Info -->
        <div class="post-author">
            <p><?php 
                $fname = get_the_author_meta('first_name');
                $lname = get_the_author_meta('last_name');
                echo 'Article by ' . $fname . ' ' . $lname;
            ?></p>
            <?php echo get_the_date(); ?>
        </div>


        <!-- Display Tag Links -->
        <?php
        $tags = get_the_tags();
        if($tags):
        foreach($tags as $tag):?>

            <a href="<?php echo get_tag_link($tag->term_id);?>" 
                class="post-tag post-tag-<?php echo $tag->name;?>">
                <?php echo $tag->name;?>
            </a>

        <?php endforeach; endif; ?>

        <br/>

        <!-- Display Category Links -->
        <?php 
        $categories = get_the_category();
        foreach($categories as $cat):?>
            
            <a href="<?php echo get_category_link($cat->term_id);?>">
            <?php echo $cat->name;?>
            </a>

        <?php endforeach?>


        <!-- Display Comments section -->
        <div class="post-comments">
            <?php //comments_template();?>
        </div>

    </div>




<?php endwhile; else: endif; ?>
