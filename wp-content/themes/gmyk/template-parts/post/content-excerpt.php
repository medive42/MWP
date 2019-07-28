
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="box_list">
		<?php if ( 'post' === get_post_type() ) : ?>

		<?php elseif ( 'page' === get_post_type() && get_edit_post_link() ) : ?>
			<div class="box_list">
				<?php twentyseventeen_edit_link(); ?>
			</div>
		<?php endif; ?>
       <li>
		<?php
		if ( is_front_page() && ! is_home() ) {

			the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		} else {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		}
		?>
	   </li>	
	</header>


</article>
