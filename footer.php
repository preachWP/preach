<footer>
  <div class="footer-container">
    <!-- <p>&copy; Kelvin Li &amp; Clyde Grey <?php echo date('Y'); ?></p -->
     <div class="footer-wrapper">
        <h1 class="footer-header">preach</h1>
        <ul class="footer-links">
           <?php
               if( have_rows('footer_link_list') ):
                   while ( have_rows('footer_link_list') ) : the_row(); ?>
                     <li><a href="<?php the_sub_field('footer_link_url') ?>"><?php the_sub_field('footer_link') ?></a></li>
            <?php
               endwhile;
               else :
               endif;
            ?>
        </ul>
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'Social Link List'
        )); ?>

        <ul class="footer-copyright">
            <li>Developed by: Kelvin Li &amp; Clyde Grey</li>
            <li>Design: Preach</li>
            <li>All rights reserved: 2016</li>
        </ul>
     </div>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
