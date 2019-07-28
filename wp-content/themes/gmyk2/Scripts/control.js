// 通用Js方法汇总
// 1、单选方法
// 2、复选框改变时 显示或者隐藏控件（同时反控制另一个控件controlId2，无反控则只传3个参数即可）
// 3、“是否组合”复选框改变时 显示或者隐藏控件（同时反控制另一个控件controlId2，无反控则只传3个参数即可）
// 4  下拉列表改变时 显示或者隐藏控件
// 5、针对Awesome弹出框的loading状态*******（不需要考虑调用的问题 在通用插件中已自动调用）*******
// 6、Ajax获取页面信息 并赋值到对应id元素中
// 7、文本框发生改变时 同步将值赋值到另一个元素内（都必须为value属性）
// 8、通用的单选方法
// 9、文本框获得焦点和失去焦点变化
// 10、鼠标浮上显示与隐藏
// 11、针对百度编辑器的分页，现在应用与文章页面
// 12、
// 13、静态页分页页面跳转
///15 “是否组合”复选框改变时 显示或者隐藏控件集合


// 1、单选方法
// 2011-11-2 zhx
function onRadio(chk) {
    if (chk.checked) {
        $('input[type=checkbox][name="' + chk.name + '"]').each(function () {
            if (this.value != chk.value) {
                $(this).prop('checked', false);
                $(this).change();
            }
        });
    }
}

/*2 复选框改变时 显示或者隐藏控件（同时反控制另一个控件controlId2，无反控则只传3个参数即可）
self            this自身
showValue       当为自身选中value时 显示控件controlId 隐藏控件controlId2
controlId       被操作的控件Id
controlId2      被反操作的控件Id

引用：onclick = "OnCheckShowOrHide(this,'" + (int)TestEnum.RuleType.Sql语句 + "','type1Div','type2Div');"
*/
function OnCheckShowOrHide(self, state, controlId, controlId2) {
    //alert(self.id + " " + state + " " + controlId + " " + controlId2);
    var divObj = $("#" + controlId);
    var divObj2 = $("#" + controlId2);
    if (self.checked == state) {
        if (divObj) {
            divObj.show();
        }
        if (divObj2) {
            divObj2.hide();
        }
    } else {
        if (divObj) {
            divObj.hide();
        }
        if (divObj2) {
            divObj2.show();
        }
    }
}

/*3 “是否组合”复选框改变时 显示或者隐藏控件（同时反控制另一个控件controlId2，无反控则只传3个参数即可）
self            this自身
showValue       当为自身选中value时 显示控件controlId 隐藏控件controlId2
controlId       被操作的控件Id
controlId2      被反操作的控件Id

引用：onclick = "OnCheckBooleanShowOrHide(this,'" + (int)TestEnum.RuleType.Sql语句 + "','type1Div','type2Div');"
*/
function OnCheckBooleanShowOrHide(self, state, controlId, controlId2) {
    //alert(self.id + " " + state + " " + controlId + " " + controlId2);
    var divObj = $("#" + controlId);
    var divObj2 = $("#" + controlId2);
    if (self.checked == state && self.value == state.toString()) {
        if (divObj) {
            divObj.show();
        }
        if (divObj2) {
            divObj2.hide();
        }
    } else {
        if (divObj) {
            divObj.hide();
        }
        if (divObj2) {
            divObj2.show();
        }
    }
}

/*4 下拉列表改变时 显示或者隐藏控件
self            this自身
controlName     备操作的控件的名称（通用部分） 例：（div0,div1,div2 则传div）

引用：onchange = "OnSelectShowOrHide(this,'divhaha');"
单项设置：
<tbody id="siteNavigationNodeType" to=",1,2,">
</tbody>
*/
function OnSelectShowOrHide(self, controlName) {
    var value = self.options[self.selectedIndex].value;
    $("[id=" + controlName + "]").each(function () {
        $(this).hide();
    });

    $("[id=" + controlName + "][to*='," + value + ",']").each(function () {
        $(this).show();
    });
}

