// JavaScript Document
//���������С/�и�-�����б�ҳ������ҳ��*************�޸���2015-07-28
function changeSize(size) {
	var canSize = parseInt($("#zoom").css("fontSize"));
	if(size=="larger")$("#zoom").css({"fontSize":canSize+1,"line-height":(canSize+1)*1.5+"px"});
	if(size=="smaller")$("#zoom").css({"fontSize":canSize>10?(canSize-1):10,"line-height":(canSize>10?(canSize-1):10)*1.5+"px"});
	if(typeof(size)=="number")$("#zoom").css({"fontSize":size,"line-height":""});
}
