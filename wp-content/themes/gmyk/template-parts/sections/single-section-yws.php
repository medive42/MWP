<?php get_header(); ?>

<body>


<div class="wal">
<!--wal-->
<div class="pageNow">
<a href="" >医疗团队</a><a href=""><?php wp_title(); ?></a>
</div>
<div class="fl w676"style="width:820px;">
      <div class="DepartmentPart1" style="height:355px;">
            <?php if ( has_post_thumbnail() ) 
			{ 
		    ?>
            <img style="width:820px;height:350px;" src="<?php the_post_thumbnail($post->ID,‘middle’);?>
            <?php 
			} else {?>
           <img style="width:100%;height:100%;" src="<?php bloginfo('template_url');?>"/>
            <?php }?>
		</div>	
      
	  
            <div class="moduletitle clearfix" style="padding-bottom:0;margin-bottom:0;">
<span class="clear_f"></span>
                <h4>科室简介<span>Doctor</span></h4>
            </div>
	  
      <div class="DepartmentPart2" style="padding:0px 0 5px 0;">
　　    <div style="font-size:16px;text-indent:2em;line-height:20px;">
	     <?php 
         echo $post->post_content;
		 ?>
        </div>
      </div>
	  
	  
	  
	      <div class="medicalright" style="width:880px;float:left;padding-top:20px;">
            <div class="moduletitle clearfix">

                <h4>科室专家<span>Doctor</span></h4>
            </div>
            <div class="doctorscroll">
			
		    <?php
			$category = get_the_category();
		    $args=array(
		        'cat' => 77,   // 分类ID
		        'posts_per_page' => 10, // 显示篇数
		    );
		    query_posts($args);
		    if(have_posts()) : while (have_posts()) : the_post();
			?>			  
                <ul style=="padding-left:10px;">
                        <li style="width:180px;margin-bottom:25px;margin-right:30px;height:288px;">
                        <img style="padding-bottom:5px;height:245px;" src="<?php
                    $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(200,100));
                     echo $array_image_url[0]; ?>" />
                        <a href="<?php the_permalink();?>" >
                            <span style="font-size:14px;line-height:17px;"><?php $name= get_post_meta($post->ID, '姓名', true); echo $name;?></span>
                            <em style="font-size:13px;line-height:15px;"><?php $section= get_post_meta($post->ID, '科室', true); echo $section;?></em>
                        </a>
                        <a class="floatdoctor" href="<?php the_permalink();?>" >&nbsp;</a>
                       </li>
                </ul>

		    <?php  endwhile; endif; wp_reset_query(); ?>					
				<!--
                <a class="doctorleft" href="javascript:;">&nbsp;</a>
                <a class="doctorright" href="javascript:;">&nbsp;</a>
				-->
            </div>

         </div>  
	  
	  
	  	  

	  
      <div class="aboutPart2" style="padding-top:10px;width:880px;">
	              <div class="moduletitle clearfix" style="padding-bottom:0;margin-bottom:0;">

                <h4>医疗设备<span>Equipment</span></h4>
            </div>
         			<ul>
            <?php
		    $args=array(
		        'cat' => 47,   // 分类ID
		        'posts_per_page' => 4, // 显示篇数
		    );
		    query_posts($args);
		    if(have_posts()) : while (have_posts()) : the_post();
			?>
			
			<li style="width:198px;height:210px;border-radius: 5px;margin-right:10px;margin-top:20px;">
			
			
		    <div class="post" style="height:210px;">
			<!-- Post Title -->
			<h1 class="title"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h1>
			<!-- Post Image -->
	
			<a href="<?php the_permalink();?>">
			<div align="center";>
			<img class="imgDiv" style="width:170px;height:140px;padding-top:10px;" src="
               <?php
                    $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(200,100));
                     echo $array_image_url[0];
               ?>" />
			  </div> 
	        </a> 
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
<div class="fr w293">	  
   <h1 class="sideTitle sideTitle_3" ><a href="" style="height:50px;font-size:22px;color:white;">医疗团队</a></h1>
 <!-- 获取指定栏目文章列表-->  
      <div class="sideList">
           <ul>
            <?php $posts = get_posts( "category=44&numberposts=5" ); ?>  
             <?php if( $posts ) : ?>  
              <ul><?php foreach( $posts as $post ) : setup_postdata( $post ); ?>  
                  <li style="height:44px;padding-top:10px;font-size:16px;">  
                      <a style="font-size:16px;padding-left:20px;" href="<?php the_permalink() ?>" rel=”bookmark” title=”<?php the_title(); ?>”>* <?php the_title(); ?></a>  
                  </li>  
                  <?php endforeach; ?>  
              </ul>  
             <?php endif; ?>
           </ul>
      </div>	
</div>

<div class="fr w293" >	  
   <h1 class="sideTitle sideTitle_3" style="background:#d07f81;"><a href="" style="height:50px;font-size:22px;color:white;">相关新闻</a></h1>
 <!-- 获取指定栏目文章列表-->  
      <div class="sideList">
           <ul>
            <?php $posts = get_posts( "category=102&numberposts=6" ); ?>  
             <?php if( $posts ) : ?>  
              <ul><?php foreach( $posts as $post ) : setup_postdata( $post ); ?>  
                  <li style="height:44px;padding-top:10px;font-size:18px;">  
                      <a style="font-size:16px;padding-left:20px;" href="<?php the_permalink() ?>" rel=”bookmark” title=”<?php the_title(); ?>”>* <?php the_title(); ?></a>  
                  </li>  
                  <?php endforeach; ?>  
              </ul>  
             <?php endif; ?>
           </ul>
      </div>	
</div>

<span class="clear_f"></span>
 
</div>

<script src="<?php echo get_theme_file_uri(''); ?>js/stat.js"  ></script>

<div class="footDiv" style="height:initial;">

<?php get_footer(); ?>

</div>


</div>




</body>
</html>
