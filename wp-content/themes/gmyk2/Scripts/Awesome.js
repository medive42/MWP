var $ae = new function () {
    this.applyAwesomeStyles = function () {
        $(".ae-lookup-openbtn").empty().prepend('<span class="ui-icon ui-icon-newwin"></span>');
        $(".ae-lookup-clearbtn").empty().prepend('<span class="ui-icon ui-icon-gear"></span>');
        $ae.mybutton(".ae-lookup-openbtn");
        $ae.mybutton(".ae-lookup-clearbtn");
    }

    this.mybutton = function (sel) {
        $(sel).unbind('mousedown mouseup mouseleave')
        .hover(function () { $(this).addClass("ui-state-hover"); },
	            function () { $(this).removeClass("ui-state-hover"); })
        .bind({ 'mousedown mouseup': function () { $(this).toggleClass('ui-state-active'); } })
        .addClass("ui-state-default").addClass("ui-corner-all")
        .bind('mouseleave', function () { $(this).removeClass('ui-state-active') });
    }

    this.interactive = function (o) {
        $(o + ' input:text').keyup(function (e) {
            if ($ae.isKeyChange(e.which)) {
                $(o).submit();
            }
        });
        $(o + ' input[type="hidden"], ' + o + ' .ae-array').change(function () {
            $(o).submit();
        });
    }

    this.isKeyChange = function (w) {
        if (w < 9 || w > 45 && w < 91 || w > 93 && w < 112 || w > 185 || w == 32) return true;
        return false;
    }

    this.fullscreen = function (o) {
        $(window).bind("resize", function (e) { $(o).dialog("option", { height: $(window).height() - 50, width: $(window).width() - 50 }).trigger('dialogresize'); });
    }

    loadRadioList = function (o, url, parent) {
        var data = new Array();
        addval(data, parent, "parent");
        addval(data, o, "key");
        $.post(url, data,
        function (d) {
            $("#" + o + "list").empty();
            if (typeof (d) == 'object') {
                var found = false;
                $.each(d, function (i, j) {
                    var sel = "";
                    if (j.Selected == true) { sel = "checked = 'checked'"; $('#' + o).val(j.Value).change(); found = true; };
                    $("#" + o + "list").append("<li><input type='radio' " + sel + " value='" + j.Value + "' name='ae" + o + "' id='ae" + o + i + "'/><label for='ae" + o + i + "' >" + j.Text + "</label></li>");
                    if (!found) $('#' + o).val('').change();
                });
            }
            else { $('#' + o).val('').change(); }
        });
    }

    this.radioList = function (o, url, parent) {
        loadRadioList(o, url, parent);
        $('#' + o + 'list').on('change', 'input',
        function () {
            $('#' + o).val($('#' + o + 'list input:checked').val()).change();
        });
        if (parent) $('#' + parent).change(function () { loadRadioList(o, url, parent); });
    }

    this.checkBoxList = function (o, url, parent, prop, htmlAttributes, pkeys, pvals) {
        loadCheckBoxList(o, url, parent, prop, htmlAttributes, pkeys, pvals);
        // 2012-3-6 zhx 调整为click事件 因为使用change在360和ie下无效
        //$('#' + o + 'list input').live('change', function () { syncCheckBoxList(o, prop); });
        $('#' + o + 'list').on('click', 'input', function () { syncCheckBoxList(o, prop); });
        if (parent) $('#' + parent).change(function () { loadCheckBoxList(o, url, parent, prop, htmlAttributes, pkeys, pvals); });
    }

    syncCheckBoxList = function (o, prop) {
        $('#' + o).empty();
        var ids = '';
        $('#' + o + 'list input:checked').each(function () {
            if (ids.length > 0)
                ids += ",";
            ids += $(this).val();
        });
        $('#' + o).prepend('<input type="hidden" name="' + prop + '" value="' + ids + '" />');
        // 2011-11-11 zhx 调整 原来的选项列表后台获取 全是双份
        //        $('#' + o + 'list input:checked').each(function () {
        //            $('#' + o).prepend('<input type="hidden" name="' + prop + '" value="' + $(this).val() + '" />');
        //        });
        $('#' + o).change();
    }

    loadCheckBoxList = function (o, url, parent, prop, htmlAttributes, pkeys, pvals) {
        var data = new Array();
        addval(data, o, "keys");
        addval(data, parent, "parent");
        $.each(pkeys, function (i, k) {
            data.push({ name: k, value: pvals[i] });
        });
        $.post(url, data, function (d) {
            $('#' + o + 'list').empty();
            if (typeof d == 'object') {
                $.each(d, function (i, j) {
                    var sel = j.Selected ? 'checked="checked"' : "";
                    $('#' + o + 'list').append('<li><input type="checkbox" name="chk' + prop + '" value="' + j.Value + '" ' + sel + ' id="ae' + o + i + '" ' + htmlAttributes + ' /><label for="ae' + o + i + '">' + j.Text + '</label></li>');
                    //$('#' + o + 'list').append('<li><input type="checkbox" name="' + prop + '" value="' + j.Value + '" ' + sel + ' id="ae' + o + i + '" ' + htmlAttributes + ' /><label for="ae' + o + i + '">' + j.Text + '</label></li>');
                });
            }
            $('#' + o + 'list').change();
            syncCheckBoxList(o, prop);
        });
    }

    addval = function (arr, id, key) {
        if (!id) return;
        var o = $('#' + id);
        if (o.hasClass('ae-array')) {
            $('#' + id + ' input').each(function () { arr.push({ name: key, value: $(this).val() }); });
        }
        else {
            arr.push({ name: key, value: o.val() });
        }
    }


    this.ajaxDropdown = function (o, p, url, keys, values, pkeys, pvals) {
        this.loadAjaxDropdown(o, p, url, false, keys, values, pkeys, pvals);

        $("#" + o + "dropdown").keyup(function () { $(this).change(); }).change(function () { $('#' + o).val($('#' + o + 'dropdown').val()).trigger('change'); });

        if (p) $('#' + p).change(function () { $ae.loadAjaxDropdown(o, p, url, true, keys, values, pkeys, pvals); });
        $.each(keys, function (i, k) {
            $('#' + k).change(function () { $ae.loadAjaxDropdown(o, p, url, true, keys, values, pkeys, pvals); });
        });
        //if keys foreach key change same 
    }

    this.loadAjaxDropdown = function (o, p, url, c, keys, values, pkeys, pvals) {
        if (c) $('#' + o).val(null);
        var data = new Array();
        addval(data, o, "key");
        addval(data, p, "parent");

        $.each(pkeys, function (i, k) {
            data.push({ name: k, value: pvals[i] });
        });

        $.each(keys, function (i, k) {
            addval(data, k, values[i]);
        });

        $.post(url, data,
        function (d) {
            $("#" + o + "dropdown").empty();
            if (typeof (d) == 'object')
                $.each(d, function (i, j) {
                    var sel = "";
                    if (j.Selected == true) sel = "selected = 'selected'";
                    $("#" + o + "dropdown").append("<option " + sel + " value=\"" + j.Value + "\">" + j.Text + "</option>");
                });
            if (c) $("#" + o + "dropdown").trigger('change');
        });
    }

    this.autocomplete = function (o, k, p, u, mr, delay, minLen, keys, values, pkeys, pvals) {
        $('#' + o).autocomplete({
            delay: delay,
            minLength: minLen,
            source: function (request, response) {
                var data = new Array();
                data.push({ name: 'searchText', value: request.term });
                data.push({ name: 'maxResults', value: mr });
                addval(data, p, "parent");

                $.each(keys, function (i, k) {
                    addval(data, k, values[i]);
                });

                $.each(pkeys, function (i, k) {
                    data.push({ name: k, value: pvals[i] });
                });

                $.ajax({
                    url: u, type: "POST", dataType: "json",
                    data: data,
                    success: function (d) { response($.map(d, function (o) { return { label: o.Text, value: o.Text, id: o.Id} })); }
                });
            }
        });

        $('#' + o).bind("autocompleteselect", function (e, ui) {
            $('#' + k).val(ui.item ? ui.item.id : null).trigger('change');
            $('#' + o).trigger('change');
        });

        //火狐中文输入完毕时不会触发KeyDown 所以在输入完毕会触发的KeyUp事件中 触发KeyDown
        $('#' + o).keyup(function (e) { if (e.which != '13') $("#" + k).val(null).trigger('change'); $('#' + o).trigger('keydown'); });
                        
    }

    this.popup = function (o, w, h, title, modal, pos, res, btns, fulls) {
        var dragg = true;
        if (fulls) { res = false; modal = true; dragg = false; }
        $("#" + o).dialog({
            show: "fade",
            width: fulls ? $(window).width() - 50 : w,
            height: fulls ? $(window).height() - 50 : h,
            title: title,
            modal: modal,
            position: { my: pos, at: pos, of: window },
            resizable: res,
            draggable: dragg,
            buttons: btns,
            autoOpen: false,
            close: function (e, ui) { $("#" + o).find('*').remove(); }
        });
        if (modal || fulls) $("#" + o).dialog("option", { dialogClass: 'ae-fixed' });
        if (fulls) this.fullscreen("#" + o);
    }

    this.loadLookupDisplay = function (o, url, isChange) {
        $('#ld' + o).val('');
        var id = $('#' + o).val();
        if (id) $.get(url, { id: id }, function (d) {
            $("#ld" + o).val(d);
            if (isChange) {
                // 2011-11-10 zhx 增加触发改变事件 
                $("#ld" + o).change();
            }
        });
    }

    this.loadMultiLookupDisplay = function (o, url, isChange) {
        var ids = $("#" + o + " input").map(function () { return $(this).attr("value"); }).get();
        $("#ld" + o).html('');
        if (ids.length != 0) $.post(url, $.param({ selected: ids }, true),
        function (d) {
            $.each(d, function () { $("#ld" + o).append('<li>' + this.Text + '</li>') });
            if (isChange) {
                // 2011-11-10 zhx 增加触发改变事件 
                $("#ld" + o).change();
            }
        });
    }

    this.lookupChoose = function (o, url, sel) {
        $('#' + o).val('');
        $('#' + o).val($('#' + o + 'ls .' + sel).attr("data-value")).change();
        this.loadLookupDisplay(o, url, true);
        $("#lp" + o).dialog('close');
    }

    this.multiLookupChoose = function (o, loadUrl, prop) {
        $("#" + o).empty();
        $.each($("#" + o + "se li").map(function () { return $(this).attr("data-value"); }).get(), function () {
            $("#" + o).append($("<input type='hidden' name='" + prop + "' \>").attr("value", this));
        });
        $("#" + o).change();
        this.loadMultiLookupDisplay(o, loadUrl, true);
        $("#lp" + o).dialog('close');
    }

    this.lookupClear = function (o) {
        $("#lc" + o).click(function () {
            $("#" + o).val("").change();
            $("#ld" + o).val("");
        });
    }

    this.multiLookupClear = function (o) {
        $("#lc" + o).click(function () {
            $("#" + o + ",#ld" + o).empty();
            $("#" + o).change();
        });
    }

    this.confirm = function (o, f, h, w, yes, no) {
        $("#dialog-confirm-" + o).dialog({
            show: "fade",
            hide: "fade",
            resizable: false,
            height: h,
            width: w,
            modal: true,
            autoOpen: false,
            dialogClass: 'ae-fixed'
        })
    .dialog("option", "buttons", [
    {
        text: yes,
        click: function () { $(this).dialog("close"); f.submit(); }

    },
    {
        text: no,
        click: function () { $(this).dialog("close"); return false; }
    },
    ]);

        $("body").on('click', "." + o, function () {
            f = $(this).closest('form');
            $("#dialog-confirm-" + o).dialog('open');
            return false;
        });
    }

    this.lookupPopupOpenClick = function (o, lck, url, getUrl, isShowCreate, paging, multi, datak, datav, park, parv) {
        $("#lpo" + o + ",#ld" + o).click(function (e) {
            e.preventDefault();
            if (lck != null) return;
            lck = true;
            var data = [{ name: 'prop', value: o}];
            data.push({ name: 'getUrl', value: getUrl });
            data.push({ name: 'isShowCreate', value: isShowCreate });
            data.push({ name: 'paging', value: paging });
            data.push({ name: 'multi', value: multi });

            addarr(data, datak, "datak");
            addarr(data, datav, "datav");
            addarr(data, park, "park");
            addarr(data, parv, "parv");

            $.get(url, $.param(data), function (d) {
                $("#lp" + o).html(d).dialog('open'); lck = null;
            });
        });
    }

    addarr = function (arr, v, k) {
        for (var i in v) arr.push({ name: k, value: v[i] });
    }

    this.takevals = function (a, b, w) {
        $.each(a, function (i, v) {
            var e = $('#' + v);
            var t = e.hasClass('ae-array') ? e.find('input') : e;
            t.clone().removeAttr('id').attr('name', b[i]).appendTo('#' + w);
        });
    }

    // 2012-11-6 zhx 统计展示
    this.ajaxStatistics = function (o, p, title, titleColor, isShowText, isShowNumber, isShowTotal, isShowPercentage, itelIndex, width, url, keys, values, pkeys, pvals) {
        var data = new Array();
        addval(data, o, "key");
        addval(data, p, "parent");

        $.each(pkeys, function (i, k) {
            data.push({ name: k, value: pvals[i] });
        });

        $.each(keys, function (i, k) {
            addval(data, k, values[i]);
        });

        var defaults = {
            title: null, //上方的标题
            titleWidth: 30, //上方的标题
            titleColor: '#F37214',
            titleFontSize: '15px',
            titleAlign: 'center',
            width: '500px', //一共的宽度
            speed: 1000, //显示效果的时间（毫秒）
            bgImg: 'statistics_poll_bg.gif'/*tpa=https://ss.bjmu.edu.cn/Content/Awesome/images/statistics_poll_bg.gif*/, //背景
            itelTotal: 6, //一共支持的颜色数量
            isShowText: "True",
            isShowNumber: "True",
            isShowTotal: "False",
            isShowPercentage: "True",
            itemStyle: {
                fontSize: '12px', //每条文字的大小
                bgColor: '#E2FBF9'//每条的背景颜色
            }
        };

        if (null != title && "" != title)
            defaults.title = title;
        if (null != titleColor && "" != titleColor)
            defaults.titleColor = titleColor;
        if (null != width && "" != width)
            defaults.width = width + "px";
        if (null != isShowText && "" != isShowText)
            defaults.isShowText = isShowText;
        if (null != isShowNumber && "" != isShowNumber)
            defaults.isShowNumber = isShowNumber;
        if (null != isShowTotal && "" != isShowTotal)
            defaults.isShowTotal = isShowTotal;
        if (null != isShowPercentage && "" != isShowPercentage)
            defaults.isShowPercentage = isShowPercentage;

        var itelIndex_int = parseInt(itelIndex);

        var opoll = $("#" + o + "poll");

        $(opoll).append("<table id='" + o + "' border='0' style='font-size:" + defaults.itemStyle.fontSize + ";' width='" + defaults.width + "'></table>"); //设置TABLE的长度
        if (null != title && "" != title) //是否显示标题
            $("table", opoll).append("<tr><td colspan=3 align='" + defaults.titleAlign + "' ><span style='color:" + defaults.titleColor + ";font-size:" + defaults.titleFontSize + ";'><b>" + defaults.title + "</b></span></td></tr>");
        var itemDiv;
        $.post(url, data,
        function (d) {
            if (typeof (d) == 'object')
                $.each(d, function (i, j) {
                    var index = 0; //当前颜色个数
                    var percentage = (j.Number / j.Total * 100).toFixed(2); //取后两位百分比
                    if (isNaN(percentage)) {
                        percentage = 0;
                    }
                    var imgWidth = parseFloat(percentage);
                    if (imgWidth > 0) {
                        if ((i + itelIndex_int) > (defaults.itelTotal - 1))
                            index = (i + itelIndex_int) - (defaults.itelTotal - 1);
                        else
                            index = (i + itelIndex_int);
                        itemDiv = "<div style='background-color:" + defaults.itemStyle.bgColor + ";font-size:" + defaults.itemStyle.fontSize + "'><div divWidth='" + imgWidth + "' style='width:0%;background-image:url(" + defaults.bgImg + ");' class='poll_plan" + index + "' ><div class='plan_e' style='background-image:url(" + defaults.bgImg + ");'><div class='plan_c'  style='background-image:url(" + defaults.bgImg + ");'>";
                        if (defaults.isShowPercentage == "True")
                            itemDiv += percentage + "%";
                        itemDiv += "</div></div></div></div>";
                    }
                    else {
                        itemDiv = "<div style='background-color:" + defaults.itemStyle.bgColor + ";font-size:" + defaults.itemStyle.fontSize + "'><div divWidth='" + imgWidth + "' style='width:0%;background-image:url(" + defaults.bgImg + ");' class='poll_plan" + index + "' ><div class='plan_c'  style='background-image:url(" + defaults.bgImg + ");'>";
                        if (defaults.isShowPercentage == "True")
                            itemDiv += percentage + "%";
                        itemDiv += "</div></div></div>";
                    }
                    var tr = "";
                    if (defaults.isShowText == "True")
                        tr += "<tr class='tr_statistics'><td width='20%' align='right' >" + j.Text + ":</td><td width='80%'>" + itemDiv + "</td><td width='10%' nowrap >";
                    else
                        tr += "<tr class='tr_statistics'><td colspan=2 width='100%'>" + itemDiv + "</td><td width='10%' nowrap >";
                    if (defaults.isShowNumber == "True")
                        tr += j.Number;
                    if (defaults.isShowNumber == "True" && defaults.isShowTotal == "True")
                        tr += "/";
                    if (defaults.isShowTotal == "True")
                        tr += j.Total;
                    tr += "</td></tr>";
                    $("table", opoll).append(tr);
                });

            $("div", opoll).each(function (i, n) {
                if ($(n).attr('divWidth')) {
                    $(n).animate({ width: $(n).attr('divWidth') + '%' }, defaults.speed);
                    $(n).removeAttr("divWidth");
                }
            });
        });
    }
};

$(function () {
    $(".ae-pagination-current").addClass('ui-state-highlight');
    $ae.mybutton(".ae-pagination a");
    $ae.applyAwesomeStyles();
    $("body").ajaxComplete($ae.applyAwesomeStyles);
});
