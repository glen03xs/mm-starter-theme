<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mm-starter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mm-starter' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'mm-starter' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'mm-starter' ), 'mm-starter', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>
			</div><!-- .site-info -->
		</div> <!--end container-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
