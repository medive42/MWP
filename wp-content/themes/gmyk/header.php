<?php
/*
Template Name: 主页模板
*/
?>

<title><?php bloginfo(’name’);?></title>

<meta http-equiv="X-UA-Compatible" content="IE=7" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="<?php echo get_theme_file_uri('/js/jquery-1.7.1.min.js' ); ?>" type="text/javascript"></script>
<script src="<?php echo get_theme_file_uri('/js/js.js' ); ?>" type="text/javascript"></script>
<script src="<?php echo get_theme_file_uri('/js/fun.js' ); ?>" type="text/javascript"></script>
<script src="<?php echo get_theme_file_uri('/js/form.js' ); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri('/js/script.js' ); ?>"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri('/js/jQuery.rTabs.js' ); ?>"></script>

<link href="<?php echo get_theme_file_uri(''); ?>/css/main.css"   rel="stylesheet" type="text/css" />
<link href="<?php echo get_theme_file_uri(''); ?>/css/index.css"   rel="stylesheet" type="text/css" />
<link href="<?php echo get_theme_file_uri(''); ?>/css/css.css"   rel="stylesheet" type="text/css" />

<link href="<?php echo get_theme_file_uri(''); ?>/css/global.css"  rel="stylesheet" type="text/css" />
<link href="<?php echo get_theme_file_uri(''); ?>/css/layout.css"  rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo get_theme_file_uri(''); ?>/js/jquery.js" ></script>









    <link href="./docs/css/common.css" rel="stylesheet" type="text/css">
    <link href="./docs/css/doctor.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        blockquote {
            display: none;
            background: #F6FBFF;
            border: 1px solid #C2E2F1;
            margin: -5px 0 0 12px;
            padding: 10px;
            position: absolute;
            text-align: left;
            width: 266px;
            z-index: 2000;
        }
    </style>



    <script src="./docs/js/horizontal_pic_scroll.js" type="text/javascript"></script>






<div class="headDiv">
<div class="wal">
    <img src="<?php echo get_theme_file_uri(''); ?>/img/logo.png" style="width:1200px" />
</div>
</div>  

<!-- 导航栏 -->


<div style="width:100%;background:-webkit-linear-gradient(top,#2488c3,#007bc4)">
<div class="wal nav" style="">


      <ul style="">
	    <li><a href="http://www.gmeye.com.cn">网站首页</a></li>	
	    
        <li><a href="/?page_id=2760"    >医院概况</a></li>
		
        <li><a href="/?page_id=320"   class="sNavA"  onmousemove="showmenu(1)">医疗团队</a></li>
		
        <li><a href="/?cat=4"   >科普基地</a></li>
		
        <li><a href="/?cat=136"   >预约挂号</a></li>
		
		<li><a href="/?page_id=2773"  >人才招聘</a></li>		
		
        <li><a href="/?p=307"  >联系我们</a></li>		
		
      </ul>
	
	
	  
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="topSearch" style="right:1%;">
     <input class="input1 input_hover" type="text" name="s" value="搜索" />
     <input class="btn1" type="button" onclick="document.searchall.submit()" />
     </div>
	</form>
	
	
 	
</div>	

<div class="sNav"> 
    <div class="sNav_01"  id=0>
          <ul>
						
			
          </ul>
    </div>
    <div class="sNav_02" id=1>
          <ul>
			  
              <li><a href="/?p=342"  >角膜病中心</a></li>

              <li><a href="/?p=361"  >白内障中心</a></li>
              <li><a href="/?p=367"  >眼底病中心</a></li>
              <li><a href="/?p=370"  >青光眼中心</a></li>	
			  
              <li><a href="/?p=3056"  >眼外伤专科</a></li>			  
              <li><a href="/?p=253"  >斜弱视专科</a></li>		
              <li><a href="/?p=3059"  >眼眶矫形中心</a></li>				  
              <li><a href="/?page_id=320"  >查看更多...</a></li>					  
			  
          </ul>
    </div>

</div>	
  
</div>	


<script>
function showmenu(id)
{
	//alert(id);
	$(".sNav").show();
	for(i=0;i<7;i++)
	{
		$("#"+i).hide();
	}
	$("#"+id).show();
}
function hidemenu()
{
	$(".sNav").hide();
}
</script>


<div class="sideBar">
      <ul>
        <li><a href="/?cat=136"><div><img src="<?php echo get_theme_file_uri(''); ?>/img/1.png"/></div>预约挂号</a></li>
        <li><a href="/?p=3065:;"><div><img src="<?php echo get_theme_file_uri(''); ?>/img/2.png"/></div>近视手术</a></li>
		<li><a href="/?p=307"><div><img src="<?php echo get_theme_file_uri(''); ?>/img/3.png"/></div>联系电话</a></li>
      </ul>
</div>