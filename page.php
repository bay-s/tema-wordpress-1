

<?php get_header(); ?>


<section class="single-container">
<div class="column">
<?php if(have_posts()) : ?>
   <?php while(have_posts()) :  ?>
<?php the_post(); ?>

<div class="content is-medium">
<div class="card-image">
<?php if(has_post_thumbnail()) : ?>
   <?php if(has_post_thumbnail()) : ?>
      <img src="<?php echo the_post_thumbnail_url('medium-large'); ?>" alt="Placeholder image">
   <?php else : ?>
<?php endif; ?>
 <!-- END CHECK IMAGE -->
<?php endif ; ?>  
  </div>
<div class="media-content">
      <h5 class="post-title is-size-1"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
      <time class="date has-text-dark"><?php the_date(); ?></time>
</div>
    <p><?php the_content(); ?></p>
  </div>

<?php endwhile; ?>

<?php endif; ?>
</div>

<?php 
if (is_page('17')) {
   comments_template();
}

?>

</section>



<?php get_footer(); ?>

