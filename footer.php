<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Avocado
 */

?>

				</div>
			</div>
		</div>

	</div><!-- #content -->

<footer class="main_footer pt-5 pb-5">
<div class="container">
    <div class="row">
        <div class="col-xl-3">
        <?php if(is_active_sidebar('footer-side')){
            dynamic_sidebar('footer-side');
        } ?>
        </div>
        <div class="col-xl-3">
            <div class="footer_widget">
            <h3><?php _e("Information","avocado") ?></h3>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-left',
                'menu_id' => 'footerleft',
                'menu_class' => 'links',
            ))
            ?>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="footer_widget">
            <h3><?php _e("Customer Service","avocado") ?></h3>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-middle',
                'menu_id' => 'footermiddle',
                'menu_class' => 'links',
            ))
            ?>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="footer_widget">
            <h3><?php _e("Extras","avocado") ?></h3>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-right',
                'menu_id' => 'footerright',
                'menu_class' => 'links',
            ))
            ?>
            </div>
        </div>
    </div>
</div>
<div class="copy_right_text pt-3">
<div class="container">
    <div class="row">
        <div class="col-xl-12 text-center">
        <p class="copy_right">
        <?php if(is_active_sidebar('footer-bottom')){
            dynamic_sidebar('footer-bottom');
        } ?>
        </p>
        </div>
    </div>
</div>
</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