/*5 针对Awesome弹出框的loading状态
loadingShow为显示 loadingHide为隐藏
不需要调用 因为调用的方法我已经写在了通用插件当中
*/
function loadingShow(id) {
    if ($("#" + id).find("loading" + id).length == 0)
        $("#" + id).append("<div id='loading" + id + "' class='loading' style='width:100%; height:100%; background-color:#fff; z-index:999'></div>");
}
function loadingHide(id) {
    $("#loading" + id).hide("slow");
}



/*6 Ajax获取页面信息 并赋值到对应id元素中
*/
function GetAjaxContentByUrl(id, url) {
    if ($("#" + id).html()) {
        var addStr = "";
        if (url.indexOf("?") > -1) {
            addStr = '&r=' + new Date().getMilliseconds();
        } else {
            addStr = '?r=' + new Date().getMilliseconds();
        }
        while (url.indexOf('&amp;') >= 0)
            url = url.replace('&amp;', '&');
        $.get(url + addStr, function (d) {
            $("#" + id).html(d);
        });
    }
}


/*7 文本框发生改变时 同步将值赋值到另一个元素内（都必须为value属性）
*/
function TextOnChangeToAnother(obj, anotherName) {
    $("#" + anotherName).prop("value", obj.value);
}

/*7-1 文本框发生改变时 同步将值赋值到另一个富文本元素内（都必须为value属性）
*/
function TextOnChangeToCkeditorAnother(obj, anotherName) {
    //    CKEDITOR.instances[anotherName].setData(CKEDITOR.instances[anotherName].getData() + obj.value);
    //    $("#" + name).value = CKEDITOR.instances[anotherName].getData();
    anotherName.setContent(obj.value);
}

/*7-2  公用的伪级联修改数据  2011-07-08
self            this自身
showValue       将自身的value赋值到 显示控件controlId
isAdd           是增加还是修改

引用：onchange = "TitleToText(this,'type1Div',true);"
*/
function TitleToText(self, controlId, isAdd) {
    var value = self.title;
    var divObj = $("#" + controlId);
    if (isAdd) {
        divObj[0].value += value;
    } else {
        divObj[0].value = value;
    }
}

function MultiSelectOnChangeAddToAnother(id, anotherName) {
    alert(id);
    alert($("#ld" + id)[0].html());
}

/*7-3 文本框发生改变时 同步将值赋值到另一个TextArea内
*/
function TextOnChangeToAnotherTextArea(obj, anotherName) {
    $('#' + anotherName).text(obj.value);
}



/*8-1.1  通用的单选方法                                            2011-12-30
*/
function onRadioForTree(chk, treeName, treeId, treeParentId) {
    if (chk.checked) {
        $('input[type=checkbox][treeName=' + treeName + '][treeParentId=' + treeParentId + ']').each(function () {
            if (this.name != chk.name) {
                $(this).prop('checked', false);
            }
        });
    }
}

/*9-1.1  通用的文本框单击提示文字消失，失去焦点还原，带按钮联动样式                                            2012-5-25
zhx
onblur="keywordblur('Search','Search_Button','搜索你关注的文章或医生','text_search_gray','button_search_gray');" onfocus="keywordfocus('Search','Search_Button','搜索你关注的文章或医生','text_search','button_search');" value="搜索你关注的文章或医生"
*/
function keywordfocus(id, button, value, textClass, buttonClass) {
    var text = $("#" + id);
    if (text != null && text[0].value == value) {
        text[0].value = '';
    }
    text[0].className = textClass;
    if (button != '') {
        var but = $("#" + button);
        if (but) {
            $("#" + button)[0].className = buttonClass;
        }
    }
}

