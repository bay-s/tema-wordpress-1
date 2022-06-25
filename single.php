

<?php get_header(); ?>

<section class="single-container">
<div class="columns multiline  is-variable is-8">
<div class="column is-three-fifths">
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
</div><!-- END CONTENT COLUMNT-->


<div class="column is-one-third">
<?php get_sidebar() ?>
</div>
<!-- END SIDEBAR -->

</div>

<div class="box">
<div class="page-link">
<?php previous_post_link( '<strong>%link</strong>' ); ?>
<?php next_post_link( '<strong>%link</strong>' ); ?>
</div>
</div>
<?php  if(comments_open()) {
   comments_template();
}else{
echo "<h4 class='is-size-4 has-text-centered'>Sorry comment are closed</h4>";
}
?>
</section>



<?php get_footer(); ?>

