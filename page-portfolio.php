<div class="main__portfolio">

<?php

/*
	Template Name: Portfolio Page, No Sidebar
*/

get_header();  ?>


<h2><?php the_title(); ?></h2>


  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


      <?php the_content(); ?>


		<?php
               if( have_rows('media_box') ):
                   while ( have_rows('media_box') ) : the_row();
               	$image = get_sub_field('block_image');
				 ?>
				<div class="imageBox boxshadow"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
				</div>
			<?php
               endwhile;
               else :
               endif;
            ?>

		<div class="imageBox_multiple">
		<?php
               if( have_rows('media_box_thin') ):
                   while ( have_rows('media_box_thin') ) : the_row();
               	$image = get_sub_field('media_thin');
				 ?>


				<div><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>

				<div class="imageBox_multiple-overlay">
				<a href="">view this project</a>

				</div>
				</div>

			<?php
               endwhile;
               else :
               endif;
            ?>

   			</div>
		<div class="link_box boxshadow">




			<img src="<?php the_field('link_box_icon'); ?>" alt="">
			<h3><?php the_field('link_box_title') ?></h3>
			<p><?php the_field('link_box_sub-title') ?></p>
			<a class="yellow-button" href="<?php the_field('link_box_link') ?>">read more</a>







		</div>




    <?php endwhile; // end the loop?>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
