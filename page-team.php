<div class="main__team">

<?php

/*
	Template Name: Team Page, No Sidebar
*/

get_header();  ?>

<div class="title__container">
<h3>preach</h3>
<h2><?php the_title(); ?></h2>
</div>

 <!--  <div class="container"> -->


<div class="heroBox">
<?php $heroImage = get_field('hero_image');
				$heroImageSrc = $heroImage['url']; ?>



<?php $heroVideo = get_field('hero_video');
				$heroVideoSrc = $heroVideo['url']; ?>
<!-- <video autoplay loop>

<source src="<?php echo $heroVideoSrc; ?>" type="video/mp4">
</video> -->
<img src="<?php echo $heroImageSrc; ?>" alt="">





</div>

<p class="teamInfo">
	<?php the_field('team_paragraph'); ?>

</p>



	<div class="designerBox">
		<div class="designerBox--flexItem">
			<div><h4>zack jackson</h4></div>
			<div>
			<div class="designerbox__content-left">
			<?php the_field('designer_paragraph'); ?> </div>
			</div>
		</div>

		<div class="designerBox--flexItem">
			<div></div>
			<div>
			<?php $image = get_field('designer_image');
				$imagesrc = $image['url'];
				// echo $image;
			 ?>
<img class="designerImage" src="<?php  echo $imagesrc  ?>""  alt="">
		</div>
		</div>
		<div class="designerBox--flexItem">
			<div><h3>designer</h3></div>
			<div>
			<div class="designerbox__content-right">
			Why not put some stuff in here. Some sample test goes in here.  Why not put some</div>
			</div>
		</div>



	</div>




<div class="portfolioLink_box boxshadow">
			<img src="<?php the_field('link_box_icon'); ?>" alt="">
			<h3>portfolio</h3>
			<p>view some of our other work</p>
			<a class="yellow-button" href="<?php the_field('link_box_link') ?>">VIEW</a>
		</div>



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

		<div class="">
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





    <?php endwhile; // end the loop?>


 <!--  </div> /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
