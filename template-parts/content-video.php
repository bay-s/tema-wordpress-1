

<div class="column test">

<div class="cards">

<?php if(has_post_thumbnail()) : ?>
   <div class="card-header">
   <img src="<?php echo the_post_thumbnail_url('medium-large'); ?>" alt="rover" />
 </div>
<?php else : ?>
<?php endif; ?>
<!-- END CHECK IMAGE -->


 <div class="card-body">
   <div class="post-tag">
<div class="categori"> <span class="tag tag-teal"><?php the_category() ?></span></div>

   <h4 class="post-title is-size-4">
   <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
   </h4>
   <p>
    <?php the_excerpt(); ?>
   </p>
   <div class="user-info">
   <div class="dates">   
     <span class="date has-text-dark"><?php echo the_date(); ?></span>
   <time class="date has-text-dark">Post by : <?php the_author(); ?></time>
    </div>
    <a href="<?php the_permalink(); ?>" class="button is-small is-info is-outlined is-responsive">Read More</a>
     </div>
   </div>
 </div><!-- END CARD -->


</div>




