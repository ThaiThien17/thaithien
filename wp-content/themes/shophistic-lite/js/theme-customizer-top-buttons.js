jQuery(document).ready(function($) {
	$('.wp-full-overlay-sidebar-content').prepend('<a style="width: 80%; margin: 10px auto; display: block; text-align: center;" href="https://wordpress.org/support/view/theme-reviews/shophistic-lite#postform" class="button" target="_blank">{reviews}</a>'.replace( '{reviews}', topbtns.reviews ) );
	$('.wp-full-overlay-sidebar-content').prepend('<a style="width: 80%; margin: 10px auto; display: block; text-align: center;" href="https://quemalabs.ticksy.com/articles/100000146/" class="button" target="_blank">{documentation}</a>'.replace( '{documentation}', topbtns.documentation ) );
 	$('.wp-full-overlay-sidebar-content').prepend('<a style="width: 80%; margin: 10px auto; display: block; text-align: center;" href="https://www.quemalabs.com/theme/shophistic-lite/?utm_source=Shophistic%20Lite%20Theme&utm_medium=Pro%20Button&utm_campaign=Shophistic" class="button" target="_blank">{pro}</a>'.replace( '{pro}', topbtns.pro ) );
});