// JavaScript Document
//可以将公用的js 放到这里， 比如tab切换，字号改变，鼠标经过效果……  wsq

//带左右箭头的横向滚动
function sollImageBox(wrapBox, insideBox, toleft, toright, boxWidth, moveWidth, time, sTime, Isauto) {
    //如果目前宽度不足以滚动，则跳出方法
    if ($(insideBox).width() < boxWidth) {
        $(toleft).addClass("noPrev");
        $(toright).addClass("noNext");
        return;
    }
    //方法开始
    var timeObj;

    function sroolBox(a) {
        var moveToVal = 0;
        if (a == "right") {
            //添加自动是否自动切换
            if (Isauto) {
                moveToVal = getMargin() == boxWidth - $(insideBox).width() ? 0 : getMargin() - moveWidth < boxWidth - $(insideBox).width() ? boxWidth - $(insideBox).width() : getMargin() - moveWidth;
            }
            else {
                if (getMargin() <= boxWidth - $(insideBox).width()) {
                    $(toright).addClass("noNext");
                    moveToVal = getMargin()
                }
                else {
                    $(toleft).removeClass("noPrev");
                    moveToVal = getMargin() - moveWidth < boxWidth - $(insideBox).width() ? boxWidth - $(insideBox).width() : getMargin() - moveWidth;
                }
            }
        }
        else if (a == "left") {
            if (Isauto) {
                moveToVal = getMargin() == 0 ? boxWidth - $(insideBox).width() : getMargin() + moveWidth > 0 ? 0 : getMargin() + moveWidth;
            }
            else {
                if (getMargin() == 0) {
                    $(toleft).addClass("noPrev");

                }
                else {
                    $(toright).removeClass("noNext");
                    moveToVal = getMargin() + moveWidth > 0 ? 0 : getMargin() + moveWidth;
                }
            }
        }
        $(insideBox + ":not(:animated)").animate({marginLeft: moveToVal}, sTime);
    }

    function getMargin() {
        return parseInt($(insideBox).css("marginLeft"));
    }

    //自动切换
    if (Isauto) {
        $(wrapBox).hover(
            function () {
                clearTimeout(timeObj);
            },
            function () {
                timeObj = setInterval(function () {
                    sroolBox('right')
                }, time);
            }
        ).trigger("mouseleave");
    }
    $(toleft).click(function () {
        sroolBox('left');
    })
    $(toright).click(function () {
        sroolBox('right');
    })
}