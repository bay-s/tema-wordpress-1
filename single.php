

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
      <h5 class="post-title is-size-1"><?php the_title();?></h5>
<div class="media-info">
<time class="has-text-dark">Post by : <?php the_author(); ?></time>
<time class="date has-text-dark"><?php the_date(); ?></time>
</div>
</div>
<div class="content">
<?php the_content(); ?>
</div>
  </div>

<?php endwhile; ?>

<?php endif; ?>
</div>
<div class="page-link">
	
<?php previous_post_link( '<strong>%link</strong>' ); ?>
<?php next_post_link( '<strong>%link</strong>' ); ?>
</div>
<?php 
comments_template();
?>

</section>



<?php get_footer(); ?>

