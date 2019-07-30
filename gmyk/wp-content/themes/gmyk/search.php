<?php get_header(); ?>
<body>

<div id="primary" class="wal">
	<div class="pageNow">
      <a href="<?php echo (home_url());?>">主页</a> -> <a>"<?php the_search_query(); ?>"的搜索结果</a> ->
    </div>


    <main id="main" class="newsList" role="main">
         
		 <li style="text-align:left;">
		 		
		<?php
		
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'search-content');

			endwhile; // End of the loop.


		else :
		
		?>
		</li>
		<ul>
        
		<span class="clear_f"></span>

		<li style="text-align:center;">
			<a><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></a>
			<span class="clear_f"></span>
			<?php
				get_search_form();

		endif;
		?>
		</li>
        </ul> 
    </main><!-- #main -->
</div><!-- #primary -->

<span class="clear_f"></span>


<div class="footDiv" style="height:initial;">
<?php get_footer(); ?>
</div>

</body>
