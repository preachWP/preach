<?php get_header();  ?>

<section class="front-hero">
   <ul class="front-hero-left">
      <li class="hero-active"><a><i class="fa fa-paint-brush hero-icon"></i></a><?php the_field('nav_one'); ?></li>
      <li><a><i class="fa fa-trophy hero-icon"></i></a><?php the_field('nav_two'); ?></li>
      <li><a><i class="fa fa-users hero-icon"></i></a><?php the_field('nav_three'); ?></li>
   </ul>
   <div class="front-hero-right">
      <?php $image = get_field('background_one'); ?>
      <div class="hero-overlay hero-overlay-active" style="background: url('<?php echo $image['url']; ?>'); background-size: cover;">
         <div class="overlay-filter">
            <h1><?php the_field('title_one'); ?></h1>
            <p>
               <?php the_field('quote_one'); ?>
            </p>
            <a href=".">view more</a>
         </div>
      </div>
      <?php $imagetwo = get_field('background_two'); ?>
      <div class="hero-overlay" style="background: url('<?php echo $imagetwo['url']; ?>'); background-size: cover;">
         <div class="overlay-filter">
            <h1><?php the_field('title_two'); ?></h1>
            <p>
               <?php the_field('quote_two'); ?>
            </p>
            <a href=".">view more</a>
         </div>
      </div>
      <?php $imagethree = get_field('background_three'); ?>
      <div class="hero-overlay" style="background: url('<?php echo $imagethree['url']; ?>'); background-size: cover;">
         <div class="overlay-filter">
            <h1><?php the_field('title_three'); ?></h1>
            <p>
               <?php the_field('quote_three'); ?>
            </p>
            <a href=".">view more</a>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>
