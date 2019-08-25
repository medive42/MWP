

<html>

<?php get_header(); ?>

<body>

    <div class="wrap">

        <!-- link_Map -->
        <link href="./docs/css/linkMap.css" rel="stylesheet" type="text/css">

        <div class="linkmap">
            <span>
			<a href="./">首页</a>
                &gt;&gt;

				<a id="33" class="go " href="./?cat=37"
                    target="_self">
					<span class="navspan">专家介绍</span>
				</a>
            </span>
        </div>


        <!--主体部分-->
        <div class="main">


            <div class="main_content">
                <div class="Min">
                    <div class="title_header">
                        <h2><span class="No_active">专家风采</span></h2>
                    </div>

                    <div class="DoctorCount pd20">
                        <div id="demo" class="doctor_ltd_inside">
                            <div class="scr_cont">

							   <?php
		                     	$category = get_the_category();
		                        $args=array(
	                	        'cat' => 95,   // 分类ID
		                        'posts_per_page' => 10, // 显示篇数
		                         );
		                       query_posts($args);
		                        if(have_posts()) : while (have_posts()) : the_post();
		                      	?>		
                                <ul id="demo1" class="content_top_ul">

                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <img style="padding-bottom:5px;" src="<?php
                                                 $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(200,100));
                                             echo $array_image_url[0]; ?>" />
                                        </a>
										
                                        <h2>
                                            <a href="<?php the_permalink(); ?>"><?php $name= get_post_meta($post->ID, '姓名', true); echo $name;?></a>
                                        </h2>
										
                                        <div class="zj">
<!--										
                                            <p>
                                                职称：<span>
                                                    主任医师 </span>
                                            </p>
-->											
                                            <p>
                                                科室：
												<span>
                                                    <a href="<?php the_permalink(); ?>"><?php $section= get_post_meta($post->ID, '科室', true); echo $section;?></a>
                                                </span>
                                            </p>

                                            <p class="p_H">专长：<span><?php $section= get_post_meta($post->ID, '专长', true); echo $section;?></span></p>
											
                                        </div>
                                    </li>
									
                                    <p class="dep_ul_icon"></p>
                                </ul>

							<?php  endwhile; endif; wp_reset_query(); ?>		
								

                                <ul id="demo2" class="content_top_ul">


                                    <div class="clearit"></div>
                                    <p class="dep_ul_icon"></p>
                                </ul>

                            </div>
                        </div>
                        <div class="clearit"></div>
                    </div>
                    <script type="text/javascript">
                        window.onload = function () {
                            var li_len = $("#demo1 li").length;
                            if (li_len > 2) {
                                horizontal_pic_scroll('demo', 'left', 30, true);
                            }
                        }

                    </script>
                    <div class="clearit"></div>
                </div>
				
				
				
				
                <div class="Min mt10">
                    <div id="con_setTab_1">
                        <div class="title_header">
                            <h2><span class="No_active">医生介绍</span></h2>
                        </div>
						
						 <?php
    global $cat;
    $cats = get_categories(array(
        'child_of' => $cat,
        'parent' => $cat,
        'hide_empty' => 0
    ));
    $c = get_category($cat);
    if(empty($cats)){
?>


<?php
}else{
    foreach($cats as $the_cat){
        $posts = get_posts(array(
            'category' => $the_cat->cat_ID,
            'numberposts' => 10,
        ));
        if(!empty($posts)){
            echo '
            <div class="menuB pd20">
                <div class="menuCount False">
				<h2 class="DepName"><a title="'.$the_cat->name.'" href="">'.$the_cat->name.'</a></h2>
				  
                <ul>';
                    foreach($posts as $post){
                        echo '
						<li>
                        <a title="'.$post->post_title.'" href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>
						</li>';
                    }
                echo '
				</ul>
			    </div>	
            </div>';
        }
    }
}
?>
              
                        <div class="clearit"></div>
                    </div>
                </div>				
				

                <div class="clearit"></div>
                <div class="clearit"></div>
            </div>





        </div>
        <div class="clearit"></div>
        <!--主体结束-->

        <!-- 友情链接 -->

        <div class="clearit"></div>

<div class="footDiv" style="height:initial;">
<?php get_footer(); ?>
</div>
    </div>

</body>

</html>