function keywordblur(id, button, value, textClass, buttonClass) {
    var text = $("#" + id);
    if (text[0].value == '') {
        text[0].value = value;
        text[0].className = textClass;
        if (button != '') {
            var but = $("#" + button);
            if (but) {
                $("#" + button)[0].className = buttonClass;
            }
        }
    }
}
/*9-1.2  通用的文本框单击提示文字消失，失去焦点还原                                            2012-5-28
zhx
onblur="textblur(this,'text_search_gray');" onfocus="textfocus(this,'text_search');"
*/
function textfocus(text, textClass) {
    if (text != null) {
        text.className = textClass;
    }
}

function textblur(text, textClass) {
    if (text.value == '') {
        text.className = textClass;
    }
}
// 如果文本框里有内容,默认不显示背景
$(document).ready(function () {
    $("https://ss.bjmu.edu.cn/Scripts/Common/textarea.ku").each(function (i) {
        if ($(this).val() != "") $(this).removeClass("ku").addClass("ku_text");
    });
});


/*10  鼠标浮上显示与隐藏                                            2012-7-6
zhx
*/
// onmousemove="tatitleshow(@(o.SchedulingAppointmentId))" onmouseout="tatitlehide(@(o.SchedulingAppointmentId))"
//    <div id="tatitle@(o.EmailId)" class="detail" style="display: none;">
//        @Html.Raw(o.Content)
//    </div>
function tatitleshow(i) {
    $('#tatitle' + i).show();
}
function tatitlehide(i) {
    $('#tatitle' + i).hide();
}

/*11  针对百度编辑器的分页，现在应用与文章页面                                            2013-4-29
*/
function jquery_page_initialization() {
    var content = $("#zoom").html();
    var pageCount = 0;
    var type = "";
    if (content.indexOf("_page_break_tag_") > 0) {
        if (content.split("_baidu_page_break_tag_").length > 1) {
            type = "_baidu_page_break_tag_";
        }
        else if (content.split("_ueditor_page_break_tag_").length > 1) {
            type = "_ueditor_page_break_tag_";
        }
        pageCount = content.split(type).length;
        $("#zoom").html(content.split(type)[0]);
    }
    var pageIndex = "";
    var pageCurrent = 1 / 1;
    // 拼接页码，在JS增加在zoom元素后面
    var pagehtml = "<div class='ae-pagination'><div id='old_content' style='display:none;'>" + content + "</div><p id='jquery_ajax_current_page' style='display:none;'>1</p><p id='jquery_ajax_max_page' style='display:none;'>" + pageCount + "</p><a class='pagination_firstpage' href='javascript:jquery_page_show(1,\"" + type + "\")'>首页</a>" +
            "<a class='pagination_previouspage' href='javascript:jquery_page_show_next(-1,\"" + type + "\")'>上一页</a>";
    for (var i = 1; i <= pageCount; i++) {
        pageIndex = pageIndex + "<a id='page" + i + "' class='pagination_page' href='javascript:jquery_page_show(" + i + ",\"" + type + "\")'>" + i + "</a>";
    }
    pagehtml = pagehtml + pageIndex + "<a class='pagination_nextpage' href='javascript:jquery_page_show_next(1,\"" + type + "\")'>下一页</a>" +
            "<a class='pagination_lastpage' href='javascript:jquery_page_show(" + pageCount + ",\"" + type + "\")'>末页</a></div>";
    $("#zoom").after(pagehtml);
    jquery_page_update_state(type);
}

function jquery_page_show(page, type) {
    $("#zoom").html($("#old_content").html().split(type)[page - 1]);
    $("#jquery_ajax_current_page").html(page);
    jquery_page_update_state(type);
}

function jquery_page_show_next(difference, type) {
    var pageCurrent = parseInt($("#jquery_ajax_current_page").html()) + difference;
    jquery_page_show(pageCurrent, type);
}

