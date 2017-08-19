/* Require jQuery */
$(function () {

	/* Burger */
	$( '.action-toggle-burger' ).click(function (ev) {
		ev.preventDefault();
		$( '.bk-effect-open' ).toggleClass( 'open' );
	});
	/* Navigation Mobile Level2 */
	$( '.bk-navigation-mobile .menu-item-has-children' ).click(function (e) {
		$(this).parents().toggleClass( 'open' );
	});
});
