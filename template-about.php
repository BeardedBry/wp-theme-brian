<?php

/*
Template Name: About
*/

?>

<?php get_header('secondary');?>


<div class="main">

    <h1><?php the_title();?></h1>

    <div class="col-sm">
       Image
       Bio
    </div>

    <div class="col">
        <?php get_template_part('includes/section', 'content');?>
    </div>



    
 </div>


<?php get_footer();?>