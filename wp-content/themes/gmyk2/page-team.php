
<?php get_header(); ?>

<body>



<div class="wal pageBanner">
      <div class="indexFlash fadeFlash">
            <ul>
			<!-- 首页焦点图 -->
            <?php echo do_shortcode('[metaslider id="2751"]'); ?>
			
            </ul>

            <div class="btnDiv"> 
			<span class="spanNow" >
			

			</span>

			</div>
      </div>
</div>

<div class="wal">
<!--wal-->
<div class="pageNow" style="background: #f4f4f4 top repeat-x;margin-top:-320px;margin-bottom:10px;border-radius: 6px;">
<a href="<?php echo (home_url());?>" style="padding-left:20px;">主页</a> -><a>医疗团队</a>
</div>



<div class="fr w747" style="width:1200px;padding-top:10px;">

	    <div class="aboutPart2" style="width:1240px;">
		

			<ul>
            <?php
		    $args=array(
		        'cat' => 44,   // 分类ID
		        'posts_per_page' => 12, // 显示篇数
		    );
		    query_posts($args);
		    if(have_posts()) : while (have_posts()) : the_post();
			?>
			
			<li style="width:378px;height:341px;border-radius: 10px;">
			
			
		    <div class="post">

			<!-- Post Image -->
			<div class="hr clearfix"> </div>
			<img class="imgDiv" style="width:100%;height:180px" src="
               <?php
                    $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(200,100));
                     echo $array_image_url[0];
               ?>" />
			<!-- Post Title -->
			<h1 class="title"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h1>	
			<!-- Post Content -->

			  <a style="text-align:center;">
			   <?php the_excerpt(); ?>
			  </a>
			
			</div>
			

		     <?php  endwhile; endif; wp_reset_query(); ?>
			
			
			
			 </li>
			 

	        </ul>
        </div>


	  <div class="pageNow" style="background: #f4f4f4 top repeat-x;margin-bottom:10px;border-radius: 6px;">
         <a style="padding-left:20px;">专家团队</a>
      </div>




      <div class="expertPart1s" style="padding-top:0px;">
            <ul> 
			  
		  <?php
		    $args=array(
		        'cat' => 11,   // 分类ID
		        'posts_per_page' => 8, // 显示篇数
		    );
		    query_posts($args);
		    if(have_posts()) : while (have_posts()) : the_post();
			?>

		
			<div class="imgDiv"  style="float:left;width:265px;background:#f4f4f4;border-radius:5px;margin-right:22px;margin-top:20px;"><img style="width:120px;height:160px;float:left;" src="
               <?php
                    $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(200,100));
                     echo $array_image_url[0];
               ?>" />
			
			  <div class="content" style="float:left;width:135px;height:175px;padding-left:10px;">
			      <b>姓名：</b><a href="<?php the_permalink();?>"><?php $name= get_post_meta($post->ID, '姓名', true); echo $name;?></a><br/>
                  <b>科室：</b><a><?php $section= get_post_meta($post->ID, '科室', true); echo $section;?></a><br/>
                  <b>职称：</b><?php $title= get_post_meta($post->ID, '职称', true); echo $title;?> <br/>
                  	<b >专长：<?php $skills= get_post_meta($post->ID, '专长',true); echo $skills;?> <br /></b>
              </div>
		
			</div>
		



		     <?php  endwhile; endif; wp_reset_query(); ?>



            </ul>
	



		
			
			
      </div>
</div>
<span class="clear_f"></span>
<!--walEnd-->
</div>


<div class="sideBar">
      <ul>
        
      </ul>
</div>

<div class="footDiv" style="height:initial;">
<?php get_footer(); ?>
</div>

</body>
