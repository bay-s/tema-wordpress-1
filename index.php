

<?php get_header(); ?>

<section class="main-container">
   
<div class="columns multiline  is-variable is-8">
   <div class="column is-three-fifths">
<?php if(have_posts()) : ?>
   <?php while(have_posts()) :  ?>
<?php the_post(); ?>

<?php get_template_part('template-parts/content',`content`); ?>

<?php endwhile; ?>
<?php endif; ?>
</div>
<div class="column is-two-fifths">
<?php get_sidebar() ?>
</div>
<!-- END SIDEBAR -->
</div> 
<!-- END COLUMNS -->

<nav class="paginations">
   <ul class="pages">
   <?php the_posts_pagination(); ?>
   </ul>
</nav>
</section>

 <?php get_footer(); ?>
 