function jquery_page_update_state(type) {
    // 获取当前jquery_ajax_current_page，jquery_ajax_max_page
    // 为1时，首页、上一页 删除Js事件，更改样式
    var pageCurrent = parseInt($("#jquery_ajax_current_page").html());
    var pageCount = parseInt($("#jquery_ajax_max_page").html());
    if (pageCurrent == 1) {
        $(".pagination_firstpage").prop("href", "javascript:void(0)");
        $(".pagination_firstpage").prop("class", "pagination_firstpage disabled ui-state-default ui-corner-all");
        $(".pagination_previouspage").prop("href", "javascript:void(0)");
        $(".pagination_previouspage").prop("class", "pagination_previouspage disabled ui-state-default ui-corner-all");
    }
    else if ($(".pagination_firstpage").hasClass("disabled")) {
        $(".pagination_firstpage").prop("href", "javascript:jquery_page_show(1,\"" + type + "\")");
        $(".pagination_firstpage").prop("class", "pagination_firstpage ui-state-default ui-corner-all");
        $(".pagination_previouspage").prop("href", "javascript:jquery_page_show_next(-1,\"" + type + "\")");
        $(".pagination_previouspage").prop("class", "pagination_previouspage ui-state-default ui-corner-all");
    }
    // 与最大页码相等时，末页，下一页 删除Js事件，更改样式
    if (pageCurrent == pageCount) {
        $(".pagination_lastpage").prop("href", "javascript:void(0)");
        $(".pagination_lastpage").prop("class", "pagination_lastpage disabled ui-state-default ui-corner-all");
        $(".pagination_nextpage").prop("href", "javascript:void(0)");
        $(".pagination_nextpage").prop("class", "pagination_nextpage disabled ui-state-default ui-corner-all");
    }
    else if ($(".pagination_lastpage").hasClass("disabled")) {
        $(".pagination_lastpage").prop("href", "javascript:jquery_page_show(" + pageCount + ",\"" + type + "\")");
        $(".pagination_lastpage").prop("class", "pagination_lastpage ui-state-default ui-corner-all");
        $(".pagination_nextpage").prop("href", "javascript:jquery_page_show_next(1,\"" + type + "\")");
        $(".pagination_nextpage").prop("class", "pagination_nextpage ui-state-default ui-corner-all");
    }
    // 更改页码，将所有页面的选中样式都删掉，没有事件的增加事件
    $('[id^=page][class*=ae-pagination-current]').each(function () {
        $(this).prop("href", "javascript:jquery_page_show(" + $(this).prop("id").replace(/[^0-9]/ig,"") + ",\"" + type + "\")");
        $(this).prop("class", "pagination_page ui-state-default ui-corner-all");
    });

    // 更改当前页码的样式 删除事件
    $("#page" + pageCurrent).prop("href", "javascript:void(0)");
    $("#page" + pageCurrent).prop("class", "ae-pagination-current ui-state-highlight ui-state-default ui-corner-all");
}

/*12  通过Url动态获取内容弹出层展示                            2013-5-06
*/

function pop_upLayerByUrl_Load(thisA, url) {
    var value = $(thisA).find(".msgbox").length;
    if (value > 0) {
        $(thisA).addClass("spanHover").find(".msgbox").show();
    } else {
        var floathtml = "<div class=\"msgbox\" style=\"display:none;\"><div class=\"msgbg\"></div></div>";
        $(thisA).append(floathtml);
        var floathtml = $.get(url);
        $.get(url, function (d) {
            $(thisA).find(".msgbox").html(d);
        });
        $(thisA).addClass("spanHover").find(".msgbox").show();
    }
}
function pop_upLayerByUrl_Hide(thisA) {
    $(thisA).removeClass("spanHover").find(".msgbox").hide();
}

