<?php get_header(); ?>



<body>

<div class="wal">
<!--wal-->

<?php echo do_shortcode('[metaslider id="2755"]'); ?>

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
			'numberposts' => 15,
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
	<div class="newsList">
	
	
	
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
<div class="item cat_item">
   <?php if (have_posts()) : while (have_posts()) : the_post();endwhile?>
      
     <div class="box_list">

       <li>
	   <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	   <span class="alignright" style="margin-left:600px;"><?php the_time('Y-m-d'); ?></span><a title="'.$post->post_title.'" href="'.get_permalink($post->ID).'"></a>
	   </li>

     </div>

<?php else : ?>
<div class="post"><p>暂无文章</p></div>
<?php endif; ?>
</div>
<div class="navigation">
<span class="alignleft"><?php next_posts_link('&laquo; Older posts') ?></span>
<span class="alignright" style="margin-left:600px;"><?php previous_posts_link('Newer posts &raquo;') ?></span>
</div>
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
				echo '<li>
        <span class="alignright" style="margin-left:600px;">' . mysql2date('Y-m-d', $post->post_date) . '</span><a title="' . $post->post_title . '" href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a>
	  </li>';
			}
			echo '</ul>
</div>';
		}
	}
}
?>
	</ul> 
	
	
	
	
	
	</div>
      <!---->
      <div class="pageNum" style="padding-top:10px;">
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

