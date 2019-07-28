<?php get_header(); ?>


<div class="newsList" style="width:100%;height:100px;">
   <ul style="height:70px;margin-top:-20px;">
     <li style="line-height:25px;position:absolute;">
	 
		<?php if ( 'post' === get_post_type() ) : ?>
	
		<?php elseif ( 'page' === get_post_type()) : ?>

		<?php endif; ?>
		
        <a href="<?php the_permalink();?>">
		
	    <h2  style="padding-left:38px;font-size:16px;font-weight:600;">
	         <?php
			the_title();
   		     ?>
		</h2>
		
        </a>	
		
		<a href="<?php the_permalink();?>">
		<?php
			the_excerpt();
		?>
	    </a>
    
     </li>	
   </ul>	
  </div>
