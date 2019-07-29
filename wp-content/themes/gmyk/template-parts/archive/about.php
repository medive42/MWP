<?php get_header(); ?>



<body>





<div class="wal">
<!--wal-->

<?php 
echo do_shortcode('[smartslider3 slider=3]');
?>

<div class="pageNow">
<a href="<?php echo (home_url()); ?>">主页</a> -> <a><?php
$category = get_the_category();
$parent = get_cat_name($category[0]->category_parent);
if (!empty($parent)) {
echo $parent;
} else {
echo $category[0]->cat_name;
}
?></a> -><a><?php single_cat_title(); ?></a> ->
</div>


<!-- 栏目列表 -->

<div class="fl w221">

<div class="sideNav">
<h1>
医院概况
</h1>
<ul>

<div class="item">

  <div class="post">

   <h2 style="padding-left:20px;">

   <a href="./?p=262">医院简介</a>
      <a href="./?cat=46">党建风采</a>
	     <a href="./?cat=66">公益慈善</a>
		    <a href="./?cat=47">医院设备</a>
   

   </h2>
   </div>

</div>

</ul>
</div>
</div>

<!-- 列表 -->
<div class="fr w747">
	<div class="newsList">
<li style="margin-bottom: 15px;line-height:32px;padding-top:4px;padding-left:40px;padding-right:20px;">
	   <a style="background:none;padding-left:0;"title="<?php the_title(); ?>" <?php echo category_description(); ?>  
       </a>
</li>


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
   <?php if (have_posts()) : while (have_posts()) : the_post();get_template_part( 'template-parts/post/content-excerpt' ); endwhile?>
      

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
      <!--
      <div class="pageNum" style="padding-top:10px;">
      <?php if (function_exists('Bing_get_pagenavi')) Bing_get_pagenavi(); ?>
      </div>
	  -->
</div>     



 
<span class="clear_f"></span>
 
</div>



<script src="stat.js"></script>

 

<div class="footDiv" style="height:initial;">
<?php get_footer(); ?>
</div>





</body>

