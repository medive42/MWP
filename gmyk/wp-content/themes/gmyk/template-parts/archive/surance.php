<?php get_header(); ?>



<body>

<div class="wal">
<!--wal-->

<?php 
echo do_shortcode('[smartslider3 slider=3]');
?>

<div class="pageNow">

<a href="<?php echo (home_url()); ?>">主页</a> -> 

<a><?php single_cat_title(); ?></a> ->
</div>


<!-- 栏目列表 -->

<div class="fl w221">

<div class="sideNav">
<h1>
<?php single_cat_title(); ?>
</h1>
<ul>
 <?php
global $cat;
$cats = get_categories(array(
	'child_of' => $cat,
	'parent' => $cat,
	'hide_empty' => 1
));
$c = get_category($cat);
if (empty($cats)) {
	?>
<div class="item">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="post">
   <h2 style="padding-left:20px;">
   <a title="<?php single_cat_title(); ?>"><?php single_cat_title(); ?></a>
   </h2>
   </div>
  <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
</div>

<?php

} else {
	foreach ($cats as $the_cat) {
		$posts = get_posts(array(
			'category' => $the_cat->cat_ID,
			'numberposts' => 10,
		));
		if (!empty($posts)) {
			echo '<div class="item cat_item"><div class="item_title"><h2 style="padding-left:20px;letter-spacing:1px;"><a title="' . $the_cat->name . '" href="' . get_category_link($the_cat) . '">' . $the_cat->name . '</a></h2></div>
 <ul class="box_list">';
			echo '</ul></div>';
		}
	}
}
?>
</ul>
</div>
</div>

<!-- 列表 -->
<div class="fr w747">
	<div class="newsList" style="margin-bottom:0px;">
	
	
	
	<ul>	
	  <?php
		global $cat;
		$cats = get_categories(array(
			'child_of' => $cat,
			'parent' => $cat,
			'hide_empty' => 0
		));
		$c = get_category($cat);
		if (empty($cats)) {
			?>


        <?php

          } else {
	        foreach ($cats as $the_cat) {
		      $posts = get_posts(array(
		    	'category' => $the_cat->cat_ID,
		    	'numberposts' => 10,
		        ));
	    	if (!empty($posts)) {
		    	echo '
                <div class="item cat_item">
                   <div class="pageTitle" style="padding-left:20px;padding-top:0;padding-bottom:0;margin-bottom:0;">
                       <h1 >
	                      <a style="font-size:16px;color:white;" title="' . $the_cat->name . '" href="' . get_category_link($the_cat) . '">' . $the_cat->name . '</a>
		               </h1>
                   </div>
                   <ul class="box_list">';
			        foreach ($posts as $post) {
			        echo '<li style="padding-left:28px; padding-right:38px;padding-top:20px;background:#f4f4f4;text-indent:2em;">
                         ' . $post->post_content . '
	                      </li>';
			                                  }
			        echo '  
					</ul>
                </div>';
		                        }
	                                     }
                }
        ?>
	</ul> 
	
	
	
	
	
	</div>
      <!---->
   <div class="pageNum" style="padding-top:0px;">
      <?php if (function_exists('Bing_get_pagenavi')) Bing_get_pagenavi(); ?>
    </div>
</div>     



 
<span class="clear_f"></span>
 
</div>



<script src="stat.js"></script>

 

<div class="footDiv" style="height:initial;">
<?php get_footer(); ?>
</div>





</body>

