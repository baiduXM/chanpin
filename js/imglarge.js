if (typeof jQuery == 'undefined') {
    var jsjQuery = document.createElement("script");
    jsjQuery.setAttribute("type", "text/javascript");
    jsjQuery.setAttribute("src", "http://chanpin.xm12t.com.cn/js/jquery.min.js");
    jsjQuery.onload = jsjQuery.onreadystatechange = jqueryfunc;
    var headobj = document.getElementsByTagName("head")[0];headobj.appendChild(jsjQuery);
} else {
    jqueryfunc();
}
function jqueryfunc(){
$(document).ready(function(){
var num=0;
var window_w=window.screen.width;
var window_h=window.screen.height;
var w_width=window_w*0.7;
var w_height=window_h*0.7;
var w_pro=w_width/w_height;
$(document).click(function(e){
	e = window.event || e;
	var obj = e.srcElement || e.target;
		if($(obj).is(".imgfade")){
			$(".mimgbrowse").remove();
		}else if($(obj).is(".mbrowse .prev")){
			prev_photo();
		}else if($(obj).is(".mbrowse .next")){
			next_photo();
		}
});
function prev_photo(){
	var show_id=$(".mbrowse .show_img").attr("id");
	var show_num=$(".mbrowse .show_img").index();
	show_id=(show_num>0)?$(".mbrowse img:nth-child("+(show_num)+")").attr("id"):$(".mbrowse img:nth-child("+(num)+")").attr("id");
	$(".mbrowse .imgpreview").hide();
	$(".mbrowse .imgpreview").removeClass("show_img");
	$(".mbrowse #"+show_id).show();
	$(".mbrowse #"+show_id).addClass("show_img");
	setwh($(".mbrowse #"+show_id).attr("src"));
}
function next_photo(){
	var show_id=$(".mbrowse .show_img").attr("id");
	show_id=($(".mbrowse .show_img").next("img").attr("id")!=undefined)?$(".mbrowse .show_img").next("img").attr("id"):$(".mbrowse img:nth-child(1)").attr("id");
	$(".mbrowse .imgpreview").hide();
	$(".mbrowse .imgpreview").removeClass("show_img");
	$(".mbrowse #"+show_id).show();
	$(".mbrowse #"+show_id).addClass("show_img");
	setwh($(".mbrowse #"+show_id).attr("src"));
}
$(document).keyup(function(e){
	e = e || window.event;
	var code = e.which || e.keyCode;
	if (code == 27){
		$(".mimgbrowse").remove();
	}else if(code == 37 || code == 38){
		prev_photo();
	}else if(code == 39 || code == 40){
		next_photo();
	}
});
$(document).scroll(function(){
	$(".mimgbrowse").css("top",$("body").scrollTop()+"px");
});
$(".bd img").click(function(){
	if($(this).parents("a").attr("href")==undefined){
		browsenew($(this));
	}
});
$(".slides img").click(function(){
	if($(this).parents("a").attr("href")==undefined){
		browsenew($(this));
	}
});
$(".tempWrap img").click(function(){
	if($(this).parents("a").attr("href")==undefined){
		browsenew($(this));
	}
});
$(".focusBox img").click(function(){
	if($(this).parents("a").attr("href")==undefined){
		browsenew($(this));
	}
});
function setwh(src){
	var img = new Image();
	img.src =src;
	var w = img.width;
	var h = img.height;
	var img_pro=w/h;
	var img_width,img_height;
	if(img_pro>w_pro||h<w_height){
		img_width=w;
	}else{
		img_width=img_pro*w_height;
	}
	$(".mbrowse").css({'max-width':w_width+'px','max-height':w_height+'px','width':img_width+'px',});
	$(".imgpreview").css({'max-width':w_width+'px','max-height':w_height+'px','width':img_width+'px',});
	$(".mbrowse").css('top',((window_h-$(".mbrowse").height())/4*100/window_h)+'%');
}
function browsenew(obj){
	if($(".mimgbrowse").attr("target")=="img"){
		return false;
	}
	var img_html='';
	var show_src=obj.attr("src");
	var imgs=[];
	num=0;
	obj.parents('ul').children('li').each(function(){
		if($(this).hasClass('clone')){
			return true;
		}
		if($.inArray($(this).find('img').attr("src"),imgs)+1){
			return true;
		}else{
			imgs[num]=$(this).find('img').attr("src");
		}
		var show_img=$(this).find('img').attr("src")==show_src?'':'style="display:none"';
		img_html +='<img class="imgpreview'+(show_img?'':' show_img')+'" id="img_'+num+'" src="'+$(this).find('img').attr("src")+'" '+show_img+'/>';
		num++;
	});
	var html='<div class="mimgbrowse" target="img"><div class="imgfade"></div><div class="mbrowse" >'+img_html+'<a class="prev" href="javascript:void(0);"></a><a class="next" href="javascript:void(0);"></a></div></div>';
	$("body").append(html);
	$(".mimgbrowse").css("top",$("body").scrollTop()+"px");
	setwh(obj.attr("src"));
}
});
}