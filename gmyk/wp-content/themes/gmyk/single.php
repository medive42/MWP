<?php get_header(); ?>

<body>


<div class="wal">
<!--wal-->
<span class="clear_f"></span>
<div class="pageNow">
<a href="<?php echo (home_url());?>">主页</a> -> 
<a>
<?php
      $category = get_the_category();
      echo $category[0]->cat_name;
?>
</a> ->

</div>



<div class="fl w676" style="width:785px;">
<div class="newShow">
            <h1 style="text-align: center;font-size:18px;font-weight:bold;line-height: 20px;"><?php the_title();?></h1>
			<span class="clear_f"></span>
			<div class="time" style="text-align: center;font-size:  14px;    border-bottom: 1px dashed #dedede;"><?php the_time('Y年m月d日'); ?></div>
						<span class="clear_f"></span>
            <div class="content lcontent">
              <div id="js_content">
			 <?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/post/content', get_post_format() );
			endwhile; // End of the loop.
			?>
              </div>
            </div>
			
            <div class="btnDiv" style="text-align:center;margin-top:10px;">
            <a target="_blank" href="<?php previous_post_link($format, $link, $in_same_cat = false, $excluded_categories = ''); ?>">上一篇</a>
			<a href="index.php">返回首页</a>
			<a href="<?php next_post_link($format, $link, $in_same_cat = false, $excluded_categories = ''); ?>">下一篇</a>
            </div>
</div>
</div>
<div class="fr w293">

    <style type="text/css">
      .sideTitle a{color: white;}
    </style>

     <h1 class="sideTitle sideTitle_3"><a href="" >相关专家</a></h1>
      <div class="sideList">
           <ul>
           <li><a href="" >* 暂无相关专家...</a></li>
           </ul>
      </div>
      <h1 class="sideTitle sideTitle_1"><a href="">相关新闻</a></h1>
      <div class="sideList">
<ul>
<?php
global $post, $wpdb;
$cats = wp_get_post_categories($post->ID);
if ($cats) {
  $related = $wpdb->get_results("
  SELECT post_title, ID
  FROM {$wpdb->prefix}posts, {$wpdb->prefix}term_relationships, {$wpdb->prefix}term_taxonomy
  WHERE {$wpdb->prefix}posts.ID = {$wpdb->prefix}term_relationships.object_id
  AND {$wpdb->prefix}term_taxonomy.taxonomy = 'category'
  AND {$wpdb->prefix}term_taxonomy.term_taxonomy_id = {$wpdb->prefix}term_relationships.term_taxonomy_id
  AND {$wpdb->prefix}posts.post_status = 'publish'
  AND {$wpdb->prefix}posts.post_type = 'post'
  AND {$wpdb->prefix}term_taxonomy.term_id = '" . $cats[0] . "'
  AND {$wpdb->prefix}posts.ID != '" . $post->ID . "'
  ORDER BY RAND( )
  LIMIT 6");

  if ( $related ) {
	  foreach ($related as $related_post) {
?>
	<li><a href="<?php echo get_permalink($related_post->ID); ?>" rel="bookmark" title="<?php echo $related_post->post_title; ?>">* <?php echo $related_post->post_title; ?></a></li>
<?php
    } 
  }
  else {
    echo '<li>* 暂无相关文章</li>';
  } 
}
else {
  echo '<li>* 暂无相关文章</li>';
}
?>
</ul>
      </div>
<!--
	  <h1 class="sideTitle sideTitle_2"><a href=""">健康资讯</a></h1>
      <div class="sideList sideList2">
    <ul>
    <?php
    $cat = get_the_category();
    foreach($cat as $key=>$category){
        $catid = $category->term_id;
    }
    $args = array('orderby' => 'rand','showposts' => 8,'cat' => $catid );
    $query_posts = new WP_Query();
    $query_posts->query($args);
    while ($query_posts->have_posts()) : $query_posts->the_post();
    ?>
    <li style="padding-left:25px;"><a  href="<?php the_permalink();?>">* <?php the_title();?></a></li>
    <?php endwhile;?>
    <?php wp_reset_query();?>
    </ul>
      </div> 
</div>
-->
 
</div>
<span class="clear_f"></span>



</div>

<div class="footDiv" style="height:initial;">

<?php get_footer(); ?>

</div>


</body>
</html>
