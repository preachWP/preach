<?php get_header(); ?>

<section class="post-hero">
   <p>blog post</p>
   <h1><?php the_title(); ?></h1>
</section>
<section class="post-wrapper">
   <div class="post-section">
      <div class="post-image">
         <?php $image = get_field('top_image'); ?>
         <img src="<?php echo $image['url']; ?>" alt="" />
      </div>
      <div class="post-header">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $first = the_author_meta('first_name'); ?>
            <?php $last = the_author_meta('last_name'); ?>
            <?php $full = $first . $last ?>
            <div><?php echo $full ?></div>
            <div><?php the_date(); ?></div>
         <?php endwhile; endif; ?>
      </div>
      <div class="post-content">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
         <?php endwhile; endif; ?>
      </div>
      <div class="post-image">
         <?php $image = get_field('bottom_image'); ?>
         <img src="<?php echo $image['url']; ?>" alt="" />
      </div>
   </div>
</section>

<?php get_footer(); ?>
