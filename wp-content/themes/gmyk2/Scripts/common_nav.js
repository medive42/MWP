$(function(){
	var win_W=$(window).width();
	$(".sy2_ul").parent().addClass("Has_Children");
	if(win_W>768){
		$(".Has_Children").hover(function(){
			$(".sy2_ul").hide();
			$(this).find(".sy2_ul").show();
			$(this).find(".sy1_tit").addClass("Hover");
		},function(){
			$(".sy2_ul").hide();
			$(".sy1_tit").removeClass("Hover");
		});
	}
	//手机导航
	$("#open_btn").click(function(){
	 	$("#phone_container").addClass("is-visible");
	 	$(".main").addClass("scale-down");
	 	$(this).hide();
	 });
	 $("#close_btn").click(function(){
	 	$("#phone_container").removeClass("is-visible");
	 	$(".main").removeClass("scale-down");
	 	$("#open_btn").show();
	 });
	 $(".Has_Children>.next_open").click(function(){
  	$(this).siblings(".sy2_ul").slideToggle(200);
  	$(this).parent(".Has_Children").toggleClass("opend");
 })
	
})
 