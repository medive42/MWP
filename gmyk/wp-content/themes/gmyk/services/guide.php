
<?php get_header(); ?>

<body>


<div class="wal pageBanner">

	  	  <div class="aboutPart11">
<?php 
echo do_shortcode('[smartslider3 slider=3]');
?>
            <div class="contentDiv">
                  <h1>东莞光明眼科医院简介</h1>
                  <div class="content">
				  东莞光明眼科医院成立于2002年12月7日，是一所国家卫生部批准建设的，由全国政协委员、香港知名人士陈瑞球先生、中山大学中山眼科中心以及东莞市人民医院合资建设的中外合资眼科专科医院。...
                  </div>
            </div>
      </div>
</div>



<div class="wal">
<!--wal-->
<div class="pageNow">
<a href="">主页</a> -&gt; <a href="">医院概况</a> -&gt; <a href="">医院简介</a> -&gt; 
</div>
<div class="fl w221">
      <div class="sideNav">
			<h1>医院概况</h1>
			<ul>
			  
              <li><a href="/?p=262" class="aNow" style="left:-5px;">医院简介</a></li>
              
              <li><a href="/?cat=46" class="" style="left:-5px;">党建风采</a></li>
              
              <li><a href="/?cat=66" class="" style="left:-5px;">公益慈善</a></li>			  
              
              <li><a href="/?cat=47" class="" style="left:-5px;">医院设备</a></li>

              
              
			</ul>
      </div>
</div>
<div class="fr w747">




	  <div class="aboutPart22" style="width:770px;padding-left:20px;text-indent:1.5em;">
<?php
		    $args=array(
		        'cat' => 45,   // 分类ID
		        'posts_per_page' => 10, // 显示篇数
		    );
		    query_posts($args);
		    if(have_posts()) : while (have_posts()) : the_post();
			?>
		    <div class="post">
			<!-- Post Title -->
			<h3  style="text-align: center;font-size:  18px;font-weight:  bold;text-align:center;" class="title"><a rel="bookmark"><?php the_title();?></a></h3>
			<!-- Post Data -->

			<div class="entry-content"> 

			<?php the_content(); ?>
			</div>
			</div>

		<?php  endwhile; endif; wp_reset_query(); ?>

      </div>

</div>
<span class="clear_f"></span>
<!--walEnd-->
</div>

<script src="stat.js"></script>

 

<div class="footDiv" style="height:initial;">
<?php get_footer(); ?>
</div>



</body>