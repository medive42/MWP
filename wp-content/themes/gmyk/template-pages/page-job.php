<?php
/*
Template Name: 招聘模板
*/
?>

<?php get_header(); ?>

<body>



<div class="wal">

<?php echo do_shortcode('[metaslider id="2755"]'); ?>


<div class="pageNow">

</div>
<div class="fl w221">

   <div class="sideNav">
     <h1>人才招聘</h1>
	  <ul>
<!--       <li><a href=""  class='aNow'style="left:-5px;">人才招娉</a></li> -->
	  </ul>
     </div>
</div>
<div class="fr w747">
      <div class="newsList">
            <ul>
			<div class="item cat_item">
			     <div class="box_list">
				 <li>
	   <span class="alignright" style="margin-left:20px;">职位</span><a style="background:none;" title="" href=""></a>		 
	   <span class="alignright" style="margin-left:350px;">日期</span><a style="background:none;" title="" href=""></a>
	   <span class="alignright" style="margin-left:650px;">操作</span><a style="background:none;" title="" href=""></a>
                </li>
              <?php query_posts('cat=72&posts_per_page=10'); 
              while(have_posts()): the_post(); ?>
                <li>
	   <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	   <span class="alignright" style="margin-left:350px;"><?php the_time('Y-m-d'); ?></span><a style="background:none;" title="'.$post->post_title.'" href="'.get_permalink($post->ID).'"></a>
	   <a style="background:none;float:right;padding-right:180px;" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">查看</a>
                </li>
              <?php endwhile; wp_reset_query(); ?>
               </div>
			 </div>
            </ul>
      </div>
</div>
<span class="clear_f"></span>



</div>

<div class="footDiv" style="height:initial;">

<?php get_footer(); ?>
</div>

</body>
