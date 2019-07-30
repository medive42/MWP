// JavaScript Document
//图片横向滚动，党政工作、医院概况等用到
// 2012-1-12 zhx 改版 改为调用方法 调用参数为元素名称
//name          控件名称
//direction     滚动方向 暂时支持：up left
//speed         滚动延迟时间 数字越大速度越慢 默认为30
function horizontal_pic_scroll(name, direction, speed) {
    if (document.getElementById(name) && document.getElementById(name + "1") && document.getElementById(name + "2")) {
        if (speed == null || speed <= 0) {
            speed = 30;
        }
        var tab = document.getElementById(name);
        var tab1 = document.getElementById(name + "1");
        var tab2 = document.getElementById(name + "2");
        tab2.innerHTML = tab1.innerHTML; //克隆tab1为tab2
        function Marquee() {
            if (direction == "up") {
                //向上滚动
                if (tab2.offsetTop - tab.scrollTop <= 0)//当滚动至tab1与tab2交界时
                    tab.scrollTop -= tab1.offsetHeight //tab跳到最顶端
                else {
                    tab.scrollTop++
                }
            } else if (direction == "left") {
                //向左滚动
                if (tab2.offsetWidth - tab.scrollLeft <= 0)//当滚动至demo1与demo2交界时
                    tab.scrollLeft -= tab1.offsetWidth //demo跳到最顶端
                else {
                    tab.scrollLeft++
                }
            }
        }
        var MyMar = setInterval(Marquee, speed);
        tab.onmouseover = function () { clearInterval(MyMar) }; //鼠标移上时清除定时器达到滚动停止的目的
        tab.onmouseout = function () { MyMar = setInterval(Marquee, speed) }; //鼠标移开时重设定时器
    }
}