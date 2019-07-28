<?php
if (in_category('expert') || post_is_in_descendant_category(37))
{
  include(TEMPLATEPATH .'/template-parts/archive/expert.php');
}
elseif ( in_category('section') || post_is_in_descendant_category(38) )
{
  include(TEMPLATEPATH .'/template-parts/archive/section2.php');
  }
elseif ( in_category('about') || post_is_in_descendant_category(2) )
{
  include(TEMPLATEPATH .'/template-parts/archive/about.php');  
}
elseif ( in_category('about') || post_is_in_descendant_category(46) )
{
  include(TEMPLATEPATH .'/template-parts/archive/about.php');  
}
elseif ( in_category('about') || post_is_in_descendant_category(47) )
{
  include(TEMPLATEPATH .'/template-parts/archive/about.php');  
}
elseif ( in_category('about') || post_is_in_descendant_category(66) )
{
  include(TEMPLATEPATH .'/template-parts/archive/about.php');  
}
elseif ( in_category('kepu') || post_is_in_descendant_category(4) )
{
  include(TEMPLATEPATH .'/template-parts/archive/kepu.php');  
}
elseif ( in_category('guidance') || post_is_in_descendant_category(49) )
{
  include(TEMPLATEPATH .'/template-parts/archive/guidance.php');  
}
elseif ( in_category('surance') || post_is_in_descendant_category(112) )
{
  include(TEMPLATEPATH .'/template-parts/archive/surance.php');  
}
elseif ( in_category('facility') || post_is_in_descendant_category(111) )
{
  include(TEMPLATEPATH .'/template-parts/archive/facility.php');  
}
elseif ( in_category('order') || post_is_in_descendant_category(8) )
{
  include(TEMPLATEPATH .'/template-parts/archive/order.php');  
}

else
{
  include(TEMPLATEPATH .'/template-parts/archive/other.php');
}
?> 