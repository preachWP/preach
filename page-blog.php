<?php /* Template Name: CustomBlog */ ?>
<?php get_header(); ?>

<div class="blog-header">
   <div class="blog-header-wrapper">
      <p class="blog-title-tagline">preach stories</p>
      <h1 class="blog-title">blog</h1>
   </div>
</div>

<?php
   $ids = array();
   if ( have_posts() ) :
       while ( have_posts() ) : the_post();
          array_push( $ids, get_the_ID() );
       endwhile;
   endif;
?>

<div class="blog-translate-container">
   <div class="blog-grid">
      <div class="blog-grid-left">
         <div class="blog-grid-left-top">
            <div class="overlay">
               <div class="overlay-top">
                  <?php $date = get_the_date('F jS, Y', $ids[0]) ?>
                  <p><?php echo $date ?></p>
                  <i class="fa fa-heart"></i>
               </div>
               <div class="overlay-bottom">
                  <div class="overlay-header">
                     <?php $headline = get_field('hero-tagline', $ids[0]) ?>
                     <p><?php echo $headline ?></p>
                  </div>
                  <div class="overlay-content">
                     <?php $blogsum = get_field('post_summary', $ids[0]) ?>
                     <p><?php echo $blogsum ?></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="blog-grid-left-bottom">
            <div class="blog-grid-left-bottom-left">
               <div class="overlay">
                  <div class="overlay-top">
                     <?php $date = get_the_date('F jS, Y', $ids[1]) ?>
                     <p><?php echo $date ?></p>
                     <i class="fa fa-heart"></i>
                  </div>
                  <div class="overlay-bottom">
                     <div class="overlay-header">
                        <?php $headline = get_field('hero-tagline', $ids[1]) ?>
                        <p><?php echo $headline ?></p>
                     </div>
                     <div class="overlay-content">
                        <?php $blogsum = get_field('post_summary', $ids[1]) ?>
                        <p><?php echo $blogsum ?></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-grid-left-bottom-right">
               <div class="overlay">
                  <div class="overlay-top">
                     <?php $date = get_the_date('F jS, Y', $ids[2]) ?>
                     <p><?php echo $date ?></p>
                     <i class="fa fa-heart"></i>
                  </div>
                  <div class="overlay-bottom">
                     <div class="overlay-header">
                        <?php $headline = get_field('hero-tagline', $ids[2]) ?>
                        <p><?php echo $headline ?></p>
                     </div>
                     <div class="overlay-content">
                        <?php $blogsum = get_field('post_summary', $ids[2]) ?>
                        <p><?php echo $blogsum ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="blog-grid-right">
         <div class="blog-grid-right-top">
            <div class="blog-grid-right-top-left">
               <div class="overlay">
                  <div class="overlay-top">
                     <?php $date = get_the_date('F jS, Y', $ids[3]) ?>
                     <p><?php echo $date ?></p>
                     <i class="fa fa-heart"></i>
                  </div>
                  <div class="overlay-bottom">
                     <div class="overlay-header">
                        <?php $headline = get_field('hero-tagline', $ids[3]) ?>
                        <p><?php echo $headline ?></p>
                     </div>
                     <div class="overlay-content">
                        <?php $blogsum = get_field('post_summary', $ids[3]) ?>
                        <p><?php echo $blogsum ?></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-grid-right-top-right">
               <div class="overlay">
                  <div class="overlay-top">
                     <?php $date = get_the_date('F jS, Y', $ids[4]) ?>
                     <p><?php echo $date ?></p>
                     <i class="fa fa-heart"></i>
                  </div>
                  <div class="overlay-bottom">
                     <div class="overlay-header">
                        <?php $headline = get_field('hero-tagline', $ids[4]) ?>
                        <p><?php echo $headline ?></p>
                     </div>
                     <div class="overlay-content">
                        <?php $blogsum = get_field('post_summary', $ids[4]) ?>
                        <p><?php echo $blogsum ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="blog-grid-right-bottom">
            <div class="overlay">
               <div class="overlay-top">
                  <?php $date = get_the_date('F jS, Y', $ids[5]) ?>
                  <p><?php echo $date ?></p>
                  <i class="fa fa-heart"></i>
               </div>
               <div class="overlay-bottom">
                  <div class="overlay-header">
                     <?php $headline = get_field('hero-tagline', $ids[5]) ?>
                     <p><?php echo $headline ?></p>
                  </div>
                  <div class="overlay-content">
                     <?php $blogsum = get_field('post_summary', $ids[5]) ?>
                     <p><?php echo $blogsum ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <ul class="blog-grid-links">
      <li>
         <div class="link-whole">
            <div class="link-image">one</div>
            <div class="link-text">sports</div>
         </div>
      </li>
      <li>
         <div class="link-whole">
            <div class="link-image">two</div>
            <div class="link-text">design</div>
         </div>
      </li>
      <li>
         <div class="link-whole">
            <div class="link-image">three</div>
            <div class="link-text">fashion</div>
         </div>
      </li>
      <li>
         <div class="link-whole">
            <div class="link-image">four</div>
            <div class="link-text">culture</div>
         </div>
      </li>
   </ul>
</div>

<section class=form-section>
   <?php the_field('blog_form_title'); ?>
   <?php echo do_shortcode( '[contact-form-7 id="44" title="Newsletter"]' ); ?>
   <p>
      <?php the_field('blog_form_slogan'); ?>
   </p>

</section>





<?php get_footer(); ?>
