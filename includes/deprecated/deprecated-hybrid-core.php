<?php
/**
 * Deprecated Hybrid Core Functions
 * @since 2.0.0
**/


/**
 * Hybrid Get ATTR
 */
function hybrid_get_attr( $name, $context = '' ){
	ob_start();
	if( 'body' == $name ){
		body_class();
	}
	else if( 'header' == $name ){
		echo 'role="banner" id="header"';
	}
	else if( 'menu' == $name ){
		if( 'primary' == $context ){
			echo 'role="navigation" class="menu" id="menu-primary"';
		}
	}
	else if( 'sidebar' == $name ){
		if( 'primary' == $context ){
			echo 'class="sidebar" id="sidebar-primary"';
		}
	}
	else if( 'content' == $name ){
		echo 'class="content" id="content"';
	}
	else if( 'footer' == $name ){
		echo 'id="footer"';
	}
	else if( 'post' == $name ){
		?>id="post-<?php the_ID(); ?>" <?php post_class(); ?><?php
	}
	else if( 'entry-author' == $name ){
		echo 'class="entry-author vcard"';
	}
	else if( 'entry-published' == $name ){
		echo 'class="entry-published"';
	}
	else if( 'entry-title' == $name ){
		echo 'class="entry-title"';
	}
	else if( 'entry-summary' == $name ){
		echo 'class="entry-summary"';
	}
	else if( 'entry-content' == $name ){
		echo 'class="entry-content"';
	}
	else if( 'comment' == $name ){
		?>id="comment-<?php comment_ID(); ?>" <?php comment_class()?><?php
	}
	else if( 'comment-content' == $name ){
		echo 'class="comment-content"';
	}
	else if( 'comment-author' == $name ){
		echo 'class="comment-author vcard"';
	}
	else if( 'comment-published' == $name ){
		echo 'class="comment-published"';
	}
	else if( 'comment-permalink' == $name ){
		echo 'class="comment-permalink"';
	}

	$str = ob_get_contents();
	ob_end_clean();
}

/**
 * Hybrid ATTR
 */
function hybrid_attr( $name, $context = '' ){
	echo hybrid_get_attr( $name, $context );
}



/**
 * Site Title
 */
function hybrid_site_title(){
	if( is_front_page() ){ ?>
		<h1 id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<?php } else { ?>
		<p id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
	<?php }
}

/**
 * Get Menu
 */
function hybrid_get_menu( $name ){
	get_template_part( 'menu/' . $name );
}

/**
 * Get Sidebar
 */
function hybrid_get_sidebar( $name ){
	tamatebako_get_sidebar( $name );
}

/**
 * Site Link
 */
function hybrid_get_site_link(){
	return '<a rel="home" href="' . esc_url( home_url() ) . '" class="site-link">' . get_bloginfo( 'name' )  . '</a>';
}


/**
 * Comment Reply Link
 */
function hybrid_comment_reply_link(){
	echo tamatebako_get_comment_reply_link();
}

/**
 * Comment Callback
 */
function hybrid_comments_callback( $comment, $args, $depth ){
	tamatebako_comments_callback( $comment, $args, $depth );
}
/**
 * Comment Callback
 */
function hybrid_comments_end_callback(){
	tamatebako_comments_end_callback();
}

/**
 * Post Format Link
 */
function hybrid_post_format_link(){
	
}