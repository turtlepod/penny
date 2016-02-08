( function( $ ) {

	/* Link Color */
	wp.customize( 'color_link', function( value ) {
		value.bind( function( to ) {
			var color_link_css = '';
			color_link_css += 'a{color:' +  to + '}';
			color_link_css += '.button.primary{background:' +  to + ';border-color:' + to + '}';
			color_link_css += 'container .jetpack_subscription_widget input[type="submit"]{background:' +  to + '}';

			$( '#penny-color-link-css' ).html( color_link_css );
		} );
	} );

	/* Header BG Color */
	wp.customize( 'color_link_hover', function( value ) {
		value.bind( function( to ) {
			var color_link_hover_css = '';
			color_link_hover_css += 'a:hover,a:focus{color:' +  to + '}';
			color_link_hover_css += '.button.primary:hover,.button.primary:focus{background:' +  to + ';border-color:' + to + '}';
			$( '#penny-color-link-hover-css' ).html( color_link_hover_css );
		} );
	} );

} )( jQuery );
