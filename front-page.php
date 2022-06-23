

<?php get_header(); ?>

<section class="main-container">

<div class="columns multiline  is-variable is-8">

   <div class="column is-three-fifths">
    <!-- QUERY POST -->
   <?php 
$lastBlog = new WP_Query('type=post&posts_per_page=1');
if($lastBlog -> have_posts()) :  ?>
   <?php while($lastBlog -> have_posts()) :  ?>
<?php $lastBlog -> the_post(); ?>

<?php get_template_part('template-parts/content',get_post_format()); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!-- END QUERY POST -->

<?php if(have_posts()) : ?>
   <?php while(have_posts()) :  ?>
<?php the_post(); ?>

<?php get_template_part('template-parts/content',`content`); ?>

<?php endwhile; ?>
<?php endif; ?>

    <!-- QUERY POST -->
    <?php 
$lastBlog = new WP_Query('type=post&category_namee=Music');
if($lastBlog -> have_posts()) :  ?>
   <?php while($lastBlog -> have_posts()) :  ?>
<?php $lastBlog -> the_post(); ?>


<?php get_template_part('template-parts/content',`content`); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!-- END QUERY POST -->
</div>
<div class="column is-one-third">
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
 



