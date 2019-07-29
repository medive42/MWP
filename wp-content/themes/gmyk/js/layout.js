// JavaScript Document


	
//屏幕宽度限制
$(function () {

    var removeCssAttr = function (elem, attr) {
        var s = elem.style;
        if (s.removeProperty) {
            s.removeProperty(attr);
        } else {
            s.removeAttribute(attr);//兼容低版本ie
        }
    };
    minwidth();
    $(window).load(function () {
        $(window).resize(function () {
            minwidth();
        })
    });



    function minwidth() {
        if ($(window).width() < 1180) {
            $("body").css({ "width": "1200px" });
        } else {
            removeCssAttr(document.body, 'width');
        }
    };

    //-------- 输入框获取焦点失去焦点 --------



    $(":input[type=text]").on("focus", function () {
        if ($(this).val() == this.defaultValue) {
            $(this).val("");
        }
    }).on("blur", function () {
        if ($(this).val() == '') {
            $(this).val(this.defaultValue);
        }
    });

   //-------- 语言选择 --------
    $(".lanselect").hover(function () {
        $(this).find("em").show();
    }, function () {
        $(this).find("em").hide();
    });

   

    $(".Recruitmentlist li").eq(0).addClass("cur");
    $(".RecruitmentContent").eq(0).show();
    $(".Recruitmentlist li h3").click(function () {
        var leftcont = $(".pagesleft").height();
        var righthe = $(".pagesright").outerHeight();
        setTimeout(function () {
            if (leftcont < righthe) {
                $(".pagesleft").css("height", righthe);
            }
        }, 100);
        if ($(this).next().is(":hidden")) {
            $(".RecruitmentContent").slideUp(300);
            $(".Recruitmentlist li").removeClass("cur");
            $(this).parents("li").addClass("cur");
            $(this).next().slideDown(300);
        } else {
            $(this).parents("li").removeClass("cur");
            $(this).next().slideUp(300);
        }
    });

    //-------- 左右高度 --------
    var leftcont = $(".pagesleft").height();
    var righthe = $(".pagesright").outerHeight();
    setTimeout(function () {
        if (leftcont < righthe) {
            $(".pagesleft").css("height", righthe);
        }
    }, 100);


    //-------- 首页 --------
    $(".changenewslist h4 a").eq(0).addClass("cur");
    $(".changenewstext").eq(0).show();
    $(".changenewslist h4 a").click(function () {
        var thisindex = $(this).index();
        var thislink = $(this).attr("rel");
        $(".inmore").attr("href", thislink);
        $(this).addClass("cur").siblings().removeClass("cur");
        $(".changenewstext").eq(thisindex).show().siblings(".changenewstext").hide();
    });

    $(".doctorscroll ul li").hover(function () {
        $(this).addClass("cur");
    }, function () {
        $(this).removeClass("cur");
    });

    $(".appointbtn a").eq(0).addClass("cur");
    $(".appointchange").eq(0).show();
    $(".appointbtn a").click(function () {
        var thisindex = $(this).index();
        $(this).addClass("cur").siblings().removeClass("cur");
        $(".appointchange").eq(thisindex).show().siblings(".appointchange").hide();
    });

    if ($(".indexbanner").length > 0) {
        $('.indexbanner ul').cycle({
            fx: "fade",
            pagerEvent: "click",
            next: ".bannerright",
            prev: ".bannerleft",
            speed: 800,
            timeout: 3000,
            pause: 1

        });
    };
    
    if ($(".newsscrollcont").length > 0) {
        $('.newsscrollcont ul').cycle({
            fx: "scrollHorz",
            pagerEvent: "click",
            next: ".nsright",
            prev: ".nsleft",
            speed: 800,
            timeout: 3000,
            pause: 1

        });
    };

    $(".expertlink ul li").hover(function () {
        var newimg = $(this).find("img").attr("newimg");
        $(this).find("img").attr("src", newimg);
    }, function () {
        var oldimg = $(this).find("img").attr("oldimg");
        $(this).find("img").attr("src", oldimg);
    });


    //-------- 专家 --------
    $('.doctorscroll ul').append($(".doctorscroll ul li").clone())
    ycont();

    $(".newslisttwo dl").hover(function () {
        $(this).addClass("cur");
    }, function () {
        $(this).removeClass("cur");
    })


});


function ycont() {

    var gcont = $(".doctorscroll ul");
    var alist = gcont.find("li");
    var glength = alist.length;
    var gwid = alist.outerWidth(true);
    var gleftbtn = $(".doctorleft");
    var grightbtn = $(".doctorright");
    var index = 0;
    var timer = '';


    gcont.css("width", glength * gwid);

    function move() {
        if ( parseInt(gcont.css('marginLeft')) == -gwid*glength/2 ) {
            gcont.css('marginLeft',0)
        }
        if (index == glength/2 ){
            index = 0;
        }
        index++;
        gcont.stop().animate({'marginLeft':-index*gwid})

    }

    timer = setInterval(move,4000)

    gcont.hover(function(){
        clearInterval(timer);
    },function(){
        timer = setInterval(move,4000);
    })

    grightbtn.click(function () {
        clearInterval(timer);
        move()
    });

    gleftbtn.click(function () {
        clearInterval(timer);
        if ( parseInt(gcont.css('marginLeft')) == 0 ) {
            gcont.css('marginLeft',-gwid*glength/2)
        }
        if (index == 0 ){
            index = glength/2;
        }
        index--;
        gcont.stop().animate({'marginLeft':-index*gwid})

    });


};