String.prototype.changeQuery = function (name, value) {
    /// <summary>修改网址中的参数,不存在则添加,存在则修改</summary>
    var reg = new RegExp("(^|)" + name + "=([^&]*)(|$)");
    var tmp = name + "=" + value;
    if (this.match(reg) != null) {
        return this.replace(eval(reg), tmp);
    } else {
        if (this.match("[\?]")) {
            return this + "&" + tmp;
        } else {
            return this + "?" + tmp;
        }
    }
}
String.prototype.getQuery = function (name) {
    /// <summary>获取网址中的参数,不存在返回空</summary>
    var value = "";
    var reg = new RegExp("(^|)" + name + "=([^&]*)(|$)");
    if (this.match(reg) != null) {
        value = reg.exec(this)[0].split('=')[1];
    }
    return value;
}
function getRandom(n) {
    /// <summary>生成介于 0-n 之间的随即数</summary>
    return Math.floor(Math.random() * n + 1);
}
//Iframe高度自适应（兼容IE/Firefox、同域/跨域）
function SetCwinHeight() {
    var iframeid = document.getElementById("iframeid"); //iframe id
    if (document.getElementById) {
        if (iframeid && !window.opera) {
            if (iframeid.contentDocument && iframeid.contentDocument.body.offsetHeight) {
                iframeid.height = iframeid.contentDocument.body.offsetHeight;
            } else if (iframeid.Document && iframeid.Document.body.scrollHeight) {
                iframeid.height = iframeid.Document.body.scrollHeight;
            }
        }
    }
}


///搜索跳转页面
function pagesss(url) {

    if (!isNaN($("#page").val())) {

        if ($('#page').val() > 0 && $('#page').val() < $('#count').val()) {
            url += "?page=" + $('#page').val();
        } else {
            alert("请输入正确的值");
        }
    } else {
        alert("请输入数字！");
    }
    window.location.href = url;

}
///
var browser = {
    versions: function () {
        var u = navigator.userAgent, app = navigator.appVersion;
        return {//移动终端浏览器版本信息
            trident: u.indexOf('Trident') > -1, //IE内核
            presto: u.indexOf('Presto') > -1, //opera内核
            webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
            gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
            mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
            android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
            iPhone: u.indexOf('iPhone') > -1, //是否为iPhone （QQHD浏览器|| u.indexOf('Mac') > -1，，太特别，返回的是苹果版本，不考虑了）
            iPad: u.indexOf('iPad') > -1, //是否iPad
            webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
        };
    }(),
    language: (navigator.browserLanguage || navigator.language).toLowerCase()
}

function isMobileBrowser(type) {
    if ((!browser.versions.webKit && browser.versions.mobile) || browser.versions.ios || browser.versions.android || browser.versions.iPhone || browser.versions.iPad) {

        var arr, reg = new RegExp("(^| )browser_type=([^;]*)(;|$)");

        if (!(arr = document.cookie.match(reg)) || (unescape(arr[2]) == type)) {
            return true;
        } else {
            return false;
        }
    }
}

/*13 分页页面跳转
target     目标页码
pageCount  总页数
url        跳转url
errorText1 错误提示1（请输入1-）
errorText2 错误提示2（的页码）
errorText3 错误提示3（请输入正确页码）

引用: onclick='jumpPage(target," + pageCount + ",\"" + url + "\")'
*/
function jumpPage(target, pageCount, url, errorText1, errorText2, errorText3) {
    //验证格式
    var r = /^[1-9][0-9]*$/; //正整数
    var isInt = r.test(target);
    if (isInt) {
        //若目标页大于零 且小于或等于总页数 执行跳转
        if (parseInt(target) > 0 && parseInt(target) <= parseInt(pageCount)) {
            if (url.substr(url.length - 4, 4) == "html") {
                jumpStaticPage(target, url);
            }
        }
        else {
            $("#jumpPageErrorMessage").text(errorText1 + pageCount + " " + errorText2);
            return false;
        }
    }
        //否则提示重新输入
    else {
        $("#jumpPageErrorMessage").text(errorText3);
        return false;
    }
}
//静态页面跳转
//target     目标页码
//url        跳转url

function jumpStaticPage(target, url) {
    var newUrl = url.substr(0, url.lastIndexOf("/") + 1);
    newUrl = newUrl + target + ".html";
    window.location.href = newUrl;
}

