
<?php
/*
Template Name:Template No Title
*/
get_header(); ?>


<div class="container">
<?php if(have_posts()) :    ?>
    <h1>TEST PAGE</H1>
   <?php while(have_posts()) :  
   the_post();
  the_content();
   ?>
<?php endwhile; ?>

<?php endif; ?>
</div>



<?php get_footer(); ?>
