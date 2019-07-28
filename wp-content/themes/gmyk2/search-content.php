<?php get_header(); ?>


<div class="newsList" style="width:100%">
   <ul>
     <li>   
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="alignright">
				<?php
				echo 
				twentyseventeen_edit_link();
				?>
			</div>
		<?php elseif ( 'page' === get_post_type()) : ?>

		<?php endif; ?>
     
	    <h2 style="padding-left:32px">
	         <?php
			the_title();
   		     ?>
		</h2>	 
		<?php
			the_excerpt();
		?>
	   
    
     </li>	
   </ul>	
  </div>
