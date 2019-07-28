<?php get_header(); ?>
<body>
    

<div class="indexbanner">
 
            <?php echo do_shortcode('[metaslider id="164"]'); ?>
 
    <a class="bannerleft" href="javascript:;">&nbsp;</a>
    <a class="bannerright" href="javascript:;">&nbsp;</a>
</div>

<div class="indexpagescont web clearfix">



    <div class="indexaisle">
	
	

	<style>

.indexaisle a{background:white; color:black;width:272px;height:107px; display:block;border-style: solid;border-color: #e3e3e3;margin-right:26px;}
.indexaisle a:hover{background:white; color:black;width:272px;height:107px; display:block;border-style: solid;border-color: #e3e3e3;margin-right:26px;}

.indexaisle a img:hover{background:white;}
</style>
	
	
        <div class="clearfix" style="width:1220px;">
            <a href="/?p=342"  target="_blank" >
                <img class="exaiseicon" src="<?php echo get_theme_file_uri(''); ?>/img/img40.png" style="width:64px;height:64px"  />
                <span class="exaistitle" style="font-size:24px;font-weight:500;float:right;padding-top:45px; letter-spacing:1.5px;margin-right:26px;">角膜病中心</span>

                <em class="exaiseicon2">+</em>
            </a>
            <a href="/?p=3056"  target="_blank" >
                <img class="exaiseicon" src="<?php echo get_theme_file_uri(''); ?>/img/img41.png" style="width:64px;height:64px" />
                <span class="exaistitle" style="font-size:24px;font-weight:500;float:right;padding-top:45px; letter-spacing:1.5px;margin-right:37px;">眼外伤科</span>

                <em class="exaiseicon2">+</em>
            </a>
            <a href="/?p=361"  target="_blank" >
                <img class="exaiseicon" src="<?php echo get_theme_file_uri(''); ?>/img/img42.png" style="width:64px;height:64px" />
                <span class="exaistitle" style="font-size:24px;font-weight:500;float:right;padding-top:45px; letter-spacing:1.5px;margin-right:26px;">白内障中心</span>

                <em class="exaiseicon2">+</em>
            </a>
            <a href="/?p=367"  target="_blank" >
                <img class="exaiseicon" src="<?php echo get_theme_file_uri(''); ?>/img/img43.png" style="width:64px;height:64px" />
                <span class="exaistitle" style="font-size:24px;font-weight:500;float:right;padding-top:45px; letter-spacing:1.5px;margin-right:26px;">眼底病中心</span>

                <em class="exaiseicon2">+</em>
            </a>
            <a href="/?p=3065"  target="_blank" >
                <img class="exaiseicon" src="<?php echo get_theme_file_uri(''); ?>/img/img44.png" style="width:64px;height:64px" />
                <span class="exaistitle" style="font-size:22px;font-weight:500;float:right;padding-top:45px; letter-spacing:1.1px;margin-right:20px;">屈光手术中心</span>

                <em class="exaiseicon2">+</em>
            </a>
            <a href="/?p=370"  target="_blank" >
                <img class="exaiseicon" src="<?php echo get_theme_file_uri(''); ?>/img/img45.png" style="width:64px;height:64px" />
                <span class="exaistitle" style="font-size:22px;font-weight:500;float:right;padding-top:45px; letter-spacing:1.1px;margin-right:33px;">青光眼中心</span>

                <em class="exaiseicon2">+</em>
            </a>
            <a href="/?p=3062"  target="_blank" >
                <img class="exaiseicon" src="<?php echo get_theme_file_uri(''); ?>/img/img46.png" style="width:64px;height:64px" />
                <span class="exaistitle" style="font-size:22px;font-weight:500;float:right;padding-top:45px; letter-spacing:1.1px;margin-right:20px;">近视防控中心</span>

                <em class="exaiseicon2">+</em>
            </a>
			
            <a href="/?page_id=320"  target="_blank" >
                <img class="exaiseicon" src="<?php echo get_theme_file_uri(''); ?>/img/img47.png" style="width:64px;height:64px" />
                <span class="exaistitle" style="font-size:22px;font-weight:500;float:right;padding-top:45px; letter-spacing:1.1px;margin-right:33px;">查看更多...</span>

                <em class="exaiseicon2">+</em>
            </a>
			
			
        </div>
 <a class="arrow-btn btn-left toleft" href="javascript:void(0)" style="position:absolute;top: 110px;left: -110px;background: url(/wp-content/themes/gmyk/img/fanye.png) no-repeat top left;width:50px;border:none;"></a>
 <a class="arrow-btn btn-right toright" href="javascript:void(0)" style="position:absolute;top: 110px;right: -110px;background: url(/wp-content/themes/gmyk/img/fanye.png) no-repeat top right;width:50px;border:none;"></a>
    </div>
	
	

    <div class="indexnewscont clearfix">
	   <div class="col1" style="display:block;height:285px;">
	   
        <div class="inleftnews" style="height:295px;">
            <div class="moduletitle clearfix" style="width:773px;">
                <h4>新闻资讯 <span>news</span> <a class="inmore" href="/?cat=127" >更多 +</a></h4>
            </div>
			
            <div class="newsscrollcont">	
						<ul class="clearfix" style="height:214px;">
					
			
                               <?php $posts = get_posts("category=12&numberposts=4"); ?>  
                                 <?php if ($posts) : ?>  
                                
  								 
								    <?php foreach ($posts as $post) : setup_postdata($post); ?>  
							         <li>
                                    <div class="imgDiv" href="<?php the_permalink()?>" width="312" height="220" ><a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a> 
									
							 
									 </div>
								    </li>			
                                    <?php endforeach; ?>  
                                 
							 
                               <?php endif; ?>			
			             
			
			            </ul>
			<!--
                <a class="nsleft" href="javascript:;"></a>
                <a class="nsright" href="javascript:;"></a>
			-->	
            </div>
			
        </div>
        <div class="medicalright" style="width:430px;padding-left:25px;height:225px;padding-top:50px;">

            <div class="doctorscroll">

          
                               <?php $posts = get_posts("category=12&numberposts=6"); ?>  
                                 <?php if ($posts) : ?>  
                                
  								 
								    <?php foreach ($posts as $post) : setup_postdata($post); ?>  
                                    <dt style="height:32px;padding-left:20px;background:url(<?php echo get_theme_file_uri(''); ?>/img/sideNav.gif) no-repeat scroll 0px center;" ><a href="<?php the_permalink()?>" style="font-size:16px;line-height:29px;"><?php customTitle(80); ?> </a> 
									
									</dt>	 
									
									<dd class="clearfix" style="padding-right: 80px;margin-bottom:  16px;margin-top:  -10px;color:#a1a2a4;">
                                     </dd>												
                                    <?php endforeach; ?>  
                                 
							 
                               <?php endif; ?>

                                               
            </div>

        </div>
        <div class="fr indexPart3" style="width:382px;height:285px;padding-top:0;">
            <div class="moduletitle clearfix" >
                <h4>专家风采 <span>medical service</span><a class="inmore" href="/?page_id=320" >更多 +</a></h4>
				
            </div>
      <div class="list" style="width:380px;margin-left:-15px;">
		
			
		    <?php
		    $args=array(
		        'cat' => 95,   // 分类ID
		        'posts_per_page' => 3, // 显示篇数
		    );
		    query_posts($args);
		    if(have_posts()) : while (have_posts()) : the_post();
			?>
            <ul> 
		     <li style="padding-left:190px;width:190px;">
			  <div class="imgDiv" style="float:left;background:#f4f4f4;border-radius:5px;margin-right:20px;"><img style="width:175px;height:240px;float:left;margin-top:-30px;" src="
                <?php
                    $array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(200,100));
                     echo $array_image_url[0];
                ?>" />
			   </div>

			   <h2 style="width:130px;">
			     <b>姓名：</b><a style="font-size:16px;" href="<?php the_permalink();?>"><?php $name= get_post_meta($post->ID, '姓名', true); echo $name;?></a>   <br/>
				    <dd class="clearfix" style="padding-right: 80px;margin-bottom:  16px;margin-top:  -10px;color:#a1a2a4;">
                    </dd>	
       			 <b>科室：</b><a style="font-size:16px;"><?php $section= get_post_meta($post->ID, '科室', true); echo $section;?></a><br/>
<!--                 <b>职称：</b><a><?php $title= get_post_meta($post->ID, '职称', true); echo $title;?></a><br/>
-->
				    <dd class="clearfix" style="padding-right: 80px;margin-bottom:  16px;margin-top:  -10px;color:#a1a2a4;">
                    </dd>
				 <b>专长：</b><br />
				 
			   </h2>
			   				    <dd class="clearfix" style="padding-right: 80px;margin-bottom:  16px;margin-top:  -10px;color:#a1a2a4;">
                    </dd>
			  <div class="content" style="width:140px;font-size:16px;padding:0;" >
                      <?php $skills= get_post_meta($post->ID, '专长', true); echo $skills;?>
              </div> 
<!--			  
		      <div class="btnDiv"><a href="<?php the_permalink();?>" >阅读详细内容 </a></div>
-->			  
             </li>
            </ul>
		     <?php  endwhile; endif; wp_reset_query(); ?>

			
      </div>
</div>
       
	   </div>

   
        <div class="inrightnews" style="position:absolute;" >
            <div class="moduletitle changenewslist clearfix">
                
                <h4 class="clearfix">
                    <a class="cur" href="javascript:;" rel="/News/index.html">科普基地</a>
                    <a href="javascript:;" rel="/?cat=66">公益慈善</a>
                    <a href="javascript:;" rel="/?cat=114">特色医疗</a>
                </h4>
            </div>
            <div class="changenewscont">
                <div class="changenewstext">
				
                        <dl>
                        <a class="inmore" href="/?cat=4" style="margin-top:-50px;">更多 +</a>
                               <?php $posts = get_posts("category=5&numberposts=5"); ?>  
                                 <?php if ($posts) : ?>  
                                
  								 
								    <?php foreach ($posts as $post) : setup_postdata($post); ?>  
                                    <dt style="height:33px;padding-left:20px;padding-top:4px;background:url(<?php echo get_theme_file_uri(''); ?>/img/sideNav.gif) no-repeat scroll 0px center;">【
									<?php $category = get_the_category();
									echo $category[0]->cat_name;?>】
									<a href="<?php the_permalink()?>" style="font-size:16px;"> <?php customTitle(70); ?> </a> 
									<span style="float:right;"><?php the_date('Y-m-d'); ?></span>	 
									    <dd class="clearfix" style="padding-right: 80px;margin-bottom:  16px;margin-top:  -10px;color:#a1a2a4;">
                                         </dd>	
                                    </dt>										 
                                    <?php endforeach; ?>  
                                 
                               <?php endif; ?>						
						</dl>   
				
				</div>				
				
				
				
                <div class="changenewstext">
				
                        <dl>
                        <a class="inmore" href="/?cat=66" style="margin-top:-50px;">更多 +</a> 
                               <?php $posts = get_posts("category=66&numberposts=5"); ?>  
                                 <?php if ($posts) : ?>  
                                
  								 
								    <?php foreach ($posts as $post) : setup_postdata($post); ?>  
                                    <dt style="height:33px;padding-left:20px;padding-top:4px;background:url(<?php echo get_theme_file_uri(''); ?>/img/sideNav.gif) no-repeat scroll 0px center;">【
									<?php $category = get_the_category();
									echo $category[0]->cat_name;?>】
									<a href="<?php the_permalink()?>" style="font-size:16px;"> <?php customTitle(70); ?> </a> 
									<span style="float:right;"><?php the_date('Y-m-d'); ?></span>	 
									    <dd class="clearfix" style="padding-right: 80px;margin-bottom:  16px;margin-top:  -10px;color:#a1a2a4;">
                                         </dd>	
                                    </dt>										 
                                    <?php endforeach; ?>  
                                 
                               <?php endif; ?>		
						</dl>                  
				</div>
                <div class="changenewstext">
				 
                        <dl>
						<a class="inmore" href="/?cat=114" style="margin-top:-50px;">更多 +</a>
                               <?php $posts = get_posts("category=114&numberposts=5"); ?>  
                                 <?php if ($posts) : ?>  
                                
  								 
								    <?php foreach ($posts as $post) : setup_postdata($post); ?>  
                                    <dt style="height:33px;padding-left:20px;padding-top:4px;background:url(<?php echo get_theme_file_uri(''); ?>/img/sideNav.gif) no-repeat scroll 0px center;">【
									<?php $category = get_the_category();
									echo $category[0]->cat_name;?>】
									<a href="<?php the_permalink()?>" style="font-size:16px;"> <?php customTitle(70); ?> </a> 
									<span style="float:right;"><?php the_date('Y-m-d'); ?></span>	 
									    <dd class="clearfix" style="padding-right: 80px;margin-bottom:  16px;margin-top:  -10px;color:#a1a2a4;">
                                         </dd>	
                                    </dt>										 
                                    <?php endforeach; ?>  
                                 
                               <?php endif; ?>					
						</dl>                 
                </div>
            </div>
        </div>	
        <div class="medicalleft">
            <div class="moduletitle clearfix">
                <h4>病友服务 <span>medical service</span></h4>
            </div>
            <div class="expertlink">
                <ul class="clearfix">
                        <li>
                            <a href="/?cat=49"  target="_blank">
                                <em>
                                    <img src="<?php echo get_theme_file_uri(''); ?>/img/img47h.png"  alt="就医指南" title="就医指南" /></em>
                                <span>就诊指南</span>
                            </a>
                        </li>                        <li>
                            <a href="/?cat=50" target="_blank">
                                <em>
                                    <img src="<?php echo get_theme_file_uri(''); ?>/img/img48h.png"   alt="出/停诊信息" title="出/停诊信息" /></em>
                                <span>出诊时间</span>
                            </a>
                        </li>                        <li>
                            <a href="/?cat=136"  target="_blank">
                                <em>
                                    <img src="<?php echo get_theme_file_uri(''); ?>/img/img49h.png"  alt="预约挂号" title="预约挂号" /></em>
                                <span>预约挂号</span>
                            </a>
                        </li>                        <li>
                            <a href="/?cat=111" target="_blank">
                                <em>
                                    <img src="<?php echo get_theme_file_uri(''); ?>/img/img50h.png"   alt="出/科室查询" title="出/科室查询" /></em>
                                <span>便民服务</span>
                            </a>
                        </li>   
                        <li>
                            <a href="/?cat=113" target="_blank">
                                <em>
                                    <img src="<?php echo get_theme_file_uri(''); ?>/img/img53h.png"  alt="乘车路线" title="乘车路线" /></em>
                                <span>来院导航</span>
                            </a>
                        </li>     						
						<li>
                            <a href="/?cat=112" target="_blank">
                                <em>
                                    <img src="<?php echo get_theme_file_uri(''); ?>/img/img52h.png"  alt="医保服务" title="医保服务" /></em>
                                <span>医保服务</span>
                            </a>
                        </li>                                                          
				</ul>
            </div>
        </div>

    </div>
</div>

<div class="footDiv" style="">
<?php get_footer(); ?>
</div>

</body>
<script type="text/javascript" src="<?php echo get_theme_file_uri(''); ?>/js/jquery.cycle.all.js" ></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri(''); ?>/js/layout.js" ></script>

</html>