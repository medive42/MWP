

<?php get_header(); ?>

<body>


<div class="wal">
<!--wal-->
<div class="pageNow"><a href="" >主页</a> -> <a href="" >专家介绍</a> -> </div>
<div class="fl w676" style="width:820px;">
      <h1 class="pageTitle" style="padding:0 0 0 10;margin-bottom:0;">
	    <?php
        $name= get_post_meta($post->ID, '姓名', true);
        echo $name;
		?>    
	  </h1>
      <div class="ExpertsPart3">
           
			<img class="imgDiv" style="width:160px;height:190px" src="
               <?php
                    $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(200,100));
                     echo $array_image_url[0];
               ?>" />
            <div class="content"style="text-indent:0;font-size:16px;line-height:32px;padding:10 0 0 192px;">
			      <b>姓名：</b><a><?php $name= get_post_meta($post->ID, '姓名', true); echo $name;?></a><br />
<!--                  <b>科室：</b><a><?php $section= get_post_meta($post->ID, '科室', true); echo $section;?></a><br />  -->
                  <b>职称：</b><?php $title= get_post_meta($post->ID, '职称', true); echo $title;?> <br />
                  <b>专长：</b><?php $skills= get_post_meta($post->ID, '专长', true); echo $skills;?> <br />
				  <b>常规出诊时间：</b><?php $time= get_post_meta($post->ID, '常规出诊时间', true); echo $time;?>
            </div>
            <table style="width:100%" cellpadding="0" cellspacing="0" border="0" id="chzhen">
            </table>
      </div>
      <!---->
      <div class="pageTitle2" style="margin-bottom:20px;"><h1>个人简历</h1></div>
      <div class="ExpertsPart2" style="font-size:16px;">
	         <div id="js_content" style="text-indent:2em;>
			 <?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/post/content', get_post_format() );
			endwhile; // End of the loop.
			?>
              </div>    
      </div>
<span class="clear_f"></span>
      <div class="pageTitle2" ><h1>设备仪器</h1></div>
      <div class="ExpertsPart2">
	  
		      <div class="aboutPart2" style="padding-top:20px;">
			  
         			<ul>
            <?php
		    $args=array(
		        'cat' => 75,   // 分类ID
		        'posts_per_page' => 10, // 显示篇数
		    );
		    query_posts($args);
		    if(have_posts()) : while (have_posts()) : the_post();
			?>
			
			<li style="width:222px;height:210px;border-radius: 5px;margin-right:10px;">
			
			
		    <div class="post">
			<!-- Post Title -->
			<h1 class="title"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h1>
			<!-- Post Image -->
			<div class="hr clearfix"> </div>
			<img class="imgDiv" style="width:100%;height:180px" src="
               <?php
                    $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(200,100));
                     echo $array_image_url[0];
               ?>" />
	
			<!-- Post Content -->
			  <br /><br />
			  <a>
			   <?php the_excerpt(); ?>
			  </a>
		      <br /><br />
		 	<!-- Read More Button -->
			
			</div>
			

		     <?php  endwhile; endif; wp_reset_query(); ?>
			
			
			
			 </li>
			 

	        </ul>

                                                                       			

			
      </div>
		
		
		
		
      </div>
</div>
<div class="fr w293" style="position:absolute;float:right;padding-left:888px;margin-top:330px;">

    <style type="text/css">
      .sideTitle a{color: white;}
    </style>

     <h1 class="sideTitle sideTitle_3"style="margin-top:10px;"><a href="" >相关专家</a></h1>
      <div class="sideList">
<ul id="tags_related">
<?php
global $post, $wpdb;
$post_tags = wp_get_post_tags($post->ID);
if ($post_tags) {
    $tag_list = '';
    foreach ($post_tags as $tag) {
        // 获取标签列表
        $tag_list .= $tag->term_id.',';
    }
    $tag_list = substr($tag_list, 0, strlen($tag_list)-1);

    $related_posts = $wpdb->get_results("
        SELECT DISTINCT ID, post_title
        FROM {$wpdb->prefix}posts, {$wpdb->prefix}term_relationships, {$wpdb->prefix}term_taxonomy
        WHERE {$wpdb->prefix}term_taxonomy.term_taxonomy_id = {$wpdb->prefix}term_relationships.term_taxonomy_id
        AND ID = object_id
        AND taxonomy = 'post_tag'
        AND post_status = 'publish'
        AND post_type = 'post'
        AND term_id IN (" . $tag_list . ")
        AND ID != '" . $post->ID . "'
        ORDER BY RAND()
        LIMIT 6");
        // 以上代码中的 6 为限制只获取6篇相关文章
        // 通过修改数字 6，可修改你想要的文章数量

    if ( $related_posts ) {
        foreach ($related_posts as $related_post) {
?>
    <li><a href="<?php echo get_permalink($related_post->ID); ?>" rel="bookmark" title="<?php echo $related_post->post_title; ?>"><?php echo $related_post->post_title; ?></a></li>
<?php   } 
    }
    else {
      echo '<li>暂无相关文章</li>';
    } 
}
else {
  echo '<li>暂无相关文章</li>';
}
?>
</ul>
      </div>
  </div>
<div class="fr w293">	  
	       <h1 class="sideTitle sideTitle_3"><a href="" >医疗团队</a></h1>
      <div class="sideList">
           <ul>
            <?php $posts = get_posts( "category=44&numberposts=6" ); ?>  
<?php if( $posts ) : ?>  
<ul><?php foreach( $posts as $post ) : setup_postdata( $post ); ?>  
<li style="font-size:16px;">  
<a href="<?php the_permalink() ?>" rel=”bookmark” title=”<?php the_title(); ?>”><?php the_title(); ?></a>  
</li>  
<?php endforeach; ?>  
</ul>  
<?php endif; ?>
           </ul>
      </div>	
	  
</div>
<span class="clear_f"></span>

</div>
<div class="sidebar">
 <?php get_sidebar(); ?>
</div>
<div class="footDiv" style="height:initial;">

<?php get_footer(); ?>

</div>


</div>

</body>
</html>