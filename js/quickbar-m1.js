// jquery文件是否存在
if (typeof jQuery == 'undefined') { 
	var map_js = document.createElement("script");
	map_js.setAttribute("type", "text/javascript");
	map_js.setAttribute("src", "http://code.jquery.com/jquery-latest.js");
	map_js.onload = map_js.onreadystatechange = jqueryfunc;
	var headobj = document.getElementsByTagName("head")[0];headobj.appendChild(map_js);
}else{
	jqueryfunc();
}
function jqueryfunc(){
	(function($){
		/* share.js */
		var shareid="fenxiang";(function(){var b={url:function(){return encodeURIComponent(window.location.href)},title:function(){return encodeURIComponent(window.document.title)},content:function(a){if(a){return encodeURIComponent($("#"+a).html())}else{return""}},setid:function(){if(typeof(shareid)=="undefined"){return null}else{return shareid}},kaixin:function(){window.open("http://www.kaixin001.com/repaste/share.php?rtitle="+this.title()+"&rurl="+this.url()+"&rcontent="+this.content(this.setid()))},renren:function(){window.open("http://share.renren.com/share/buttonshare.do?link="+this.url()+"&title="+this.title())},sinaminiblog:function(){window.open("http://v.t.sina.com.cn/share/share.php?url="+this.url()+"&title="+this.title()+"&content=utf-8&source=&sourceUrl=&pic=")},baidusoucang:function(){window.open("http://cang.baidu.com/do/add?it="+this.title()+"&iu="+this.url()+"&dc="+this.content(this.setid())+"&fr=ien#nw=1")},taojianghu:function(){window.open("http://share.jianghu.taobao.com/share/addShare.htm?title="+this.title()+"&url="+this.url()+"&content="+this.content(this.setid()))},wangyi:function(){window.open("http://t.163.com/article/user/checkLogin.do?source=%E7%BD%91%E6%98%93%E6%96%B0%E9%97%BB%20%20%20&link="+this.url()+"&info="+this.content(this.setid()))},qqzone:function(){window.open("http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url="+encodeURIComponent(location.href)+"&title="+encodeURIComponent(document.title))},qqweibo:function(){window.open("http://v.t.qq.com/share/share.php?url="+encodeURIComponent(location.href)+"&title="+encodeURIComponent(document.title))+"&appkey="+encodeURI("appkey")},pengyou:function(){window.open("http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?to=pengyou&url="+encodeURIComponent(location.href)+"&title="+encodeURIComponent(document.title))},douban:function(){window.open("http://www.douban.com/recommend/?url="+this.url()+"&title="+this.title()+"&v=1")}};window.share=b})();
		
		$(function(){
			// 底部导航样式
			var share_style = '<style>'
				+'body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td,hr,button,article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {margin:0;padding:0;}'
				+'body{display: -webkit-box;-webkit-box-orient: vertical;-webkit-box-align: stretch; min-width:320px; max-width:640px; margin:0px auto;overflow-x: hidden; font-size:14px; font-family:"Microsoft Yahei";}'
				+'body>.body{ position: absolute; width:100%; height:100%; min-width:320px; max-width:640px;  overflow:hidden; }'
				+'.page-in {-webkit-transition:all 300ms cubic-bezier(0.42, 0, 0.58, 1);-ms-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);}'
				+'.page-out {-webkit-transition:all 300ms cubic-bezier(0.42, 0, 0.58, 1) 0.1s;-ms-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1) 0.1s;transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1) 0.1s;}'
				+'#quickbar-navs{width:240px;  height:100%; z-index:7; background:'+configQuickbar.style.barColor+'; position: absolute; top:0px; left:0px; color:#1e1c1a;}'
				+'#quickbar-navs.page-prev {transform:translate3d(-240px, 0, 0);-ms-transform:translate3d(-240px, 0, 0);-webkit-transform:translate3d(-240px, 0, 0);	-o-transform:translate3d(-240px, 0, 0);	-moz-transform:translate3d(-240px, 0, 0);}'
				+'#quickbar-navs .quickbar-navs-top{ position:relative;z-index:2; height:40px; overflow:hidden; line-height:40px; font-size:1.3em;  background:rgba(255,255,255,0.3); color:#fff; text-align:left; padding-left:10px;}'
				+'#quickbar-navs .quickbar-navs-close{ position:relative; z-index:99; width:20px; margin-top:5px; margin-right:5px; height:20px; line-height:20px; float:right; display:inline; text-align:center; font-size:1em; padding:1px; border-radius:100%; background:rgba(0,0,0,0.5);}'
				+'#quickbar-navs .quickbar-navs-m{ height: 100%; box-sizing:border-box; margin-top: -40px; padding-top: 40px; overflow-y:scroll;-webkit-overflow-scrolling:touch;}'
				+'#quickbar-navs ul.quickbar-navs-list{ padding:0px; margin:0px; height:auto; overflow:hidden;}'
				+'#quickbar-navs ul.quickbar-navs-list li{ height: auto; line-height:35px; overflow:hidden; border-bottom:1px solid rgba(0,0,0,0.3); font-size:1.15em;}'
				+'#quickbar-navs ul.quickbar-navs-list li.menu_body{ margin-bottom:0px;}'
				+'#quickbar-navs ul.quickbar-navs-list li .qbnav-icon{ color:'+configQuickbar.style.navtopColor+'; width:35px; height:35px; text-align:center; float:right; display:inline;text-indent:0px; font-size:1.2em;}'
				+'#quickbar-navs ul.quickbar-navs-list li a{ color:#ffffff; display:block;margin-left:10px;}'
				+'#quickbar-navs ul.quickbar-navs-list li .qbnav-icon1{ display:none;}'
				+'#quickbar-navs ul.quickbar-navs-list li.menu_body dl{ height:32px; line-height:32px; overflow:hidden; font-size:0.9em; text-indent:0px; padding-left:12px;}'
				+'#quickbar-navs ul.quickbar-navs-list li.menu_body dl span{ color:'+configQuickbar.style.navtopColor+'; font-weight:bold; }'
				+'#quickbar-navs ul.quickbar-navs-list li.menu_body dl a{ color:'+configQuickbar.style.textColor+'; display:block;border-radius:0px; margin:0px;}'
				+'#quickbar-navs ul.quickbar-navs-list li.menu_body dl a:active{ background:rgba(0,0,0,0.1);}'
				+'#quickbar-navs ul.quickbar-navs-list li.cur{background:rgba(0,0,0,0);}'
				+'#quickbar-navs ul.quickbar-navs-list li.cur .qbnav-icon1{ display:block;}'
				+'#quickbar-navs ul.quickbar-navs-list li.cur .qbnav-icon2{ display:none;} '
				+'#quickbar-navs ul.quickbar-navs-list li.menu_body{  height:0px; overflow:hidden; border-bottom:0px; background:rgba(0,0,0,0.1);}'
				+'#quickbar-navs ul.quickbar-navs-list li.cu{ height:auto; overflow:hidden;}'
				+'#quickbar{ width:100%; height:58px; padding-top:2px; overflow:hidden; background:'+configQuickbar.style.barColor+';position:absolute; left:0px; bottom:0px; z-index:99; }'
				+'#quickbar a,#quickbar a:hover,#quickbar-navs a,#quickbar-navs a:hover,.quickbar-sharebox a,.quickbar-sharebox a:hover {text-decoration:none;}'
				+'#quickbar-wrap{ width:100%; height:100%; position: absolute; top:0px; left:0px; z-index:5; }'
				+'#quickbar-wrap.page-next {transform:translate3d(240px, 0, 0);-ms-transform:translate3d(240px, 0, 0);-webkit-transform:translate3d(240px, 0, 0);	-o-transform:translate3d(240px, 0, 0);	-moz-transform:translate3d(240px, 0, 0);}'
				+'#quickbar-wrap-body{width:100%; height:100%; overflow:hidden;overflow-y : auto; -webkit-overflow-scrolling:touch;overflow-scrolling: touch; position:absolute; top:0px; left:0px; }'
				+'#quickbar .iconfont{font-size:26px;line-height:34px;}'
				+'#quickbar > ul{margin:0;padding:0;display:-webkit-box;display:-moz-box;display:-o-box;display:-ms-box;display:box; width:100%; height:auto; overflow: hidden;}'
				+'#quickbar > ul li{list-style:none; height:58px; overflow:hidden; text-align:center; }'
				+'#quickbar > ul li{-webkit-box-flex:1;-moz-box-flex:1;-o-box-flex:1;-ms-box-flex:1;box-flex:1;}'
				+'#quickbar > ul li a{ color:'+configQuickbar.style.textColor+'; display:block; }'
				+'#quickbar > ul li p{ height:23px; overflow:hidden;  line-height:23px;}'
				+'#quickbar > ul li .title{ height:23px; overflow:hidden;  line-height:23px;}'
				+'#quickbar > ul li .fix_icon{ height:33px; overflow:hidden;'+(configQuickbar.style.iconColor?'color:'+configQuickbar.style.iconColor+';':'')+'}'
				+'#quickbar .current{background:rgba(0,0,0,0.4);}'
				+'#quickbar .current1{background:rgba(255,255,255,0.2); }'
				+'.quickbar-tips{ display:none; height:35px; overflow:hidden; line-height:35px; position:absolute; bottom:58px; background-color:'+configQuickbar.style.navtopColor+'; left:0px; z-index:99; width:100%; color:'+configQuickbar.style.textColor+'; font-size:1.13em; }'
				+'.quickbar-tips .tips-close{ width:35px; height:35px; overflow:hidden; line-height:35px;float:right; display: block; position:relative;  cursor:pointer; color:'+configQuickbar.style.textColor+';  text-indent:0px; text-align:center; z-index: 10;}'
				+'.quickbar-tips:before{ width:25px; height:25px; content:""; position:absolute; background-color:'+configQuickbar.style.barColor+'; border-radius:100%; right:5px; top:5px;}'
				+'.quickbar-tips .tips-content{ background-color:rgba(255,255,255,0.2);}'
				+'.quickbar-tips .iconfont{ font-size:25px; margin: 0 5px;}'
				+'.quickbar-sharebox{ width:100%; height:130px; padding-top:15px; position:absolute; bottom:-145px; left:0px; z-index:9999; background:#f5f5f5;-webkit-transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in; -o-transition: all 0.3s ease-in; transition: all 0.3s ease-in; }\n'
				+'.quickbar-sharebox.show_share{transform: translate(0px,-145px);-ms-transform: translate(0px,-145px);-webkit-transform: translate(0px,-145px);-o-transform: translate(0px,-145px);-moz-transform: translate(0px,-145px);}'
				+'.quickbar-sharebox .bn-share-con {overflow-x:scroll;-webkit-overflow-scrolling:touch;}'
				+'.quickbar-sharebox .thumbs-cotnainer {width: 640px;}'
				+'.quickbar-sharebox .thumbs-cotnainer .share-icon {float: left;width: 80px; text-align:center}'
				+'.quickbar-sharebox .thumbs-cotnainer .share-icon .title {color: #AAA;}'
				+'.quickbar-sharebox .share-cance{ height:35px; line-height:35px; overflow:hidden; background:rgba(0,0,0,0.05); text-align:center; margin-top:10px;}'
				+'.quickbar-sharebox .share-con{ width:100%; height:85px; overflow:hidden;}'
				+'.quickbar-opacity2{ width:100%; height:100%; position:fixed; top:0px; left:0px; background:rgba(0,0,0,0.2); z-index:2222; display:none;}</style>';
			$('head').append(share_style);
			// 底部导航 
			var li_btn = '';
			var li_nav = '';
			// 获取底部导航图标数据
			$.each(dataQuickbar.quickbar, function(k,v) {
				if (typeof v.enable !== 'undefined' && !v.enable) return true;
				if (v.type == 'share') {
					var idAttr = 'id="share_btn"';
				}else if(v.type == 'search'){
					var idAttr = 'id="search_btn"';
				}else{
					var idAttr = '';
				}
				li_btn += '<li><a href="'+v.link+'" '+idAttr+'><p class="fix_icon">'+(v.icon == null ? '<img src="'+v.image+'" width="33" width="33">' : '<i class="iconfont">'+v.icon+'</i>' )+'</p><p class="title">'+v.name+'</p></a></li>';
			});
			// 获取侧边导航数据
			$.each(dataQuickbar.catlist, function(k,v) {
				if(v.childmenu == null){
					li_nav += '<li><a href="'+v.url+'">'+v.name+'</a></li>';
				}else{
					li_nav += '<li class="menu_head">\n\
					<dl class="qbnav-icon"><span class="qbnav-icon1" style="color:'+(configQuickbar.style.iconColor!=configQuickbar.style.textColor ? configQuickbar.style.iconColor : configQuickbar.style.navtopColor)+'">-</span><span class="icon2" style="color:'+(configQuickbar.style.iconColor!=configQuickbar.style.textColor ? configQuickbar.style.iconColor : configQuickbar.style.navtopColor)+'">+</span></dl>\n\
					<a href="'+v.url+'">'+v.name+'</a></li>\n\
					<li class="menu_body">';
					!function(childmenu, deep) {
						deep++;
						for (var i = 0; i < childmenu.length; i++) {
							li_nav += '<dl style="padding-left:'+(deep*10)+'px"><a href="'+childmenu[i].url+'">>'+childmenu[i].name+'</a></dl>';
							if (childmenu[i].childmenu) {
								arguments.callee(childmenu[i].childmenu, deep);
							}
						}
					}(v.childmenu, 0);
					li_nav += '</li>';
				}
			});
			// 低版本jQuery的wrap方法会重复执行body根节点下的script标签
			if (parseFloat($().jquery) < 1.9) {
				$('body').find('script').remove()
			}
			// 数据填充
			$('body').wrapInner('<div id="quickbar-wrap-body"></div>').wrapInner('<div id="quickbar-wrap" class="page-active">\n\
				<div class="quickbar-opacity2"></div>\n\
				<div class="quickbar-sharebox">\n\
					<div class="bn-share-con">\n\
						<div class="thumbs-cotnainer">\n\
							<div class="share-icon"> <a title="分享到Qzone空间" href="javascript:void(0);" class="qqzone"><img src="'+configQuickbar.share_pic.Qzone+'" width="60" height="60"><dt class=" title">Qzone</dt></a></div> \n\
							<div class="share-icon"><a title="分享到腾讯微博" href="javascript:void(0);"  class="qqweibo"><img src="'+configQuickbar.share_pic.qqweibo+'" width="60" height="60"><dt class=" title">腾讯微博</dt></a></div> \n\
							<div class="share-icon"> <a title="分享到百度收藏" href="javascript:void(0);" class="baidusoucang"><img src="'+configQuickbar.share_pic.baidu+'" width="60" height="60"><dt class=" title">百度收藏</dt></a></div>\n\
							<div class="share-icon"><a title="分享到新浪微博" href="javascript:void(0)" class="xinlang"><img src="'+configQuickbar.share_pic.weibo+'" width="60" height="60"><dt class=" title">新浪微博</dt></a></div>  \n\
						</div>\n\
					</div>\n\
					<div class="share-cance">取消</div>     \n\
				</div>\n\
				<div class="quickbar-tips"><span class="tips-close">×</span><div class="tips-content"></div></div>\n\
				<div id="quickbar" class="fixed public-bg1" style="background:'+configQuickbar.style.barColor+'">\n\
					<ul>\n\
					<li><a href="#" id="quickbar-navs-btn"><p class="fix_icon"><i class="iconfont">&#xe603;</i></p><p class="title">导航</p></a></li>\n\
					'+li_btn+'\n\
					</ul>\n\
				</div>\n\
			').wrapInner('<div class="body public-bg2">\n\
				<div id="quickbar-navs" class="page-prev public-bg1" style="background:'+configQuickbar.style.barColor+'">\n\
					<h1 class="quickbar-navs-top public-color1" style="'+(configQuickbar.style.navtopColor ? 'background:'+configQuickbar.style.navtopColor : '')+'"><span class="quickbar-navs-close" style="background:'+(configQuickbar.style.iconColor!=configQuickbar.style.textColor ? configQuickbar.style.iconColor : configQuickbar.style.navtopColor)+'">×</span>快速导航</h1>\n\
					<div class="quickbar-navs-m">\n\
						<ul class="quickbar-navs-list">\n\
							<!--<li><a href="index.html">首 页</a></li>-->\n\
							'+li_nav+'\n\
						</ul>\n\
					</div>\n\
				</div>\n\
			');
			// 模块开启
			if (previewJSQuickbar.module) {
				if (typeof previewJSQuickbar.module === 'string') {
					$('#quickbar-wrap > .quickbar-tips .tips-content').append($(previewJSQuickbar.module));
				}else if (typeof previewJSQuickbar.module === 'object') {
					if (previewJSQuickbar.module.tel) {
						$('#quickbar-wrap > .quickbar-tips .tips-content').append('<i class="iconfont">&#xe609;</i>咨询热线：' + previewJSQuickbar.module.tel);
					}
				}
				if ($('#quickbar-wrap > .quickbar-tips .tips-content').html()) {
					$('#quickbar-wrap > .quickbar-tips').show();
					$("#quickbar-wrap > .quickbar-tips .tips-close").click(function(){
						$('#quickbar-wrap > .quickbar-tips').hide();
						$(window).resize();
						return false;
					})
				}
			}
			// 主体高度计算
			$(window).resize(function() {
				var qbTipsHeight = $(".quickbar-tips").is(':hidden') ? 0 : $(".quickbar-tips").height();
				$("#quickbar-wrap-body").height($(window).height()-$("#quickbar").height()-qbTipsHeight);
			}).resize();
			// 隐藏导航跟wrap的切换
			$("#quickbar #quickbar-navs-btn").on('click',function(){
				$("#quickbar-navs").removeClass("page-prev").addClass("page-in");
				$("#quickbar-wrap").removeClass("page-active").addClass("page-next page-in")
				$(".quickbar-opacity2").show()
				pageSlideOver();
			});
			$("#quickbar-navs .quickbar-navs-close,.quickbar-opacity2").on('click',function(){ 
				$("#quickbar-navs").removeClass("page-in").addClass("page-prev page-out")
				$("#quickbar-wrap").removeClass("page-next page-in").addClass("page-out")
				$(".quickbar-opacity2").hide()
				$(".quickbar-sharebox").removeClass("show_share")
				pageSlideOver();
			});
			function pageSlideOver(){
				$('.page-out').on('transitionend', function(){
						$(this).removeClass('page-out');
				});
				$('.page-in').on('transitionend', function(){
						$(this).removeClass('page-in');
				});
			}
			// 幻灯片元素与类"menu_body"段与类"menu_head"时点击
			$("#quickbar-navs .menu_head .qbnav-icon").click(function(){
				$(this).parent().toggleClass("cur").next(".menu_body").toggleClass("cu").siblings(".menu_body").removeClass("cu");
				$(this).parent().siblings().removeClass("cur");
			});
			// 分享按钮
			var _shareIcon = $('.quickbar-sharebox .thumbs-cotnainer .share-icon');
			$('.quickbar-sharebox .thumbs-cotnainer').width(_shareIcon.outerWidth() * _shareIcon.length);
			$("#quickbar #share_btn").on('click',function(){
				$(".quickbar-sharebox").addClass("show_share");
				$(".quickbar-opacity2").show();
				return false;
			});
			$(".quickbar-sharebox .share-cance").on('click',function(){
				$(".quickbar-sharebox").removeClass("show_share");
				$(".quickbar-opacity2").hide();
			});
			// 分享操作
			$(function() {
				$(".renren").click(function() {
					share.renren()
				});
				$(".xinlang").click(function() {
					share.sinaminiblog()
				});
				$(".douban").click(function() {
					share.douban()
				});
				$(".kaixin").click(function() {
					share.kaixin()
				});
				$(".taojianghu").click(function() {
					share.taojianghu()
				});
				$(".wangyi").click(function() {
					share.wangyi()
				});
				$(".qqzone").click(function() {
					share.qqzone()
				});
				$(".baidusoucang").click(function() {
					share.baidusoucang()
				});
				$(".qqweibo").click(function() {
					share.qqweibo()
				});
				$(".qqpengyou").click(function() {
					share.pengyou()
				})
			});
			// 覆盖初始化事件
			window.Quickbar_backtoTop = function() {
				$("#quickbar-wrap-body").animate({scrollTop :0}, 800);
			};
			window.Quickbar_showCategories = function() {
				$("#quickbar-navs").removeClass("page-prev").addClass("page-in");
				$("#quickbar-wrap").removeClass("page-active").addClass("page-next page-in")
				$(".quickbar-opacity2").show()
				pageSlideOver();
			};
			window.Quickbar_share = function() {
				$(".quickbar-sharebox").addClass("show_share");
				$(".quickbar-opacity2").show();
			};
		});
	})(jQuery);
}