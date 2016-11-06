<?php /* Template Name: CustomBlog */ ?>
<?php get_header(); ?>
   <div class="blog-header">
      <div class="blog-header-wrapper">
         <p class="blog-title-tagline"><?php the_field('hero-tagline', get_option('page_for_posts')); ?></p>
         <h1 class="blog-title"><?php the_field('blog_main_title', get_option('page_for_posts')) ?></h1>
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
            <div class="blog-grid-left-top" style="background: url('<?php echo get_field('blog_thumnail', $ids[0])['url']; ?>'); background-size: cover;">
               <div class="overlay">
                  <div class="overlay-top">
                     <?php $date = get_the_date('F jS, Y', $ids[0]) ?>
                     <p><?php echo $date ?></p>
                     <i class="fa fa-heart-o"></i>
                  </div>
                  <div class="overlay-bottom">
                     <div class="overlay-header">
                        <?php $headline = get_field('hero-tagline', $ids[0]) ?>
                        <p><?php echo $headline ?></p>
                     </div>
                     <div class="overlay-content">
                        <?php $blogsum = get_field('post_summary', $ids[0]) ?>
                        <?php $permalink = get_permalink($ids[0]); ?>
                        <p><?php echo $blogsum ?></p>
                        <a href="<?php echo $permalink ?>">read more</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-grid-left-bottom">
               <div class="blog-grid-left-bottom-left" style="background: url('<?php echo get_field('blog_thumnail', $ids[1])['url']; ?>'); background-size: cover;">
                  <div class="overlay">
                     <div class="overlay-top">
                        <?php $date = get_the_date('F jS, Y', $ids[1]) ?>
                        <p><?php echo $date ?></p>
                        <i class="fa fa-heart-o"></i>
                     </div>
                     <div class="overlay-bottom">
                        <div class="overlay-header">
                           <?php $headline = get_field('hero-tagline', $ids[1]) ?>
                           <p><?php echo $headline ?></p>
                        </div>
                        <div class="overlay-content">
                           <?php $blogsum = get_field('post_summary', $ids[1]) ?>
                           <p><?php echo $blogsum ?></p>
                           <?php $permalink = get_permalink($ids[1]); ?>
                           <a href="<?php echo $permalink ?>">read more</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-grid-left-bottom-right" style="background: url('<?php echo get_field('blog_thumnail', $ids[2])['url']; ?>'); background-size: cover;">
                  <div class="overlay">
                     <div class="overlay-top">
                        <?php $date = get_the_date('F jS, Y', $ids[2]) ?>
                        <p><?php echo $date ?></p>
                        <i class="fa fa-heart-o"></i>
                     </div>
                     <div class="overlay-bottom">
                        <div class="overlay-header">
                           <?php $headline = get_field('hero-tagline', $ids[2]) ?>
                           <p><?php echo $headline ?></p>
                        </div>
                        <div class="overlay-content">
                           <?php $blogsum = get_field('post_summary', $ids[2]) ?>
                           <p><?php echo $blogsum ?></p>
                           <?php $permalink = get_permalink($ids[2]); ?>
                           <a href="<?php echo $permalink ?>">read more</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="blog-grid-right">
            <div class="blog-grid-right-top">
               <div class="blog-grid-right-top-left" style="background: url('<?php echo get_field('blog_thumnail', $ids[3])['url']; ?>'); background-size: cover;">
                  <div class="overlay">
                     <div class="overlay-top">
                        <?php $date = get_the_date('F jS, Y', $ids[3]) ?>
                        <p><?php echo $date ?></p>
                        <i class="fa fa-heart-o"></i>
                     </div>
                     <div class="overlay-bottom">
                        <div class="overlay-header">
                           <?php $headline = get_field('hero-tagline', $ids[3]) ?>
                           <p><?php echo $headline ?></p>
                        </div>
                        <div class="overlay-content">
                           <?php $blogsum = get_field('post_summary', $ids[3]) ?>
                           <p><?php echo $blogsum ?></p>
                           <?php $permalink = get_permalink($ids[3]); ?>
                           <a href="<?php echo $permalink ?>">read more</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-grid-right-top-right" style="background: url('<?php echo get_field('blog_thumnail', $ids[4])['url']; ?>'); background-size: cover;">
                  <div class="overlay">
                     <div class="overlay-top">
                        <?php $date = get_the_date('F jS, Y', $ids[4]) ?>
                        <p><?php echo $date ?></p>
                        <i class="fa fa-heart-o"></i>
                     </div>
                     <div class="overlay-bottom">
                        <div class="overlay-header">
                           <?php $headline = get_field('hero-tagline', $ids[4]) ?>
                           <p><?php echo $headline ?></p>
                        </div>
                        <div class="overlay-content">
                           <?php $blogsum = get_field('post_summary', $ids[4]) ?>
                           <p><?php echo $blogsum ?></p>
                           <?php $permalink = get_permalink($ids[4]); ?>
                           <a href="<?php echo $permalink ?>">read more</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-grid-right-bottom" style="background: url('<?php echo get_field('blog_thumnail', $ids[5])['url']; ?>'); background-size: cover;">
               <div class="overlay">
                  <div class="overlay-top">
                     <?php $date = get_the_date('F jS, Y', $ids[5]) ?>
                     <p><?php echo $date ?></p>
                     <i class="fa fa-heart-o"></i>
                  </div>
                  <div class="overlay-bottom">
                     <div class="overlay-header">
                        <?php $headline = get_field('hero-tagline', $ids[5]) ?>
                        <p><?php echo $headline ?></p>
                     </div>
                     <div class="overlay-content">
                        <?php $blogsum = get_field('post_summary', $ids[5]) ?>
                        <p><?php echo $blogsum ?></p>
                        <?php $permalink = get_permalink($ids[5]); ?>
                        <a href="<?php echo $permalink ?>">read more</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <ul class="blog-grid-links">
         <?php
             if( have_rows('blog_filter_list', get_option('page_for_posts'))):
                while ( have_rows('blog_filter_list', get_option('page_for_posts')) ) : the_row(); ?>
                  <li>
                     <div class="link-whole">
                        <div class="link-image">
                           <i class="fa fa-<?php the_sub_field('filter_icon'); ?>"></i>
                        </div>
                        <div class="link-text"><?php the_sub_field('filter_link'); ?></div>
                     </div>
                  </li>

          <?php
             endwhile;
             else :
             endif;
          ?>
         <!-- <li>
            <div class="link-whole">
               <div class="link-image">
                  <i class="fa fa-dribbble"></i>
               </div>
               <div class="link-text">sports</div>
            </div>
         </li>
         <li>
            <div class="link-whole">
               <div class="link-image">
                  <i class="fa fa-key"></i>
               </div>
               <div class="link-text">sports</div>
            </div>
         </li>
         <li>
            <div class="link-whole">
               <div class="link-image">
                  <i class="fa fa-diamond"></i>
               </div>
               <div class="link-text">sports</div>
            </div>
         </li>
         <li>
            <div class="link-whole">
               <div class="link-image">
                  <i class="fa fa-glass"></i>
               </div>
               <div class="link-text">sports</div>
            </div>
         </li> -->
      </ul>
   </div>

   <section class="form-section boxshadow">
      <h1><?php the_field('form_title', get_option('page_for_posts')); ?></h1>
      <?php echo do_shortcode( '[contact-form-7 id="44" title="Newsletter"]' ); ?>
      <p>
         <?php the_field('blog_form_slogan', get_option('page_for_posts')); ?>
      </p>

   </section>

<?php get_footer(); ?>
