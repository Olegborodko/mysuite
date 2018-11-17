<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one
 */

?>

</div><!-- #content -->
</div><!-- #page -->

<!-- #footer -->
<div class="footer_white">
  <?php
  $logo_black = true;
  require_once( get_stylesheet_directory() . '/php/part_code/footer.php' );
  ?>
  <!-- #end footer -->
</div>

<?php wp_footer(); ?>

</body>
</html>