/*14 禁止按钮重复点击*/
/*使用方法: onclick="return RSubmitLimit($(this));"*/
function RSubmitLimit(curA) {
    if ($('.inbusy').length == 0) {
        $('[onclick*=RSubmitLimit]').css('color', '#999');
        curA.append('<em class="inbusy" style="font-style:normal;">.</em>');
        inbusyHtml($('.inbusy'));
        return true;
    }
    else {
        return false;
    }
}

function inbusyHtml(p) {
    setTimeout(function () {
        p.html('..');
        setTimeout(function () {
            p.html('...');
            setTimeout(function () {
                p.html('.');
                inbusyHtml(p);
            }, 200);
        }, 200);
    }, 200);
}
/*15 “是否组合”复选框改变时 显示或者隐藏控件集合
self            this自身
controlId       check控件Id
controlArr2      被操作的控件集合Id

引用：onclick = "OnCheckBooleanShowOrHideArr(this,false,['sd','rrr'])" 
*/
function OnCheckBooleanShowOrHideArr(self, state, controlArrId) {
    var i;
    var divObj;
    if (state) {
        for (i = 0; i < controlArrId.length; i++) {       
            divObj = $("#" + controlArrId[i]);
            divObj.show();
        }
    } else {
        for (i = 0; i < controlArrId.length; i++) {
            divObj = $("#" + controlArrId[i]);
            divObj.hide();
        }
    }
}


//jQuery 1.8.3 -> 1.9.1 补充的内容：使可以兼容以前的脚本写法
//恢复 toggle(func1,func2) 方法
jQuery.fn.toggle = function (fn) {
    // Save reference to arguments for access in closure
    var args = arguments,
        guid = fn.guid || jQuery.guid++,
        i = 0,
        toggler = function (event) {
            // Figure out which function to execute
            var lastToggle = (jQuery._data(this, "lastToggle" + fn.guid) || 0) % i;
            jQuery._data(this, "lastToggle" + fn.guid, lastToggle + 1);

            // Make sure that clicks stop
            event.preventDefault();

            // and execute the function
            return args[lastToggle].apply(this, arguments) || false;
        };

    // link all the functions, so any of them can unbind this click handler
    toggler.guid = guid;
    while (i < args.length) {
        args[i++].guid = guid;
    }

    return this.click(toggler);
};

//恢复 jQuery.browser 属性
jQuery.uaMatch = function( ua ) {
	ua = ua.toLowerCase();

	var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
		/(webkit)[ \/]([\w.]+)/.exec( ua ) ||
		/(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
		/(msie) ([\w.]+)/.exec( ua ) ||
		ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
		[];

	return {
		browser: match[ 1 ] || "",
		version: match[ 2 ] || "0"
	};
};

// Don't clobber any existing jQuery.browser in case it's different
if ( !jQuery.browser ) {
	matched = jQuery.uaMatch( navigator.userAgent );
	browser = {};

	if ( matched.browser ) {
		browser[ matched.browser ] = true;
		browser.version = matched.version;
	}

	// Chrome is Webkit, but Webkit is also Safari.
	if ( browser.chrome ) {
		browser.webkit = true;
	} else if ( browser.webkit ) {
		browser.safari = true;
	}

	jQuery.browser = browser;
}

//恢复 toggle() 方法
eventsToggle = jQuery.fn.toggle;

function isHidden( elem, el ) {
	elem = el || elem;
	return jQuery.css( elem, "display" ) === "none" || !jQuery.contains( elem.ownerDocument, elem );
}

jQuery.fn.extend({
	toggle: function( state, fn2 ) {
		var bool = typeof state === "boolean";

		if ( jQuery.isFunction( state ) && jQuery.isFunction( fn2 ) ) {
			return eventsToggle.apply( this, arguments );
		}

		return this.each(function() {
			if ( bool ? state : isHidden( this ) ) {
				jQuery( this ).show();
			} else {
				jQuery( this ).hide();
			}
		});
	}
});